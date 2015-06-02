module.exports = {
  options: {
    force: true
  },
  main: [
    'themes/jsasseville/assets/src/scripts/**/*.js',
    '!themes/jsasseville/assets/src/scripts/vendors/**/*.js',
    'themes/jsasseville/assets/src/scripts/libs/*.js'
  ]
};
