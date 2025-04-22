<?php

function totalblank_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'totalblank_setup' );