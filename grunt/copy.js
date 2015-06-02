module.exports = {
  main: {
    files: [
      //{
      //  expand: true,
      //  cwd: 'src/js/',
      //  src: ['libs/**'],
      //  dest: 'dist/js/'
      //},
      {
        expand: true,
        cwd: 'themes/jsasseville/assets/src/',
        src: ['*/**'],
        dest: 'themes/jsasseville/assets/dist/'
      }
    ]
  }
};
