# CSCI-E15: Project 2
### PHP Basics
This project creates a strong password in the xcdk style.  This is, a password that
is easy for humans but hard for computers.  The basic idea is to select large passwords
composed of words that humans can memorize (there is a basic security flaw with this
assumption but that is a different conversation. We are just implementing...)

### Repository Location
[GitHub gc-cloud E15](https://github.com/gc-cloud/E15P2)

### Live Site Location
Please visit [zudbu.com](http://p2.zudbu.com).  This domain is dedicated (currently) to my CSCIE15 work.

### Site organization
I decided to take on some of the extra challenges and am using a combination of PHP includes,
Java Script and the Skeleton framework. From a PHP standpoint, the solution uses several
includes.  One for the data structures (  lists of words, special characters, etc), and
one for the functions.  We take advantage of the predefined PHP libraries to handle arrays.
For example array_rand() and shuffle().  
  - The main content is on index.php.  Head, Header and Footer content is obtained from calls to  head.php, header.php and footer.php
  - Collapsible menus (accordions) are based on the [jQuery User Interface](http://jqueryui.com)
  - The layout is mobile-first and responsive. To do this, I am using  [Skeleton](http://getskeleton.com), a very clean and light boilerplate. Specific CSS for this site are defined on zudbu.css
  - We are obtaining the Raleway font from [Google fonts](https://www.google.com/fonts)
  -
