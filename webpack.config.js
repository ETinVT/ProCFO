const path = require('path');
const webpack = require('webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const HtmlReplacePlugin = require('./webpack-plugins/HtmlReplacePlugin');
require('dotenv').config();
const smartMenu = require('./webpack-plugins/smart-menu');
const cssMenu = require('./webpack-plugins/css-menu');

module.exports = {
  entry: {
    vendors: [ 'babel-polyfill' ],
    bundle: './src/js/index.js',
    compiled: path.resolve(__dirname, 'src/scss/compiled.scss')
  },
  output: {
    filename: '[name].js',
    chunkFilename: '[name].js',
    path: path.resolve(__dirname, 'build'),
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader"
      },
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          use: ['css-loader', 'sass-loader']
        })
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin({
      filename: 'compiled.css'
    }),
    new webpack.ProvidePlugin({
      fetch: 'imports-loader?this=>global!exports-loader?global.fetch!whatwg-fetch'
    }),
    new CleanWebpackPlugin(['build'], {
      watch: true
    }),
    new HtmlWebpackPlugin({
      filename: 'index.html',
      template: 'index.php',
      inject: false
    }),
    new HtmlReplacePlugin([
      {
        pattern: /<!-- Start Navbar -->/,
        replacement: process.env.NAVBAR === 'smart' ? smartMenu : cssMenu
      },
      {
        pattern: /<!-- Start Stylesheet -->/,
        replacement: `<link href="http://cp${process.env.CPSERVER}.cpasitesolutions.com/~${process.env.CPUSERNAME}/admin/compiled.css" rel="stylesheet">`
      },
      {
        pattern: /<!-- Start Header -->/,
        replacement: `<h2>${process.env.COMPANYNAME}</h2>`
      },
      {
        pattern: /{company_name}/,
        replacement: process.env.COMPANYNAME
      },
      {
        pattern: /{firm_type}/,
        replacement: process.env.FIRMTYPE
      },
      {
        pattern: /{street_address}/,
        replacement: process.env.STREETADDRESS
      },
      {
        pattern: /{city}/,
        replacement: process.env.CITY
      },
      {
        pattern: /{state}/,
        replacement: process.env.STATE
      },
      {
        pattern: /{zip}/,
        replacement: process.env.ZIP
      },
      {
        pattern: /{email}/,
        replacement: process.env.EMAIL
      },
      {
        pattern: /{phone}/,
        replacement: process.env.PHONE
      },
      {
        pattern: /{fax}/,
        replacement: process.env.FAX
      },
      {
        pattern: /{domain}/,
        replacement: process.env.DOMAIN
      },
      {
        pattern: /{page_title}/,
        replacement: `${process.env.CITY}, ${process.env.STATE} CPA / ${process.env.COMPANYNAME}`
      },
      {
        pattern: /{consult_text}/,
        replacement: process.env.CONSULTTEXT
      },
      {
        pattern: /{facebook}/,
        replacement: process.env.FACEBOOK
      },
      {
        pattern: /{googleplus}/,
        replacement: process.env.GOOGLEPLUS
      },
      {
        pattern: /{linkedin}/,
        replacement: process.env.LINKEDIN
      },
      {
        pattern: /{twitter}/,
        replacement: process.env.TWITTER
      },
      {
        pattern: /(src="|href=")\/(images|~)/,
        replacement: function(match, protocol, path) {
          return `${protocol}http://cp${process.env.CPSERVER}.cpasitesolutions.com/${path}`
        }
      }
    ])
  ],
  optimization: {
    runtimeChunk: false,
    splitChunks: {
      cacheGroups: {
        vendors: {
          test: /[\\/]node_modules[\\/]/,
          name: "vendors",
          chunks: "all",
        }
      }
    }
  },
  watch: true
};