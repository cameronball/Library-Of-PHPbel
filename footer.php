<!--
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

-->
<div class="ui padded raised text container segment">
  <h2 class="ui header"><i class="mini info left icon"></i>About</h2>
  <p>This website is a PHP and Python implementation of Jonathan Basile's <a href="https://libraryofbabel.info">Library of Babel</a> which itself was based on Jorge Luis Borges' <a href="https://en.wikipedia.org/wiki/The_Library_of_Babel">book by the same name</a>. Due to the algorithm used, nothing is randomly generated and although the entire library is not physically stored, all that the information needs to be discovered is to be looked up. Therefore, everything that has ever, is currently, or will ever be thought exists within the library.</p>
</div>

<div class="ui padded raised text container segment">
  <h2 class="ui header"><i class="mini terminal left icon"></i>Technical Implementation</h2>
  <p>Although Jonathan Basile's algorithm used isn'tpublic I have created the closest possible using available information given on the original website and other sources throughout the years. For the frontend I have used Semantic UI, a very nice looking and easy framework I would definitely reccomend. For the backend, I have used a PHP-Python stack with PHP being used to take the user's input and call the python script which does the majority of the heavy lifting of the project. Despite the seemingly endless size of the library, being calculated as having 25<sup>1,312,000</sup> books, the python script - which as stated earlier is responsible for actually looking up the books and pages - is actually only just under 300 lines long.</p>
</div>

<br>
<center>
<div class="ui fluid raised text secondary segment" style="width: 90%;">
  <center>
  <p>&copy 2022 <a href="https://github.com/cameronball">Cameron Ball</a>. All rights reserved.</p>
  </center>
</div>
</center>
<br>


<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.js"></script>
</body>
</html>