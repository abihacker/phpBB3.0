<?php
define('IN_PHPBB', true);
$phpbb_root_path =  './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

page_header();
$template->set_filenames(array(
	'body' => 'documentation_forum.html',
	'common_bloc' => 'common_bloc.html'
));
include($phpbb_root_path.'welcome.'.$phpEx);
include($phpbb_root_path.'list_users.'.$phpEx);

   //require 'includes/connect_db.php';
  if (!empty($_PHPBB_FILES)){
	  $file_name = $_PHPBB_FILES['fichier']['name'];
	  $file_extension = strrchr($file_name,".");
	  
	   $file_tmp_name = $_PHPBB_FILES['fichier']['tmp_name'];
	   $file_dest = 'files/' .$file_name;
	   $extension_auth = array( '.pdf' , '.PDF', '.txt', '.word', '.TXT', '.WORD');
	     if (in_array($file_extension, $extension_auth)) {
		     if (move_uploaded_file($file_tmp_name, $file_dest)){
				  $req = $db->prepare('INSERT INTO phpbb_files(file_name, file_url) VALUES(?,?)');
				  $req->execute(array($file_name, $file_dest));
			       echo 'fichier envoye avec succes';
			 
		 } else{
			        echo 'une erreur est survenue lore de l envoi du fichier';
		 }
		 } else { 
		        echo 'seuls les fichiers pdf sont autorises';
		 }
  }
			//   $req = $db->query('SELECT name, file_url FROM phpbb_files');
		//	     while ($data = $req->fetch()){
	//				 echo '$data['name'].' : '.'<a href="'.$data['file_url'].'">telecharger'.$data['name'].'</a>'; 
				// }
                    
page_footer();
?>