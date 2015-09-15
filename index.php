<!DOCTYPE html>
<html>
  <head>
     <?php include("includes/head.php"); ?>
  </head>
  <body>
  	<?php include("includes/header.php"); ?>
          <div class="container">
          <div class="row mainContent" title="Dynamic Web Apps Portfolio">
              <div class="twelve columns">
                <main>
                  <hr/>
                  <h2>Generate a hard-to-guess password that you can remember!</h2>
                  <p> We will create a complex password for you using a combination of
                    words, numbers, and punctiation marks.  Choose how many of each you
                  want and the program will generate the password.</p>
                  <form class="parameters" action="index.php" method="post">

                    <h3> Select Password Generation Parameters</h3>
                    <p class='options'>
                      <label for='wordCount'># of Words</label>
                      <select name='wordCount' id='wordCount'>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4" selected="selected">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                      </select>
                      <label for='numberCount'># of Numbers</label>
                        <select name='numberCount' id='numberCount'>
                            <option value="0">0</option>
                            <option value="1" selected="selected">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for='specialCharacterCount'># of Special Characters</label>
                        <select name='specialCharacterCount' id='specialCharacterCount'>
                            <option value="0">0</option>
                            <option value="1" selected="selected">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>

                    </p>
                    <input type='submit' class='btn btn-default' value='New Password'> <br/>
                    <a href='http://xkcd.com/936/'>xkcd archive: password strength</a>
                  </form>
                  <div class="result">
                    <h2>Proposed password</h2>
                    <!-- Execute only after posting form-->

                    <p class='password'>
                      <?php  if ($_SERVER['REQUEST_METHOD']=='POST')
                      {
                      include("includes/functions.php");
                      } ?>
                    </p>
                  </div>
                  </main>
              </div> <!--End twelve columns -->
          </div> <!--End mainContent-->
      </div> <!--End container-->
      <?php include("includes/footer.php"); ?>

  </body>
</html>
