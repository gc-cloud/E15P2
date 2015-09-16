<!DOCTYPE html>
<html>
  <head>
     <?php include("includes/head.php"); ?>
  </head>
  <body>
  	<?php include("includes/header.php"); ?>
    <?php include("includes/generatePassword.php");?>
          <div class="container">
          <div class="row mainContent" title="Dynamic Web Apps Portfolio">
            <div class="row">
              <div class="twelve columns">
                <main>
                  <hr/>
                  <h2>Generate a hard-to-guess password that you can remember!</h2>
                  <p> We will create a complex password for you using a combination of
                    words, numbers, and special characters. <a href='http://xkcd.com/936/'>(reference : xkcd archive)</a></p>
              </div>
            </div>
            <form action="index.php" method="post" class="options, parameters">
            <div class="row">
              <div class="twelve columns">
                <h3> Select Password Requirements</h3>
              </div>
            </div>
            <div class="row">
                      <div class="six columns">

                        <select name='wordCount' id='wordCount'>
                            <option <?php if($wordCount=="0") echo 'selected="selected"'; ?> value="0">0</option>
                            <option <?php if($wordCount=="1") echo 'selected="selected"'; ?> value="1">1</option>
                            <option <?php if($wordCount=="2") echo 'selected="selected"'; ?> value="2">2</option>
                            <option <?php if($wordCount=="3") echo 'selected="selected"'; ?> value="3">3</option>
                            <option <?php if($wordCount=="4") echo 'selected="selected"'; ?> value="4">4</option>
                            <option <?php if($wordCount=="5") echo 'selected="selected"'; ?> value="5">5</option>
                            <option <?php if($wordCount=="6") echo 'selected="selected"'; ?> value="6">6</option>
                        </select>
                        <label for='wordCount'># of Words</label>
                      </div>
                    <div class="six columns">

                      <input type="checkbox" name="uppercase" <?php if($uppercase) echo 'value="true" checked'; ?> >
                      <label for='uppercase'>Uppercase</label>
                    </div>
              </div> <!-- end row -->
              <div class="row">
                      <div class="six columns">

                          <select name='numberCount' id='numberCount'>
                            <option <?php if($numberCount=="0") echo 'selected="selected"'; ?> value="0">0</option>
                            <option <?php if($numberCount=="1") echo 'selected="selected"'; ?> value="1">1</option>
                            <option <?php if($numberCount=="2") echo 'selected="selected"'; ?> value="2">2</option>
                            <option <?php if($numberCount=="3") echo 'selected="selected"'; ?> value="3">3</option>
                            <option <?php if($numberCount=="4") echo 'selected="selected"'; ?> value="4">4</option>
                            <option <?php if($numberCount=="5") echo 'selected="selected"'; ?> value="5">5</option>
                            <option <?php if($numberCount=="6") echo 'selected="selected"'; ?> value="6">6</option>
                          </select>
                          <label for='numberCount'># of Numbers</label>
                        </div>
                        <div class="six columns">

                          <select name='specialCharacterCount' id='specialCharacterCount'>
                            <option <?php if($specialCharacterCount=="0") echo 'selected="selected"'; ?> value="0">0</option>
                            <option <?php if($specialCharacterCount=="1") echo 'selected="selected"'; ?> value="1">1</option>
                            <option <?php if($specialCharacterCount=="2") echo 'selected="selected"'; ?> value="2">2</option>
                            <option <?php if($specialCharacterCount=="3") echo 'selected="selected"'; ?> value="3">3</option>
                            <option <?php if($specialCharacterCount=="4") echo 'selected="selected"'; ?> value="4">4</option>
                            <option <?php if($specialCharacterCount=="5") echo 'selected="selected"'; ?> value="5">5</option>
                            <option <?php if($specialCharacterCount=="6") echo 'selected="selected"'; ?> value="6">6</option>
                          </select>
                          <label for='specialCharacterCount'># of Special Characters</label>
                        </div>
                  </div>
                  <div class="row">
                        <div class="twelve columns">
                        </br>
                          <input type='submit' class='btn btn-default' value='New Password'> <br/>
                      <h2>Proposed password</h2>
                      <p class='password'>
                        <?php printPassword($password); ?>
                      </p>
                    </br>
                  </div>
                </div>
                    </form>
                  </main>
              </div> <!--End twelve columns -->
          </div> <!--End mainContent-->
      </div> <!--End container-->
      <?php include("includes/footer.php"); ?>

  </body>
</html>
