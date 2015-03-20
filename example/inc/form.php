<div class="form">
  <div class="row">
    <form enctype="multipart/form-data" method="post" action="#">
        <div class="button_up button-block">
          <label>Select a file</label>
          <input type="file" name="image_field" value="" required class="hide">
        </div>
        <div class="button-block-sec">
          <input type="submit" name="Submit" value="upload" class="button button-block" style="margin-left: 9.5%;">
        </div>
    </form>
  </div>
</div>

<?php

 $handle = new upload($_FILES['image_field']);
  if ($handle->uploaded) {
      $handle->allowed = array('image/*');
      $handle->file_new_name_body = '0';
      $handle->file_max_size = '10485760'; // 10MO
      $handle->no_script = false;
      $handle->process('./files');

      if ($handle->processed) {
          $handle->file_new_name_body = '0';
          $handle->image_resize         = true;
          $handle->image_y              = 30;
          $handle->image_x              = 30;


          $handle->process('./files_min');

          echo '<span><p>Image was uploaded, thank you! - Enjoy the Mosaic</p></span>';
          $handle->clean();

      } else {
          echo '<span><p>error : ' . $handle->error;
          echo '</p></span>' ;
      }

  }
  
?>

