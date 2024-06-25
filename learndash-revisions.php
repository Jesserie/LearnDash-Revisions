<?php
/*
Plugin Name: LearnDash Revisions
Description: Enable revisions for LearnDash course post types.
Version: 1.0
Author: Jesse Rie Santamina
*/

function enable_revisions_for_learndash() {
    add_post_type_support('sfwd-courses', 'revisions');
    add_post_type_support('sfwd-lessons', 'revisions');
    add_post_type_support('sfwd-topic', 'revisions');
    add_post_type_support('sfwd-quiz', 'revisions');
    add_post_type_support('sfwd-assignment', 'revisions');
}
add_action('init', 'enable_revisions_for_learndash');
