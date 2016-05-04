<?php

//php push_doc.php "relPath" "authorizations"< "full path"
require_once(  dirname(dirname( __FILE__ ))  . '/wp-load.php' );
require_once(dirname(dirname( __FILE__ )) . '/wp-admin/includes/admin.php');
$post = array();
//$post_id = wp_insert_post(); 
$contents = "";
while($line = fgets(STDIN)){
    $contents .= $line;
}

$post['post_content'] = '[raw]'.$contents.'[/raw]';
//$filename = pathinfo($argv[1], PATHINFO_FILENAME); 
$post['post_title'] = str_replace(DIRECTORY_SEPARATOR, "-", $argv[1]);
$post['ID'] = post_exists($post['post_title']);
$post['guid'] = $post['post_title'];
$post['post_name'] = $post['post_title'];
$post['post_type'] = 'page';
$post['post_status'] = 'private';
$auths = explode(',',$argv[2]);
$auths[] = 'administrator';
$all = array('administrator','doctor','manager','technician');
//wp is serializing meta on its end
$post['meta_input'] = array('_mkdo_rcbr_roles' => $auths);
$post['meta_input']['_mkdo_rcbr_restrict_sub_content'] = 'all';

$post['post_author'] = 1;

if(array_search('public', $auths) !== false){
	$post['post_status'] = 'publish';
	unset($post['meta_input']);

}else if(array_search('all', $auths) !== false){
	$post['meta_input']['_mkdo_rcbr_roles'] = $all;
}
//_mkdo_rcbr_restrict_sub_content
$action = ($post['ID'] == 0) ? 'inserted' : 'updated';

$id = wp_insert_post( $post, true, false );

if(!is_wp_error( $id )){
	echo sprintf('%s %s with id %d. Authorized for %s', $post['post_title'],$action, $id, $argv[2]);
}else{
	echo sprintf('Failed %s %s with error "%s"',$post['post_title'], $action, $id->get_error_message() );
}
?>