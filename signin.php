<?php

define('IS_AUTHENTICATED_MODE', false);

include 'config.php';

$http     = Http::getInstance();
$security = Security::getInstance();

// Check Post
if ($http->isPost()) {

    // If data posted check login and password
    $security->doAuthentication(
            'user',
            array('login' => $http->get('username')), 
            array('pass' => $http->get('password')));
}

if ($security->isConnected()) {
    $http->redirectTo(DEFAULT_PAGE);
}


// Views template
$title = 'Se connecter';

$style_content = <<<EOS
<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

</style>
EOS;

$body_content = <<<EOB
    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Se connecter</h2>
        <input type="text" name="username" class="input-block-level" placeholder="Votre login">
        <input type="password" name="password" class="input-block-level" placeholder="Votre mot de password">
        <!-- <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
        <button class="btn btn-large btn-primary" type="submit">Se connecter</button>
      </form>

    </div>
    <!-- /container -->
EOB;

include './views/_template.php';