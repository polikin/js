module.exports = function(grunt) {
  //Dynamically create list of view to bundle for requirejs
    var views = [];

    grunt.file.expand({ cwd: 'themes/jsasseville/assets/src/scripts/views/' }, ["**/*.js", "!View.js"]).forEach(function(item){
        views.push({
          name: 'views/' + item.replace('.js', ''),
          exclude: ['common']
        });
    });

    return {
    dist: {
          options: {
            // build.js example:
            // https://github.com/jrburke/r.js/blob/master/build/example.build.js
            baseUrl: "themes/jsasseville/assets/src/scripts",
            //optimize: "none",
            mainConfigFile: "themes/jsasseville/assets/src/scripts/common.js",
            dir: 'themes/jsasseville/assets/dist/scripts',
            modules: [
                {
                    //module names are relative to baseUrl
                    name: 'common',
                    //List common dependencies here. Only need to list
                    //top level dependencies, "include" will find
                    //nested dependencies.
                    include: [
                      'vendors/require',
                      'App',
                      'jquery',
                      'underscore',
                      'ring',
                      'views/View'
                    ]
                }
            ].concat(views),

            //Options needed for sourcemaps
            preserveLicenseComments: false,
            generateSourceMaps: false
            }
        }
    }
};
