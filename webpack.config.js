const path = require('path');

module.exports = {
  entry: [
    './src/js/index.js',
    './src/scss/compiled.scss'
  ],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'build')
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader"
      },
    ]
  },
  watch: true
};