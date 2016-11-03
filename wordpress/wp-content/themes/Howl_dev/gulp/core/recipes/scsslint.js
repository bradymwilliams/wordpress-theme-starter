var gulp     = require('gulp');
var scssLint = require('gulp-scss-lint');
var plumber  = require('gulp-plumber');

// config
var config   = require('../config/scsslint.js');

module.exports = function(cb) {
    return gulp.src(config.paths.src)
        .pipe(plumber(function(){
            this.emit('end');
        }))

        .pipe(scssLint(config.options))

        .pipe(scssLint.failReporter());
};