module.exports = {
  lintOnSave: false,
  /*
  devServer: {
    proxy: {
      '/api': {
        target: 'http://localhost:60263',
        changeOrigin: true
      }
    }
  },
  */
  configureWebpack: config => {
    if (process.env.NODE_ENV === 'production') {
      config.output.publicPath = '/sites/all/themes/see_art_live/dist/';
      config.entry = ['babel-polyfill', './src/main.js']
    }
  },
  chainWebpack: config => {
    if (process.env.NODE_ENV === 'production') {
      config
        .plugin('html')
        .tap(args => {
          return [{
            filename: 'html.tpl.php',
            template: 'templates/html.tpl.php.html'
          }, ]
        });
    }
  }
};
