wp-includes/
-default-filters 

removed: add_filter( $filter, 'wpautop'          );
why : to stop text editor from adding <p> tags

edited:
themes/twentysixteen/
-header, page, index, 404
/templateparts
-content-page

404 - made to return 404 status code and passes back json object indicating as much

installing gulp, gulp-rename, gulp-exec