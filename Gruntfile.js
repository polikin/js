module.exports = function (grunt) {
    require('time-grunt')(grunt);

    var config = {
        banner: '<%= pkg.name %> - <%= pkg.version %>\n' +
        '<%= pkg.author.name %> - <%= pkg.author.url %>\n' +
        'Copyright (c) <%= grunt.template.today("yyyy-mm-dd") %>',
        basePath: 'app',
        cacheBreaker: '<%= ((new Date()).valueOf().toString()) + (Math.floor((Math.random()*1000000)+1).toString()) %>',
        cssSrc: 'themes/jsasseville/assets/src/scripts/',
        cssDest: 'themes/jsasseville/assets/dist/styles',
        htmlFileExtension: 'html',
        jsSrc: './themes/jsasseville/assets/src/scripts',
        jsDest: 'themes/jsasseville/assets/dist/scripts',
        pkg: grunt.file.readJSON('package.json'),
        vhost: ''
    };

    require('load-grunt-config')(grunt, {
        data: config,
        //jitGrunt: true
        loadGruntTasks: {
            config: require('./package.json'),
            pattern: 'grunt-*',
            scope: 'devDependencies'
        }
    });
};
