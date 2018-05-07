const path = require('path');
const webpack = require('webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const HtmlReplacePlugin = require('./webpack-plugins/HtmlReplacePlugin');
require('dotenv').config();

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
        replacement: 'Nav'
      },
      {
        pattern: /<!-- Start Stylesheet -->/,
        replacement: '<link href="http://cp6.cpasitesolutions.com/~previewm/admin/compiled.css" rel="stylesheet">'
      },
      {
        pattern: /<!-- Start Header -->/,
        replacement: '<h2>{company_name}</h2>'
      },
      {
        pattern: /(src="|href=")\/(images|~)/,
        replacement: function(match, protocol, path) {
          return `${protocol}http://cp6.cpasitesolutions.com/${path}`
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