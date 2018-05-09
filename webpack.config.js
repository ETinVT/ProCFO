const path = require('path');
const webpack = require('webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const HtmlReplacePlugin = require('./webpack-plugins/HtmlReplacePlugin');
require('dotenv').config();
const sitemangerCommentReplacements = require('./webpack-plugins/replace-config/includes/sitemangerComments');
const pathingReplacement = require('./webpack-plugins/replace-config/includes/pathing');
const tagReplacements = require('./webpack-plugins/replace-config/includes/tag');

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
    new HtmlWebpackPlugin({
      filename: 'internal.html',
      template: 'internal.php',
      inject: false
    }),
    new HtmlReplacePlugin([
      ...sitemangerCommentReplacements,
      ...pathingReplacement,
      ...tagReplacements
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