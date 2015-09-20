
<?php
  /* Define data structures. The content of these arrays is used to select
  valid values to generate a password. There is one array for each data type.
  These are: special characters, numbers and words. These data structures are
  accessed by the file functions.php */
  /*$specialCharacters = array("!","@","#","$","%","&","*","_","+",".");*/
  $specialCharacters = array("&#33;","&#35;","&#36;","&#37;","&#38;","&#42;","&#43;","&#46;","&#64;","&#95;");

  $numbers = array("0","1","2","3","4","5","6","7","8","9");
  $wordCorpus = array("hello", "world", "this", "is", "random","stuff",
  "the","of","and","a","to","in","is","you","that","it","he","was","for",
  "on","are","as","with","his","they","I","at","be","this","have","from",
  "or","one","had","by","word","but","not","what","all","were","we","when",
  "your","can","said","there","use","an","each","which","she","do","how","their",
  "if","will","up","other","about","out","many","then","them","these","so","some",
  "her","would","make","like","him","into","time","has","look","two","more",
  "write", "go","see","number","no","way","could","people","my","than","first",
  "water","been","call","who","oil","its","now","find","long","down","day","did",
  "get","come","made","may","part");
?>
