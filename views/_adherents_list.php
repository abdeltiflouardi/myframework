<?php include './views/_style.php'; ?>

<?php
// View title
$title = 'Liste des adhèrents';
?>

<?php ob_start(); ?>
    <?php include './views/_menu.php'; ?>

      <!-- Example row of columns -->
      <div class="row-fluid">
            <a href="<?php echo Http::getInstance()->getCurrentUrl(array('action' => 'new'), array('action', Config::getInstance()->getPageName())) ?>" class="btn btn-primary">
                Créer un adhérent
            </a>

            <h3 class="muted">Liste des adhérents</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Date de naissance</th>
                  <th>Date d'inscription</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pager->getItems() as $adherent): ?>
                <tr>
                  <td><?php echo $adherent['id']; ?></td>
                  <td><?php echo $adherent['lastname']; ?></td>
                  <td><?php echo $adherent['firstname']; ?></td>
                  <td><?php echo $adherent['birthday']; ?></td>
                  <td><?php echo $adherent['created_at']; ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <?php include './views/_pagination.php'; ?>
      </div>

      <?php include './views/_footer.php'; ?>
<?php $body_content = ob_get_contents(); ob_end_clean(); ?>

<?php include '_template.php'; ?>