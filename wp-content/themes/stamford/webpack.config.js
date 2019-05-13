/* ----------------------------------------------------------------------
Options
-----------------------------------------------------------------------*/
const domain = 'http://local.wordpress-theme.com';

/* ----------------------------------------------------------------------
Use Webpack
-----------------------------------------------------------------------*/
var webpack = require('webpack');

/* ----------------------------------------------------------------------
Required Plugins for Webpack
-----------------------------------------------------------------------*/
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const TerserPlugin = require('terser-webpack-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

/* ----------------------------------------------------------------------
Webpack's settings
-----------------------------------------------------------------------*/
module.exports = {
  mode: "production",
  performance: { hints: false },
  watch: true,
  entry: {
    theme: ["./src/js/theme.js", "./src/scss/theme.scss"]
  },
  output: {
    path: __dirname + "/dist/",
    filename: "[name].js"
  },
  optimization: {
    minimizer: [new OptimizeCSSAssetsPlugin()]
  },
  module: {
    rules: [
      {
        test: /\.s?css$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css",
      chunkFilename: "[id].css"
    }),
    new TerserPlugin({
      parallel: true,
      cache: true,
      terserOptions: {
        ecma: 6
      }
    }),
    new BrowserSyncPlugin(
      {
        proxy: domain,
        port: 3000
      },
      {
        reload: true,
        injectCss: true
      }
    )
  ]
};