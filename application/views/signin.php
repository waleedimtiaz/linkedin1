 
<div class="signin-main">
          
          <div class="signin-page-title">
                <h1>Sign in to LinkedIn</h1>

          </div>
          <div class="signin-wrapper">
            <div class="signin-box">
              <form id="signin-form" class="signin-form"  method="post" action="#">
            <div class="field-wrapper">
              <label for="email-reg">Email: </label>
              <div class="field-error">
                <span id="email-reg-error" class="form-error-text"></span>
                  <input type="text" id="email-reg" name="email" />
              </div>    
            </div>
            <div class="field-wrapper">
              <label for="pwd-reg">Password: </label>
              <div class="field-wrapper">
                <span id="pwd-reg-error" class="form-error-text"></span>
                  <input type="password" id="pwd-reg" name="password" />
                  <a href="<?php echo base_url(); ?>index.php/control/changepw" class="forgot-password-link">Forgot password?</a>
              </div>    
            </div>
            
            <button type="submit" class="btn btn-primary">Sign In</button> <span class="join-linkedlin-link"> or <a href="<?php echo base_url(); ?>index.php/control/joinnow">Join LinkedIn</span>
          </form>
            </div>
          </div>

          
        </div>