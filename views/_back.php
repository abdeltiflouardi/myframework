<?php include './views/_style.php'; ?>

<?php
// View title
$title = 'Liste des adhèrents';
?>

<?php ob_start(); ?>
    <?php include './views/_menu.php'; ?>
      <!-- Example row of columns -->
      <div class="row-fluid">
            <p class="lead">En construction des alerts</p>
      </div>
      <?php include './views/_footer.php'; ?>
<?php $body_content = ob_get_contents(); ob_end_clean(); ?>

<?php include '_template.php'; ?>
