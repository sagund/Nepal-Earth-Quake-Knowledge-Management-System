<div class="container">
  <div class="row">
  	<div class="col-md-6">

          <form class="form-horizontal" action="" method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Login</legend>
            </div>

            <div class="well">
              <div class="control-group">
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                  <input type="email" id="email" name="email" placeholder="" class="form-control input-lg" required>

                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                  <input type="password" id="password" name="password" placeholder="" class="form-control input-lg" required>

                </div>
              </div>
            </div>

            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success">Login</button>
              </div>
              <br>
              <a href="#">Forgot Password?</a>
            </div>
          </fieldset>
        </form>

        <br>

 <p>If you don't have an account, please <a href="<?php echo base_url(); ?>register">register</a>.</p>
  </div>
    </div>

</div>
