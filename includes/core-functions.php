<?php // DB Poop core functions

// Ajax handler function using jQuery
function db_dump_action_js() { ?>
    <script type="text/javascript" >
        jQuery("li#wp-admin-bar-db-dump .ab-item").on( "click", function() {
            var data = {
                'action': 'database_dump',
            };

            /* since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php */
            jQuery.post(ajaxurl, data, function(response) {
                alert( response );
            });

        });
    </script> <?php
}
add_action( 'admin_footer', 'db_dump_action_js' );

// DB Dump ajax handler function

add_action( 'wp_ajax_database_dump', 'database_dump_callback' );

function database_dump_callback() {
    global $wpdb;
    $user = DB_USER;
    $pass = DB_PASSWORD;
    $host = DB_HOST;
    $database = DB_NAME;
    $dir = get_home_path();
    exec("mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir}/db.sql");
    $response = "Database dumped to db.sql on the root path of this amazing site";
    echo $response;
    wp_die();
}