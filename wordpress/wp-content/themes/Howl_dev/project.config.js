/**
 * Project info config object
 *
 * All params optional unless
 * otherwise noted
 *
 * @params {
 *  string name         (required) The built theme dirname and the theme text-domain
 *  string prettyName   (required) The theme name as shown in the theme selector admin
 *  string themeURI     The theme's URI
 *  string description  A short description of the theme
 *  string parentTheme  If this is a child theme, then put the parent
 *                      theme's directory name here
 *  string version      The theme's version
 *  string author       The theme's author
 *  string authorURI    The theme author's URI
 *  string license      The theme's license
 *  string licenseURI   The theme license's URI
 *  array  tags         Keywords that could be associated with the theme
 * }
 */
module.exports = {
	name: 'howl',
	prettyName: 'Howl',

	description: 'The 2016 theme for {HunersWildLife.com}. Built by Brady for {reasons}',
	version: '0.1.0',
	author: 'Brady Williams <bradymwilliams@gmail.com>',
	authorURI: 'http://example.com',
	license: 'GPLv2 or later'
};