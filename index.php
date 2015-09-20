<!DOCTYPE html>
<html>
  <head>
     <?php include("includes/head.php"); ?>
  </head>
  <body>
    <?php include("includes/header.php"); ?>
    <?php include("includes/generatePassword.php");?>
    <div class="container-fluid" title="Dynamic Web Apps Portfolio"> <!-- Start Main container -->

      <div class="jumbotron">
          <h2>Generate a hard-to-crack password that you can remember!</h2>
          <p> We will create a password for you using a combination of
          words, numbers, and special characters. </p>
      </div>

      <div class="jumbotron">
      <form action="index.php" method="post" >
        <div class="row">
            <h2> Select Password Requirements</h2>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <select name='wordCount' id='wordCount'>
              <option <?php if($wordCount=="0") echo 'selected="selected"'; ?> value="0">0</option>
              <option <?php if($wordCount=="1") echo 'selected="selected"'; ?> value="1">1</option>
              <option <?php if($wordCount=="2") echo 'selected="selected"'; ?> value="2">2</option>
              <option <?php if($wordCount=="3") echo 'selected="selected"'; ?> value="3">3</option>
              <option <?php if($wordCount=="4") echo 'selected="selected"'; ?> value="4">4</option>
              <option <?php if($wordCount=="5") echo 'selected="selected"'; ?> value="5">5</option>
              <option <?php if($wordCount=="6") echo 'selected="selected"'; ?> value="6">6</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for='wordCount'># of Words</label>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <input type="checkbox" name="camelCase" <?php if($camelCase=="true") echo 'value="true" checked'; ?>  />
          </div>
          <div class="col-sm-6">
            <label>Use CamelCase</label>
          </div>
        </div> <!-- end row -->
        <div class="row">
          <div class="col-sm-2">
            <select name='numberCount' id='numberCount'>
              <option <?php if($numberCount=="0") echo 'selected="selected"'; ?> value="0">0</option>
              <option <?php if($numberCount=="1") echo 'selected="selected"'; ?> value="1">1</option>
              <option <?php if($numberCount=="2") echo 'selected="selected"'; ?> value="2">2</option>
              <option <?php if($numberCount=="3") echo 'selected="selected"'; ?> value="3">3</option>
              <option <?php if($numberCount=="4") echo 'selected="selected"'; ?> value="4">4</option>
              <option <?php if($numberCount=="5") echo 'selected="selected"'; ?> value="5">5</option>
              <option <?php if($numberCount=="6") echo 'selected="selected"'; ?> value="6">6</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for='numberCount'># of Numbers</label>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <select name='specialCharacterCount' id='specialCharacterCount'>
              <option <?php if($specialCharacterCount=="0") echo 'selected="selected"'; ?> value="0">0</option>
              <option <?php if($specialCharacterCount=="1") echo 'selected="selected"'; ?> value="1">1</option>
              <option <?php if($specialCharacterCount=="2") echo 'selected="selected"'; ?> value="2">2</option>
              <option <?php if($specialCharacterCount=="3") echo 'selected="selected"'; ?> value="3">3</option>
              <option <?php if($specialCharacterCount=="4") echo 'selected="selected"'; ?> value="4">4</option>
              <option <?php if($specialCharacterCount=="5") echo 'selected="selected"'; ?> value="5">5</option>
              <option <?php if($specialCharacterCount=="6") echo 'selected="selected"'; ?> value="6">6</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for='specialCharacterCount'># of Special Characters</label>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <input type='submit' class='btn btn-default' value='New Password'>
          </div>
        </div>
        <div class="row">
            <h2>Your new password is:</h2>
            <h3 class="password"> <?php printPassword($password); ?> </h3>
            <br/>
            <a href='http://xkcd.com/936/'>Inspiration : xkcd archive</a>
        </div>
      </form>
    </div>
    </div> <!--End mainContainer-->
  <?php include("includes/footer.php"); ?>
  </body>
</html>
