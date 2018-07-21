<?php



if(!function_exists("synchronizer_getMovies")){

function synchronizer_getMovies($atts) {
    global $wpdb;
    $args = shortcode_atts(
        array(
            'baseUrl'=> "https://jsonplaceholder.typicode.com/posts/",
            'url' => '1'
        ),$atts
    );
    
    $baseUrl = $args['baseUrl'];
    $Url = $args["url"];

        $headers = array('Accept' => 'application/json');
        $response = Unirest\Request::get($baseUrl.$Url , $headers);

        echo "<br>".$response->body->userId;
        echo "<br>".$response->body->title;
        echo "<br>".$response->body->body."<br><br>";
        $myrows = $wpdb->get_results( "SELECT id FROM wp_users" );            
        echo $myrows[0]->id;
        
    
 }
}
add_shortcode('api-example', 'synchronizer_getMovies'); 

?>