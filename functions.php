<?php
  function my_scripts() {
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/kick-ring.js', array( 'jquery' ), '1.0.1', true );
  }
  add_action( 'wp_enqueue_scripts', 'my_scripts' );


  add_theme_support('post-thumbnails');

  add_action( 'wp_enqueue_scripts', 'delete_plugin_css' );
  function delete_plugin_css() {
      wp_deregister_style( 'contact-form-7' );
  }
