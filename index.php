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
                  <form class="parameters">

                    <h3> Select Password Generation Parameters</h3>
                    <p class='options'>
                      <label for='number_of_words'># of Words</label>
                      <input maxlength=1 type='text' name='number_of_words' id='number_of_words' value=''>  (Max 9)
                      <br/>
                      <input type='checkbox' name='add_number' id='add_number' >
                      <label for='add_number'>Add a number</label>
                      <br>
                      <input type='checkbox' name='add_symbol' id='add_symbol' >
                      <label for='add_symbol'>Add a symbol</label>
                    </p>
                    <input type='submit' class='btn btn-default' value='New Password'> <br/>
                    <a href='http://xkcd.com/936/'>xkcd archive: password strength</a>
                  </form>
                  <div class="result">
                    <p>Proposed password</p>
                    <p class='password'> buy-led-common-camera	</p>
                  </div>
                  </main>
              </div> <!--End twelve columns -->
          </div> <!--End mainContent-->
      </div> <!--End container-->
      <?php include("includes/footer.php"); ?>
  </body>
</html>
