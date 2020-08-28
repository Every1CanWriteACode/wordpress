<?php
/**
* Plugin Name: Bebro pluginas
* Plugin URI: https://www.bebbr.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Your Name Here
* Author URI: http://bebbr.com/
**/
 
// add_action( 'admin_menu', function(){
//     add_menu_page('Bebro Puslapis', 'Bebras', 'manage_options', 'bebras', 'bebro_funkcija');
 
// add_submenu_page('bebras', 'Page title 2', 'Menu title 2',
//     'manage_options', 'bebras2', 'bebro_funkcija2');


 
// add_submenu_page('bebras', 'Edit', null,
//     'manage_options', 'bebras3', 'bebro_funkcija3');
 
// });
 
// add_action( 'init', function() {
//     $labels = [
//       'name'               => 'Calendar',
//       'singular_name'      => 'Calendar',
//       'add_new'            => 'new Calendar',
//       'add_new_item'       => __( 'Add New Product' ),
//       'edit_item'          => __( 'Edit Product' ),
//       'new_item'           => __( 'New Product' ),
//       'all_items'          => __( 'All Products' ),
//       'view_item'          => __( 'View Product' ),
//       'search_items'       => __( 'Search Products' ),
//       'not_found'          => __( 'No products found' ),
//       'not_found_in_trash' => __( 'No products found in the Trash' ), 
//       'menu_name'          => 'Products'
//     ];
//     $args = [
//       'labels'        => $labels,
//       'description'   => 'Holds our products and product specific data',
//       'public'        => true,
//       'menu_position' => 5,
//       'supports'      => [],
//       'has_archive'   => true,
//     ];
// register_post_type('event', $args ); 
// });
 
// function bebro_funkcija()
// {
//     echo '<h1>Aš Esu Bebras</h1>';
 
//     $post = [
//         'post_title'   => 'Test post-----------',
//         'post_content' => '',
//         'post_status'  => 'publish',
//         'post_author'  => 1,
//         'meta_input'   => [
//             'text' => 'ivykio tekstas---------',
//             // 'data' => $_POST['event_date']
//         ],
//     ];
    
// }
 
// function bebro_funkcija2()
// {
//     echo '<h1>Aš Esu Bebras Nr 2</h1>';
// }
 
// function bebro_funkcija3()
// {
//     echo '<h1>Aš Esu Bebras Nr 3</h1>';
// }

//-------------------------------------------------------------

 
add_action( 'admin_menu', function(){
    add_menu_page('Bebro Puslapis', 'Bebras', 'manage_options', 'bebras', 'bebro_funkcija');
 
// add_submenu_page('bebras', 'Create', 'Iraso sukurimas',
//     'manage_options', 'bebras2', 'create');

// add_submenu_page('bebras', 'Edit', 'Iraso editinimas',
//     'manage_options', 'edit', 'edit');
// add_submenu_page('bebras', 'Delete', 'Iraso trynimas',
//     'manage_options', 'delete', 'delete');

 
add_submenu_page('bebras', 'Edit', null,
    'manage_options', 'bebras3', 'bebro_funkcija3');
 

});
 
add_action( 'init', function() {
    $labels = [
      'name'               => 'Calendar',
      'singular_name'      => 'Calendar',
      'add_new'            => 'new Calendar',
      'add_new_item'       => __( 'Add New Product' ),
      'edit_item'          => __( 'Edit Product' ),
      'new_item'           => __( 'New Product' ),
      'all_items'          => __( 'All Products' ),
      'view_item'          => __( 'View Product' ),
      'search_items'       => __( 'Search Products' ),
      'not_found'          => __( 'No products found' ),
      'not_found_in_trash' => __( 'No products found in the Trash' ), 
      'menu_name'          => 'Products'
    ];
    $args = [
      'labels'        => $labels,
      'description'   => 'Holds our products and product specific data',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => [],
      'has_archive'   => true,
    ];
register_post_type('event', $args ); 
});
 
