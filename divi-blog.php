/* Divi Blog Module Sorting */
<?php
function divi_blog_modules($query, $args) {
	if (isset($args['module_id']) && $args['module_id'] === 'your-module-id') {
		$query->query_vars['orderby'] = 'date';
		$query->query_vars['order'] = 'ASC';
		$query = new WP_Query( $query->query_vars );
	}
	return $query;
}
add_filter('et_builder_blog_query', 'divi_blog_modules', 10, 2);
