module.exports = {
  options: {
    spawn: false,
    livereload: false
  },

  scripts: {
    files: [
      'themes/jsasseville/assets/src/scripts/**/*.js'
    ],
    tasks: [
      'jshint'
    ]
  },

  styles: {
    files: [
      'themes/jsasseville/assets/src/styles/**/*.scss'
    ],
    tasks: [
      'sass:dev',
      'pleeease:dev'
    ]
  },

  images: {
    files: [
      'themes/jsasseville/assets/src/images/**'
    ],
    tasks: [
      'imagemin'
    ]
  }
};
