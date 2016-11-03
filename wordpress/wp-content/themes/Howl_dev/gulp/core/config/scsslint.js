var stylish = require('gulp-scss-lint-stylish');

// utils
var deepMerge = require('../utils/deepMerge');

// config
var overrides = require('../../config/scsslint');
var assets = require('./common').paths.assets;

/**
 * Font Building
 * Configuration
 * Object
 *
 * @type {{}}
 */
module.exports = deepMerge({
    paths: {
        watch: [
            assets.src + '/scss/**/*.scss',
            '!' + assets.src + '/scss/**/*_tmp\\d+.scss'
        ],
        src: [
            'assets/scss/**/*.scss',
            '!' + 'assets/scss/vendor/**/*.scss',
        ],
    },

    options: {
        config: '.scss-lint.yaml',
        maxBuffer: 300 * 2048,
        customReport: stylish,
    }
}, overrides);