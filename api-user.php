<?php
/** Load WordPress Bootstrap */

require_once(  dirname( __FILE__ )  . '/wp-load.php' );

if(isset($_GET['action'])){
	switch(strtolower($_GET['action'])) {
		case 'getuser':
			$current_user = wp_get_current_user();
			$res = '{}';
			if($current_user instanceof WP_User){
				$res = json_encode($current_user);
			}
			echo $res;
			break;
		case 'isloggedin':
			echo '{"response" : ' . is_user_logged_in() . '}';
			break;
	}
}

?>