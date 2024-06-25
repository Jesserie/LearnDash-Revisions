<?php

function enable_revisions_for_learndash() {
    add_post_type_support('sfwd-courses', 'revisions');
    add_post_type_support('sfwd-lessons', 'revisions');
    add_post_type_support('sfwd-topic', 'revisions');
    add_post_type_support('sfwd-quiz', 'revisions');
    add_post_type_support('sfwd-assignment', 'revisions');
}
add_action('init', 'enable_revisions_for_learndash');

function learndash_revision_limit($num, $post) {
    if (in_array($post->post_type, array('sfwd-courses', 'sfwd-lessons', 'sfwd-topic', 'sfwd-quiz', 'sfwd-assignment'))) {
        $num = 5; // Set the number of revisions you want to keep
    }
    return $num;
}
add_filter('wp_revisions_to_keep', 'learndash_revision_limit', 10, 2);
