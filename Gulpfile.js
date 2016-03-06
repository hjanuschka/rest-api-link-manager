// Load dependencies
var gulp = require('gulp');
var gutil = require('gulp-util');
var plumber = require('gulp-plumber');
var sort = require('gulp-sort');
var wpPot = require('gulp-wp-pot');

// Set assets paths.
var paths = {
	php: ['./*.php', './**/*.php'],
};


/**
 * Handle errors and alert the user.
 */
function handleErrors() {
	var args = Array.prototype.slice.call(arguments);

	notify.onError({
		title  : 'Task Failed [<%= error.message %>',
		message: 'See console.',
		sound  : 'Sosumi' // See: https://github.com/mikaelbr/node-notifier#all-notification-options-with-their-defaults
	}).apply(this, args);

	gutil.beep(); // Beep 'sosumi' again

	// Prevent the 'watch' task from stopping
	this.emit('end');
}

/**
 * Scan the theme and create a POT file.
 *
 * https://www.npmjs.com/package/gulp-wp-pot
 */
gulp.task('wp-pot', function () {
	return gulp.src(paths.php)
		.pipe(plumber({errorHandler: handleErrors}))
		.pipe(sort())
		.pipe(wpPot({
			domain   : 'rest-api-link-manager',
			destFile : 'rest-api-link-manager.pot',
			package  : 'rest-api-link-manager',
			bugReport: 'https://github.com/PrysPlugins/rest-api-link-manager/issues'
		}))
		.pipe(gulp.dest('languages/'));
});

gulp.task('default', ['wp-pot']);
