<?php include './views/_style.php'; ?>

<?php ob_start(); ?>
    <?php include './views/_menu.php'; ?>

      <!-- Example row of columns -->
      <div class="row-fluid">
          <form class="form-horizontal" method="post" action="<?php echo $http->getCurrentUrl(array('action' => 'create'), array('action')) ?>">
              <fieldset>
                  <legend><?php echo $title ?></legend>
                  <div class="control-group<?php $adherentRequest->hasError('Lastname') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputLastname">Nom</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputLastname" name="input[Lastname]" value="<?php echo $adherentRequest->getLastname(); ?>" />

                          <span class="help-inline">Ex. (AZZOUGAR) max 64 caractères</span>
                      </div>
                  </div>

                  <div class="control-group<?php $adherentRequest->hasError('Firstname') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputFirstname">Prénom</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputFirstname" name="input[Firstname]" value="<?php echo $adherentRequest->getFirstname(); ?>">

                          <span class="help-inline">Ex. (Montasser) max 64 caractères</span>
                      </div>
                  </div>

                  <div class="control-group<?php $adherentRequest->hasError('Birthday') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputBirthday">Date Naissance</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputBirthday" name="input[Birthday]" value="<?php echo $adherentRequest->getBirthday('31/01/1984'); ?>">

                          <span class="help-inline">Ex. 28/12/2013</span>
                      </div>
                  </div>

                  <div class="control-group<?php $adherentRequest->hasError('Cin') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputCin">CIN</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputCin" name="input[Cin]" value="<?php echo $adherentRequest->getCin(); ?>">

                          <span class="help-inline">Ex. (AG7896545) max 10 caractères</span>
                      </div>
                  </div>

                  <div class="control-group<?php $adherentRequest->hasError('Occupation') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputOccupation">Profession</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputOccupation" name="input[Occupation]" value="<?php echo $adherentRequest->getOccupation(); ?>">

                          <span class="help-inline">Ex. (Web developper) max 32 caractères</span>
                      </div>
                  </div>

                  <div class="control-group<?php $adherentRequest->hasError('Address') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputAddress">Adresse</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputAddress" name="input[Address]" value="<?php echo $adherentRequest->getAddress(); ?>">

                          <span class="help-inline">Ex. (58 av. Hassan II ...) max 128 caractères</span>
                      </div>
                  </div>

                  <div class="control-group<?php $adherentRequest->hasError('City') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputCity">Ville</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputCity" name="input[City]" value="<?php echo $adherentRequest->getCity(); ?>">

                          <span class="help-inline">Ex. (Agadir, ...) max 32 caractères</span>
                      </div>
                  </div>

                  <div class="control-group<?php $adherentRequest->hasError('Phone') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputPhone">Télephone</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputPhone" name="input[Phone]" value="<?php echo $adherentRequest->getPhone(); ?>">

                          <span class="help-inline">Ex. (0688995566) max 10 chiffres</span>
                      </div>
                  </div>

                  <div class="control-group<?php $adherentRequest->hasError('Email') ? print ' error' : ''; ?>">
                      <label class="control-label" for="inputEmail">Email</label>
                      <div class="controls">
                          <input class="span6" type="text" id="inputEmail" name="input[Email]" value="<?php echo $adherentRequest->getEmail(); ?>">

                          <span class="help-inline">Ex. (user@dom.tld) max 64 chiffres</span>
                      </div>
                  </div>

                  <div class="control-group">
                      <div class="controls">
                          <button type="submit" class="btn btn-large btn-primary span6" data-loading-text="Enregistrement ...">Enregistrer</button>
                      </div>
                  </div>
              </fieldset>
          </form>
      </div>

      <?php include './views/_footer.php'; ?>
<?php $body_content = ob_get_contents(); ob_end_clean(); ?>

<?php include './views/_template.php'; ?>