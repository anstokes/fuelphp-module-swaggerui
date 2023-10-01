const path = require('path');
const CopyWebpackPlugin = require('copy-webpack-plugin');

const outputPath = path.resolve(__dirname, '..', 'public');

module.exports = {
  mode: 'development',
  entry: {
    app: require.resolve('./index'),
  },
  resolve: {
    extensions: ['.js'],
  },
  plugins: [
    new CopyWebpackPlugin({patterns:[
      {
        from: require.resolve('swagger-ui-dist/swagger-ui.css'),
        to: './'
      },
      {
        from: require.resolve('swagger-ui-dist/swagger-ui-bundle.js'),
        to: './'
      }
    ]}),
  ],
  output: {
    filename: '[name].bundle.js',
    path: outputPath,
  }
};
