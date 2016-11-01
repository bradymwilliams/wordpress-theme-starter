var webpack = require('webpack');

/**
 * Override the Default
 * Core Scripts
 * Config
 *
 */
module.exports = {
    options: {
        webpack: {
            defaults: {
                plugins: [
                    new webpack.ProvidePlugin({
                        '$': 'jquery'
                    })
                ],
                externals: {
                    jquery: 'window.jQuery'
                }
            }
        }
    }
};