<?php
if ($_GET['wall']>4) {
  header("Location: https://Library-of-PHPbel.cameronball.repl.co/?error=1");
  die();
}
if ($_GET['wall']<1) {
  header("Location: https://Library-of-PHPbel.cameronball.repl.co/?error=1");
  die();
}
if ($_GET['shelf']>5) {
  header("Location: https://Library-of-PHPbel.cameronball.repl.co/?error=1");
  die();
}
if ($_GET['shelf']<1) {
  header("Location: https://Library-of-PHPbel.cameronball.repl.co/?error=1");
  die();
}
if ($_GET['volume']>32) {
  header("Location: https://Library-of-PHPbel.cameronball.repl.co/?error=1");
  die();
}
if ($_GET['volume']<1) {
  header("Location: https://Library-of-PHPbel.cameronball.repl.co/?error=1");
  die();
}
if ($_GET['page']>410) {
  header("Location: https://Library-of-PHPbel.cameronball.repl.co/?error=1");
  die();
}
if ($_GET['page']<1) {
  header("Location: https://Library-of-PHPbel.cameronball.repl.co/?error=1");
  die();
}
require 'header.php';
$colon=':';
$page=(int)$_GET['page'];
$prevPage=(string)$page-1;
$nextPage=(string)$page+1;

$query=$_GET['hex'] . $colon . $_GET['wall'] . $colon . $_GET['shelf'] . $colon . $_GET['volume']  . $colon . $_GET['page'];

$checkout=shell_exec("python lob.py --checkout '".$query."'");
$title=substr($checkout, 0, 33);
$content=substr($checkout, 34, -1);
?>
</head>
<body>

<br>
<a href="https://Library-of-PHPbel.cameronball.repl.co">
<div>
<h1 class="ui header"><center><i class="book icon"></i>The Library of Babel</center></h1>
</div>
</a>
<br>

<center><div style="width: 95%;" class="ui padded raised text segment">
<h2 class="ui header">
<?php
echo $title;
echo '</h2><p style="text-align: left;overflow-wrap: break-word;">';
echo $content;
?>
</p>
</div>
<?php 
$prevPageInt=(int)$prevPage;
$prevBtn=sprintf('<a href="https://Library-of-PHPbel.cameronball.repl.co/checkout.php?hex=%s&wall=%s&shelf=%s&volume=%s&page=%s"<div class="ui animated button" tabindex="0"><div class="visible content">Previous Page</div><div class="hidden content"><i class="left arrow icon"></i></div></div></a>', $_GET['hex'], $_GET['wall'], $_GET['shelf'], $_GET['volume'], $prevPage);
if ($prevPageInt>0) {
  echo $prevBtn;
}
?>
<a href="https://Library-of-PHPbel.cameronball.repl.co">
  <div class="ui vertical animated button" tabindex="0">
    <div class="hidden content">Home</div>
    <div class="visible content">
      <i class="Home icon"></i>
    </div>
  </div>
</a>
<?php 
$nextPageInt=(int)$nextPage;
$nextBtn=sprintf('<a href="https://Library-of-PHPbel.cameronball.repl.co/checkout.php?hex=%s&wall=%s&shelf=%s&volume=%s&page=%s"<div class="ui animated button" tabindex="0"><div class="visible content">Next Page</div><div class="hidden content"><i class="right arrow icon"></i></div></div></a>', $_GET['hex'], $_GET['wall'], $_GET['shelf'], $_GET['volume'], $nextPage);
if ($nextPageInt<411) {
  echo $nextBtn;
}
?>
</center>

<?php
require 'footer.php';
?>