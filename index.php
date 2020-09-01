<?php
  $txt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $exchange = '***';
  $_GET['val'];
  $repTxt = str_replace($_GET['val'],$exchange, $txt);

?>

<h1><?php echo $txt ?></h1>
<h3><?php echo $repTxt ?></h3>
