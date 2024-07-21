<?php

wp_register_style(
  "reset_style",
  get_template_directory_uri() . "/reset.css",
  array(),
  "1.0"
);

wp_enqueue_style(
  "main_style",
  get_template_directory_uri() . "/style.css",
  array("reset_style"),
  "1.0"
);

/*
add_action("wp_enqueue_script",function(){
  wp_enqueue_script(
    "jquery",
    get_template_directory_uri()."/jquery-3.7.1.min.js",
  );
});

add_action("wp_enqueue_script",function(){
  wp_enqueue_script(
    "custom_script",
    get_template_directory_uri()."/index.js",
    array("jquery")
  );
});
*/

function twpp_enqueue_script(){
  wp_enqueue_script(
    "jquery-script",
    get_template_directory_uri()."/jquery-3.7.1.min.js"
  );

  wp_enqueue_script(
    "main-script",
    get_template_directory_uri()."/index.js",
    array("jquery")
  );
}

add_action("wp_enqueue_scripts","twpp_enqueue_script");


?>