function bebro_funkcija()
{
    wp_enqueue_style( 'style', get_stylesheet_uri() . './../calendar.scss');
    wp_enqueue_script( 'js-file', get_template_directory_uri() . './calendar.js');
    ?>
    <div class="wrapper">
        <div class="container-calendar">
            <div class="button-container-calendar">
                <button id="previous" onclick="previous()">&#8249;</button>
                <h3 id="monthAndYear"></h3>
                <button id="next" onclick="next()">&#8250;</button>
            </div> 
            <table class="table-calendar" id="calendar" data-lang="en">
                <thead id="thead-month"></thead>
                <tbody id="calendar-body"></tbody>
            </table>
        </div>
    </div>
    <div id="events-wrappers">
        <!-- <div class="previous-events">
            <h2>Nearest previous events</h2>
            <div class="data-time">DATE and TIME: 52258525</div>
            <span>Event:</span>
            <div class="event">ivykis</div>
        </div>
        <div class="today-events">
            <h2>Todays events</h2>
            <div class="data-time">DATE and TIME: 465456</div>
            <span>Event:</span>
            <div class="event">event</div>
        </div>
        <div class="nearest-events">
            <h2>Nearest events</h2>
            <div class="data-time">DATE and TIME: 7855</div>
            <span>Event:</span>
            <div class="event">wut</div>
        </div> -->
    </div>
    <?php

    // wp_enqueue_style( 'calendar', get_template_directory_uri() . '/bebras/calendar.js' ,'all');
    // echo '<h1>Aš Esu Bebras</h1>';
    // $post = [
    //     'post_title'   => 'Test post-----------',
    //     'post_content' => '',
    //     'post_status'  => 'publish',
    //     'post_author'  => 1,
    //     'meta_input'   => [
    //         'text' => 'ivykio tekstas---------',
    //         // 'data' => $_POST['event_date']
    //     ],
    // ];
   
    
}


function create()
{
    ?>
        <h1>Sukurkite ivyki</h1>
        <form action="" method="post">
            <label> Ivykis: <br>
                <textarea name="ivykis" required> </textarea> <br>
            </label>
            <label> data: <br>
                <input type="date" name = "data"><br>
            </label>
            <button type="submit" name = "action">Sukurti</button>
        </form>
<?php
    if(array_key_exists('action', $_POST)){
        $post = [
            'post_title'   => 'Ivykiai',
            'post_content' => '',
            'post_status'  => 'publish',
            'post_author'  => 1,
            'meta_input'   => [
                'text' => $_POST['ivykis'],
                'data' => $_POST['data']
            ],
        ];
        $post_id = wp_insert_post($post);
        // wp_redirect('http://localhost/wordpress/wp-admin/admin.php?page=edit');
    }
 
}
 
function edit()
{
    $posts = get_posts([
        'post_content' => 'Ivykiai',
        'post_status' => 'publish',
        'post_author' => 1,
        'meta_value' => '',
        'numberposts' => -1
        // 'order'    => 'ASC'
    ]);
    ?><pre>
    <?php
print_r($posts);
    // foreach ($posts as $post) {
    //     echo '<br><br>';
    //     echo 'ID: ' . $post->ID . '<br>';
    //     echo 'post_type: ' . $post->post_type . '<br>';
    //     echo 'post_title: ' . $post->post_title . '<br>';
    //     echo 'post_name: ' . $post->post_name . '<br>';

    //     echo 'post_author: ' . $post->post_author . '<br>';
    //     echo 'post_date: ' . $post->post_date . '<br>';
    //     echo 'post_modified: ' . $post->post_modified . '<br>';

    //     echo 'guid: <a href="' . $post->guid . '">' . $post->guid . '</a><br>';
        
    //     echo 'post_content: ' . $post->post_content . '<br><br>';

    //     $metas = get_post_meta($post->ID);
    //     // print_r($metas);
    //     // echo $metas['text'] . '<br>';
    //     // echo $metas['date'] . '<br>';
    //     foreach ($metas as $meta) {
    //         echo $meta[0] . '<br>';
    //     }
    // }
}
function delete()
{
    echo '<h1>Cia bus delytas</h1>';
}
function bebro_funkcija3()
{
    echo '<h1>Aš Esu Bebras Nr 3</h1>';
}