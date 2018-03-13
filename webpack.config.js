const path = require('path');

module.exports = {
  entry: ['./src/scss/compiled.scss'],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'build')
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].css',
              publicPath: 'build/'
            }
          },
          {
            loader: 'extract-loader',
            options: {
              publicPath: null
            }
          },
          {
            loader: 'css-loader'
          },
          {
            loader: 'postcss-loader'
          },
          {
            loader: 'sass-loader'
          }
        ]
      }
    ]
  },
  watch: true
};