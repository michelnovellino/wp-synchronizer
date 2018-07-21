<?php 

/*
Plugin Name: wp - synchronizer 
Plugin Uri: url
Description : sincronizador de wordpress
Author: Michel Novellino
Version: 0.9
Author Uri: github.com/michelnovellino


*/
require_once __DIR__.'/unirest/src/Unirest.php';

function get_movies($atts) {

    $args = shortcode_atts(
        array(
            'baseUrl'=> "https://jsonplaceholder.typicode.com/posts/",
            'url' => '1'
        ),$atts
    );
    

		$headers = array('Accept' => 'application/json');
		$response = Unirest\Request::get($baseUrl.$arg["url"] , $headers);

		echo "<br>".$response->body->userId;
		echo "<br>".$response->body->title;
		echo "<br>".$response->body->body;
	

	
 }
 add_shortcode('api-example', 'get_movies'); 

?>