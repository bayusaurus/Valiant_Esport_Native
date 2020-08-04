<center>
<div id="profile">
	<?php Flasher::flash(); ?>
      <img src="<?= BASEURL; ?>/image/admin/<?= $_SESSION['avatar']; ?>" class="img-thumbnail mb-2">
      <h2>WELCOME, <?= $data['admin']['nama']; ?></h2>
 <!--      <?php  
            
            if (password_verify('bayu', $hash)) {
                echo '<br> Password is valid!';
            } else {
                echo '<br> Invalid password.';
            }
      ?> -->
</div>
</center>
