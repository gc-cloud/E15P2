# CSCI-E15: Project 2
### PHP Basics
This project creates a strong password in the xkcd style.  This is, a password that
is easy for humans but hard for computers.  The basic idea is to select large passwords
composed of words, numbers and symbols, that humans can memorize but are difficult to be
cracked using a brute force attack.    

### Repository Location
[GitHub gc-cloud E15](https://github.com/gc-cloud/E15P2)

### Live Site Location
Please visit [p2.zudbu.com](http://p2.zudbu.com).  This domain is dedicated (currently) to my CSCIE15 work.

### Demo location
Password generator [video https://youtu.be/sJJcIBwy07A](https://youtu.be/sJJcIBwy07A) in youtube.

### Extra Challenges
I decided to take on some of the extra challenges.
- Using PHP includes
- Added extra feature for CamelCase
- Implemented styling using bootstrap
- Made sure site displays nicely on different screen sizes (tested with iPhones and desktops)


### Site organization
  - The site is organized in folders to keep css, images, php includes and java script separated
  - The main content is on index.php.  Head, Header and Footer content is obtained from calls to
   head.php, header.php and footer.php
  - data.php defines valid values
  - generatePassword.php contains the main logic to generate the password
  - The layout is mobile-first and responsive. To do this, I am using [bootstrap](http://getbootstrap.com).
  Specific CSS for this site are defined on zudbu.css
  - We are obtaining the Raleway font from [Google fonts](https://www.google.com/fonts)

### Random Password Generation
All the logic to generate random passwords runs on the server side.  Functions are in
generatePassword.php. We take advantage of predefined PHP libraries to handle arrays.
For example array_rand() and shuffle().  
-  function addElements ($source, &$destination,$count, $camelCase) selects random
elements from an array ($source) and adds them to a destination array ($destination).
$count drives how many elements will be selected. If $camelCase is true we use PHP's
ucfirst() function to capitalize the first letter of each selected word.
- With the appropriate parameters, we run addElements($source, &$destination,$count, $camelCase)
 multiple times to select the desired numbers of words,numbers and special characters.
- Once the destination array has all the desired elements, its contents are shuffled
using PHP's shuffle() function.  
- Finally, the function printPassword($an_Array) is used to output the result to
the screen.

## Sources
- Selection of valid numbers was straightforward.
- Selection of valid special characters was based on the layout of my keyboard.  To note, the
array contains the html escape sequences instead of the charactes themselves. Codes
were obtained from [theasciicode.com](http://www.theasciicode.com.ar/ascii-control-characters/escape-ascii-code-27.html)
- The list of common english words is based on content from gravityMonkey
[github](https://gist.github.com/gravitymonkey/2406023)
