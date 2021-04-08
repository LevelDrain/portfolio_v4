module.exports = {
  mode: 'production',
  //mode: 'development',
  devServer: {
    contentBase: 'dist',
    open: true,
    watchContentBase: true,
  },

  entry: ['@babel/polyfill', './src/index.js'],
  output: {
    path: `${__dirname}/portfolio_v4/shared/js`,
    publicPath: '/js/',
    filename: 'main.js',
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        use: [
          {
            loader: 'babel-loader',
            options: {
              presets: [
                [
                  '@babel/preset-env',
                  {
                    useBuiltIns: 'entry',
                    corejs: 3,
                  },
                ],
              ],
            },
          },
        ],
      },
    ],
  },
  // ES5(IE11等)向けの指定
  target: ['web', 'es5'],
};
