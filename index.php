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
  <p>Here you can input the hex location, the wall, the shelf, the volume and the page (Numbers start at 0):</p>

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
        <input type="number" name="wall" placeholder="Wall number (0-3)" min="0" max="3" required>
        <i class="th icon"></i>
      </div>
    </div>

    <div class="field">
      <div class="ui fluid left icon input">
        <input type="number" name="shelf" placeholder="Shelf Number (0-4)" min="0" max="4" required>
        <i class="archive icon"></i>
      </div>
    </div>

    <div class="field">
      <div class="ui fluid left icon input">
        <input type="number" name="volume" placeholder="Volume Number (0-31)" min="0" max="31" required>
        <i class="book icon"></i>
      </div>
    </div>

  <div class="field">
      <div class="ui fluid left icon input">
        <input type="number" name="page" placeholder="Page Number (0-409)" min="0" max="409" required>
        <i class="file icon"></i>
      </div>
    </div>
  
<center><button class="ui button" type="submit">Submit</button></center>
</div>
</form>
</div>
  
<div class="ui padded raised text container segment">
<?php
    if (isset($_GET['error'])) {
      if ($_GET['error']=='2') {
        echo '<div class="ui negative message transition"><div class="header">There\'s been an error.</div><p>Please enter a valid input.</p></div>';
      }
    }
  ?>
  <h2 class="ui header"><i class="mini align left icon"></i>Search for Text</h2>
  <p>Does 3 searches for the text you input:</p>
  <div class="ui bulleted list">
    <div class="item">Page contains: Finds a page which contains the text.</div>
    <div class="item">Page only contains: Finds a page which only contains that text and nothing else.</div>
    <div class="item">Title match: Finds a title which is exactly this string. For a title match, it will only match the first 25 characters.</div>
  </div>
  <p>(Remeber that this library only contains letters, commas, full stops (periods) and spaces.)</p>
  <form action="search.php" method="get">
  <div class="ui form">
    <div class="field">
      <div class="ui fluid icon input">
        <input type="text" name="search" placeholder="Search Term" required>
        <i class="search icon"></i>
      </div>
    </div>
    <div class="ui fluid buttons">
      <button class="ui button" type="submit" name="contains" value="1">Page Contains</button>
      <button class="ui button" type="submit" name="exclusiveContains" value="1">Page only contains</button>
      <button class="ui button" type="submit" name="title" value="1">Title match</button>
    </div>
  </div>
  </form>
</div>

<?php
require 'footer.php';
?>
