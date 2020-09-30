<?php
function kbot_add_scripts(){
    //add styles
wp_enqueue_style("bootstrap", 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
wp_enqueue_style("kbot_main_style", plugins_url(). '/Kbot/css/style.css');
wp_enqueue_script("kbot_main_script", plugins_url(). '/Kbot/js/main.js');



}
add_action("wp_enqueue_scripts", "kbot_add_scripts");