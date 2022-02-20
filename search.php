<?php

/**
    Library of PHPbel
    Copyright (C) 2022 Cameron Ball

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License

**/

if (!isset($_GET['title'])) {
  if (!isset($_GET['exclusiveContains'])) {
    if (!isset($_GET['contains'])) { 
      header("Location: https://libraryofbabel.cameronball.repl.co/?error=2");
      die();
    } elseif ($_GET['contains']=='1') {
      $mode='3';
    } elseif ($_GET['exclusiveContains']=='1') {
        $mode='2';
    } elseif ($_GET['title']=='1') {
        $mode='1';
    } else {
      header("Location: https://libraryofbabel.cameronball.repl.co/?error=2");
      die();
    }
  }
}

require 'header.php';
$query=$_GET['search'];
if ($_GET['title']=='1') {
  $going='True';
  while ($going=='True') {
    $result=shell_exec("python lob.py --title '".$query."'");
    if ($result!='') {
      $going='False';
    }
  }
  $result=$result.':1';
  $resultArray=explode(':',$result);
}
if ($_GET['contains']=='1') {
  $going='True';
  while ($going=='True') {
    $result=shell_exec("python lob.py --pageInclude '".$query."'");
    if ($result!='') {
      $going='False';
    }
  }
  $resultArray=explode(':',$result);
}
if ($_GET['exclusiveContains']=='1') {
  $going='True';
  while ($going=='True') {
    $result=shell_exec("python lob.py --pageExclusive '".$query."'");
    if ($result!='') {
      $going='False';
    }
  }
  $resultArray=explode(':',$result);
}
?>

</head>
<body>

<br>
<a href="https://libraryofbabel.cameronball.repl.co">
<div>
<h1 class="ui header"><center><i class="book icon"></i>The Library of Babel</center></h1>
</div>
</a>
<br>

<center><div style="width: 95%;" class="ui padded raised text segment">
<h2 class="ui header">
<?php
echo 'Result';
echo '</h2><p style="text-align: left;overflow-wrap: break-word;">';
echo sprintf('<center style="overflow-wrap: break-word;">Location: %s<br>Wall: %s<br>Shelf: %s<br>Volume: %s<br>Page: %s</center>', $resultArray[0], $resultArray[1], $resultArray[2], $resultArray[3], $resultArray[4]);

?>
</p>
<a href="https://libraryofbabel.cameronball.repl.co">
<div class="ui vertical animated button" tabindex="0">
  <div class="hidden content">Home</div>
  <div class="visible content">
    <i class="home icon"></i>
  </div>
</div>
</a>
<a href="https://libraryofbabel.cameronball.repl.co/<?php echo sprintf('checkout.php?hex=%s&wall=%s&shelf=%s&volume=%s&page=%s"', $resultArray[0], $resultArray[1], $resultArray[2], $resultArray[3], $resultArray[4]);?>>
<div class="ui vertical animated button" tabindex="0">
  <div class="hidden content">Link</div>
  <div class="visible content">
    <i class="linkify icon"></i>
  </div>
</div>
</a>
</div></center>

<?php
require 'footer.php';
?>