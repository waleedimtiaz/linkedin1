  <style type="text/css">
 body {
        padding-top: 0px;
      }
      </style>
   <div class="join-main">
          
          <div class="join-page-title">
                <h1>To join LinkedIn, sign up below...it's free!</h1>
          </div>
          
            <div class="join-box">

              <form id="join-form" class="join-form" onsubmit="return reg_validation()" method="post" action="asd.php">
              <div class="field-wrapper">
                <label for="fname-reg">First Name: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                  <input type="text" id="fname-reg" name="fname" />
                </div>
              </div>
              <div class="field-wrapper">
                <label for="lname-reg">Last Name: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="lname-reg" name="lname" />
                  </div>
              </div>
              <div class="field-wrapper">
                <label for="email-reg">Email: </label>
                <div class="field-error">
                  <span id="email-reg-error" class="form-error-text"></span>
                    <input type="text" id="email-reg" name="email" />
                </div>    
              </div>
              <div class="field-wrapper field-wrapper-password">
                <label for="pwd-reg">Password: </label>
                <div class="field-error">
                  	<span id="pwd-reg-error" class="form-error-text"></span>
                    <input type="password" id="pwd-reg" name="password" />
                    <p style="margin-left: 0px; margin-top: 5px;">6 or more characters</p>
                </div>    
              </div>
              
              <div id="actions">
              <button type="submit" class="btn btn-success">Join Now</button> <span class="asterik">*</span>
              </div>
              <p class="already-on-linkedin-message">Already on LinkedIn?
                <a href="<?php echo base_url(); ?>index.php/control/signin">Sign in.</a>
              </p>


              </form>


            
             </div>


        <div class="join-today-extra">
          <div class="join-today-sign-in-with">
            <p>Save time by using your Facebook account to sign up for LinkedIn.</p>
            <div class="join-today-actions">              
                
                  <a class="fb_button" href="<?php echo base_url(); ?>">
                    <p>Sign up with Facebook</p>
                  </a>
                  
            </div>
        </div>
     </div>
    <div class="join-today-agreement">
              <strong>*</strong>
            By joining LinkedIn, you agree to linkedIn's
            <div class="agreement-links">
               <a href="<?php echo base_url(); ?>index.php/control/useragreement">User Agreement</a>
               ,
               <a href="<?php echo base_url(); ?>">Privacy Policy</a>
               and
               <a href="<?php echo base_url(); ?>">Cookie Policy</a>
               .
            </div>
          </div>

          
      </div>

      
