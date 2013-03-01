    <?php $phpself = Http::getInstance()->get('PHP_SELF'); ?>
    <?php $basename = basename($phpself, '.php'); ?>

    <div class="container">

      <div class="row-fluid">
        <h3 class="muted">Club kastalani</h3>
        <div class="navbar">
          <div class="navbar-inner">
              <ul class="nav">
                  <li<?php $basename == 'back' ? print ' class="active"' : ''; ?>>
                    <a href="back.php">Accueil</a>
                </li>
                <li<?php $basename == 'adherents' ? print ' class="active"' : ''; ?>>
                    <a href="adherents.php">Adhérents</a>
                </li>
              </ul>
          </div>
        </div><!-- /.navbar -->
      </div>