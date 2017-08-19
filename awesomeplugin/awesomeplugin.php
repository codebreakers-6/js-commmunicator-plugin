<?php
   /*
   Plugin Name: WPCall
   Plugin URI: http://my-awesomeness-emporium.com
   Description: a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   Author URI: http://mrtotallyawesome.com
   License: GPL2
   */
   
   /**
 * Adds a view to the post being viewed
 *
 * Finds the current views of a post and adds one to it by updating
 * the postmeta. The meta key used is "awepop_views".
 *
 * @global object $post The post object
 * @return integer $new_views The number of views the post has
 *
 */
function awepop_add_view() {
	myplugin_styles();
	//myplugin_scripts();
include 'jscommunicator.inc';
}

function myplugin_styles() {
	wp_register_style( 'style',  plugin_dir_url( __FILE__ ) . 'assets/styles/style.css'  );
	wp_register_style( 'style-horizontal', 'https://freephonebox.net/style-horizontal.css'    );
    wp_register_style( 'skin.css',  'https://freephonebox.net/skin.css'  );
	wp_register_style( 'jquery-ui',  'https://freephonebox.net/jquery-ui.css'   );
	wp_register_style( 'font-awesome',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'  );
	
	 wp_enqueue_style(  'style' );
	 wp_enqueue_style(  'style-horizontal' );
     wp_enqueue_style(  'skin' );
	 wp_enqueue_style(  'jquery-ui.css' );
	 wp_enqueue_style(  'font-awesome' );

	wp_deregister_script('jquery');
	wp_register_script( 'jquery2',  'https://freephonebox.net/jquery.js', array(), '2.0.0', true  );
	wp_register_script( 'arbiter',  'https://freephonebox.net/Arbiter.js', array(), false, true  );
	wp_register_script( 'internalization',  'https://freephonebox.net/jquery.i18n.properties.js', array(), false, true   );
	wp_register_script( 'jquery-ui',  'https://freephonebox.net/jquery-ui.js', array(), false, true   );
	wp_register_script( 'jssip',  'https://freephonebox.net/jssip.js', array(), false, true   );
	wp_register_script( 'init',  'https://freephonebox.net/init.js' , array(), false, true  );
	wp_register_script( 'config',  'https://freephonebox.net/config.js', array(), false, true   );
	wp_register_script( 'JSComm',  'https://freephonebox.net/JSComm.js' , array(), false, true  );
	
	
	
   
		wp_enqueue_script( 'jquery2');
		wp_enqueue_script( 'arbiter');
	    wp_enqueue_script( 'internalization');
	    wp_enqueue_script( 'jquery-ui');
		wp_enqueue_script( 'jssip');
		wp_enqueue_script( 'init');
		wp_enqueue_script( 'config');
		wp_enqueue_script( 'JSComm');
		
		
}

//function myplugin_scripts() {
	/*wp_register_script( 'jquery',  plugin_dir_url( __FILE__ ) . 'assets/scripts/jquery.js'  );
	wp_register_script( 'arbiter',  plugin_dir_url( __FILE__ ) . 'assets/scripts/Arbiter.js'  );
	wp_register_script( 'internalization',  plugin_dir_url( __FILE__ ) . 'assets/scripts/jquery.i18n.properties.js'  );
	wp_register_script( 'jquery-ui',  plugin_dir_url( __FILE__ ) . 'assets/scripts/jquery-ui.js'  );
	wp_register_script( 'jssip',  plugin_dir_url( __FILE__ ) . 'assets/scripts/jssip.js'  );
	wp_register_script( 'init',  plugin_dir_url( __FILE__ ) . 'assets/scripts/init.js'  );
	wp_register_script( 'config',  plugin_dir_url( __FILE__ ) . 'assets/scripts/config.js'  );
	wp_register_script( 'JSComm',  plugin_dir_url( __FILE__ ) . 'assets/scripts/JSComm.js'  );*/
	
	
	
	
   
  //  wp_enqueue_script( 'jquery');
		
//}
	

//add_action('init', 'myplugin_styles');

//add_action( "styles", "myplugin_styles" );
//add_action( "myplugin_styles" );
add_action("wp_head", "awepop_add_view");


?>