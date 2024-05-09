module.exports = {
  plugins: [
    require('postcss-preset-env')({
      autoprefixer: {
        grid: true,
      },
      stage: 3,
    }),
    require('postcss-import-ext-glob'),
    require('postcss-import')
  ],
};