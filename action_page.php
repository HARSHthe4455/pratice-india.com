<?php
  
  if(isset($_POST['submit1']))
    header('Location: page1.php');
  else if(isset($_POST['submit2']))
    header('Location: page2.php');
