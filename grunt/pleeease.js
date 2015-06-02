module.exports = {
  dev: {
    options: {
      //"autoprefixer": {'browsers': ['last 4 versions', 'ios 6']},
      "minifier": false,
      "sourcemaps": true
    },
    files: {
      'themes/jsasseville/assets/dist/styles/screen.css': 'themes/jsasseville/assets/dist/styles/screen.css'
    }
  },
  prod: {
    options: {
      "sourcemaps": false,
      "minifier": true
    },
    files: {
      'themes/jsasseville/assets/dist/styles/screen.css': 'themes/jsasseville/assets/dist/styles/screen.css'
    }
  }
};
