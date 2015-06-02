module.exports = {
  all: {
    files: [{
      expand: true,
      cwd: 'themes/jsasseville/assets/src/',
      src: ['**/*.{png,jpg,gif,svg}'],
      dest: 'themes/jsasseville/assets/dist/'
    }]
  }
};
