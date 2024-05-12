module.exports = {
  plugins: [
    require("postcss-preset-env")({
      autoprefixer: {
        grid: true,
      },
      stage: 3,
      browsers: "last 5 versions", // Add browser support configuration
    }),
    require("postcss-import-ext-glob"),
    require("postcss-import")({
      path: ["assets/css/src"], // Specify the directory containing your CSS files
      to: "assets/css/dist", // Specify the output directory for processed CSS
    }),
  ],
};
