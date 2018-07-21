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

require_once  __DIR__.'/includes/synchronizer_functions.php';





add_action( 'admin_menu', 'wp_sync_options' );



    if(!function_exists("wp_sync_options")){

    function wp_sync_options(){

        add_menu_page(

            'Configuracion de sincronizacion', // Title of the page

            'Sincronizar', // Text to show on the menu link

            'manage_options', // Capability requirement to see the link

            'custom-page',// The 'slug' - file to display when clicking the link

            'custom',

            'dashicons-megaphone'

            );

        

    }

    }

    ?>

<?php

    if(!function_exists("custom")){

        

        function custom(){

            ?>

            <div class="wrap">

                <h1>bienvenido</h1>

                <p>asistente de sincronizacion`</p>

                <button style="

                padding: 0.7%;

                background: #00a0d2;

                color: white;

                box-shadow: 1px 1px #555d66;

                border-color: #00a0d2;

                border-radius: 13px;"

                 >sincronizar</button>

            </div>

    <?php

        }

    }



   

   

