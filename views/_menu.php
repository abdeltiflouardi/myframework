    <?php $phpself = Http::getInstance()->get('PHP_SELF'); ?>
    <?php $basename = basename($phpself, '.php'); ?>

    <div class="container">

        <div class="row-fluid">
            <div class="span6  pull-left"><h3>Club kastalani</h3></div>            
            <div class="span3 pull-right">
                <div class="btn-group  pull-right">
                    <button class="btn btn-small  btn-primary"><i class="icon-user icon-white"></i>
                        <?php $user = Security::getInstance()->getUser(); ?>
                        <?php echo 'Bienvenue ' . $user['login']; ?>
                    </button>
                    <button class="btn btn-small  btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-folder-open"></i> Mon compte</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="icon-off"></i> Se déconnecter</a></li>
                    </ul>
                </div>
            </div>            
        </div>

      <div class="row-fluid">
        <div class="navbar">
          <div class="navbar-inner">
              <ul class="nav">
                  <li<?php $basename == 'back' ? print ' class="active"' : ''; ?>>
                    <a href="back.php"><i class="icon-home"></i> Accueil</a>
                </li>
                <li<?php $basename == 'adherents' ? print ' class="active"' : ''; ?>>
                    <a href="adherents.php"><i class="icon-user"></i> Adhérents</a>
                </li>
              </ul>
          </div>
        </div><!-- /.navbar -->
      </div>