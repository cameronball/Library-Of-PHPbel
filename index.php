<?php
require 'header.php';
?>
</head>
<body>

<br>
<h1 class="ui header"><center><i class="book icon"></i>The Library of Babel</center></h1>
<br>

<div class="ui padded raised text container segment">
  <?php
    if (isset($_GET['error'])) {
      if ($_GET['error']=='1') {
        echo '<div class="ui negative message transition"><div class="header">There\'s been an error.</div><p>Please enter a valid input.</p></div>';
      }
    }
  ?>
  <h2 class="ui header"><i class="mini search icon"></i>Address Lookup</h2>
  <p>Lookup a specific page.</p>
  <p>Here you can input the hex location, the wall, the shelf, the volume and the page:</p>

<form action="checkout.php" method="get">
<div class="ui form">
    <div class="field">
      <div class="ui fluid left icon input">
        <input type="text" name="hex" placeholder="Hexagon location" required>
        <i class="map marker alternate icon"></i>
      </div>
    </div>

    <div class="field">
      <div class="ui fluid left icon input">
        <input type="number" name="wall" placeholder="Wall number (1-4)" min="1" max="4" required>
        <i class="th icon"></i>
      </div>
    </div>

    <div class="field">
      <div class="ui fluid left icon input">
        <input type="number" name="shelf" placeholder="Shelf Number (1-5)" min="1" max="5" required>
        <i class="archive icon"></i>
      </div>
    </div>

    <div class="field">
      <div class="ui fluid left icon input">
        <input type="number" name="volume" placeholder="Volume Number (1-32)" min="1" max="32" required>
        <i class="book icon"></i>
      </div>
    </div>

  <div class="field">
      <div class="ui fluid left icon input">
        <input type="number" name="page" placeholder="Page Number (1-410)" min="1" max="410" required>
        <i class="file icon"></i>
      </div>
    </div>
  
<center><button class="ui button" type="submit">Submit</button></center>
</div>
</form>
</div>
  
<div class="ui padded raised text container segment">
  <h2 class="ui header"><i class="mini align left icon"></i>Search for Text</h2>
  <p>Does 3 searches for the text you input:</p>
  <div class="ui bulleted list">
    <div class="item">Page contains: Finds a page which contains the text.</div>
    <div class="item">Page only contains: Finds a page which only contains that text and nothing else.</div>
    <div class="item">Title match: Finds a title which is exactly this string. For a title match, it will only match the first 25 characters. Addresses returned for title matches will need to have a page number added to the tail end, since they lack this.</div>
  </div>
  <form>
  <div class="ui form">
    <div class="field">
      <div class="ui fluid icon input">
        <input type="text" name="search" placeholder="Search Term" required>
        <i class="search icon"></i>
      </div>
    </div>
    <div class="ui fluid buttons">
      <button class="ui button" type="submit" name="contains">Page Contains</button>
      <button class="ui button" type="submit" name="exclusiveContains">Page only contains</button>
      <button class="ui button" type="submit" name="title">Title match</button>
    </div>
  </div>
  </form>
</div>

<div class="ui padded raised text container segment">
  <h2 class="ui header"><i class="mini info left icon"></i>About</h2>
  <p>This website is a PHP and Python implementation of Jonathan Basile's <a href="https://libraryofbabel.info">Library of Babel</a> which itself was based on Jorge Luis Borges' <a href="https://en.wikipedia.org/wiki/The_Library_of_Babel">book by the same name</a>. Due to the algorithm used, nothing is randomly generated and although the entire library is not physically stored, all that the information needs to be discovered is to be looked up. Therefore, everything that has ever, is currently, or will ever be thought exists within the library.</p>
</div>

<?php
require 'footer.php';
?>
