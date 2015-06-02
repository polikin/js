module.exports = {
    options: {
        // defaults options used in b.bundle(opts)
        detectGlobals: true,
        insertGlobals: false,
        ignoreMissing: false,
        debug: false,
        standalone: false,

        keepalive: true,
        callback: function(b) {
            // configure the browserify instance here
            //b.add(...);
            //b.require(...);
            //b.external(...);
            //b.ignore(...);
            //b.transform(...);

            // return it
            return b;
        }
    },
    example: {
        src: ['<%= jsSrc%>/*.js', '<%= jsSrc%>/**/*.js'],
        dest: '<%= jsDest%>/app.js'
    }
};