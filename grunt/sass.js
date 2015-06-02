module.exports = {
  // Development settings
  dev: {
    options: {
      outputStyle: 'nested',
      sourceMap: true
    },
    files: [{
      expand: true,
      cwd: 'themes/jsasseville/assets/src/styles',
      src: ['screen.scss', 'critical-path.scss'],
      dest: 'themes/jsasseville/assets/dist/styles',
      ext: '.css'
    }]
  },
  // Production settings
  prod: {
    options: {
      outputStyle: 'nested',
      //outputStyle: 'compressed', //Handled by pleeease
      sourceMap: false
    },
    files: [{
      expand: true,
      cwd: 'themes/jsasseville/assets/src/styles',
      src: ['screen.scss', 'critical-path.scss'],
      dest: 'themes/jsasseville/assets/dist/styles',
      ext: '.css'
    }]
  }
};
