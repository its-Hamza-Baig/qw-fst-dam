const Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addStyleEntry('app', './assets/css/app.css')
  .enablePostCssLoader()
  .enableSourceMaps(!Encore.isProduction())
  .enableVersioning(Encore.isProduction())

  // ✅ Add this line to fix the error:
  .enableSingleRuntimeChunk()
;
Encore.copyFiles({
    from: './assets/images',
    to: 'images/[path][name].[ext]'
});

module.exports = Encore.getWebpackConfig();
