<?php
      $files = [];
      $dir = './files_min';
      $files = scandir($dir);
	
      foreach ($files as $file) {
      	$file_del = substr($file, 0, 1);
      	if($file_del != '.'){
      		echo "<a href='./files/$file' target='_blank'>
                              <img src='./files_min/$file' >
                        </a>";
      	}
      }
      

?>