<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-2"><?php echo $data['title']; ?></h1>
      <p class="display-4"><?php echo $data['description']; ?></p>
      <small class="lead">Version : <?php echo APPVERSION; ?></small>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>