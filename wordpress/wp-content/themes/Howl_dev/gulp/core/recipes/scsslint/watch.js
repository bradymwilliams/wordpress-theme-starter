var gulp   = require('gulp');
var watch  = require('gulp-watch');

// config
var config = require('../../config/scsslint');


/**
 * Watch style files
 * for changes
 *
 * @param done
 */
module.exports = function (done) {
	watch(config.paths.watch, function () {
		gulp.start('scssLint');
	});

	done();
};