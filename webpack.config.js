const Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addEntry('app', './assets/app.js') // make sure app.js exists
  .enablePostCssLoader()
  .enableSingleRuntimeChunk()
  .enableSourceMaps(!Encore.isProduction())
  .enableVersioning(Encore.isProduction())
  .copyFiles({
    from: './assets/images',
    to: 'images/[path][name].[ext]',
  });

module.exports = Encore.getWebpackConfig();
