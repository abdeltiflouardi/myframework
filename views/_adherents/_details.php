<?php include './views/_style.php'; ?>

<?php
// View title
$title = 'Détails adhérent';
?>

<?php ob_start(); ?>
    <?php include './views/_menu.php'; ?>

      <!-- Example row of columns -->
      <div class="row-fluid">
          Détails
      </div>

      <?php include './views/_footer.php'; ?>
<?php $body_content = ob_get_contents(); ob_end_clean(); ?>

<?php include './views/_template.php'; ?>