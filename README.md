# Install

Use composer: `composer require guttmann/silverstripe-gulp-connect-php ~1.0`

# Usage

Requires `gulp` and `gulp-connect-php` installed via npm.

Expects `gulpfile.js` at the base of your web root.

Example connect task:

    gulp.task('connect', function() {
        connect.server({
            'router': 'vendor/guttmann/silverstripe-gulp-connect-php/router.php'
        });
    }); 
