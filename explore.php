<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Kelompok 2" />
  <title>GamesNexus - Explore</title>
  <link rel="icon" href="assets/logo-title.png" type="image/png">
  <link rel="stylesheet" href="css/explore.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
</head>

<body>

  <header>
    <div class="logo">
      <a href="index.html">
        <img src="assets/logo-transparent.png">
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="explore.php" class="active">EXPLORE</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <form id="search">
      <input type="text" id="searchbar" placeholder="Looking for a specific game?" />
      <button id="searchbutton">Search</button>
    </form>

    <div id="filterbutton">
      <button class="buttons">All</button>
      <button class="buttons">Action</button>
      <button class="buttons">Adventure</button>
      <button class="buttons">Casual</button>
      <button class="buttons">Horror</button>
      <button class="buttons">MOBA</button>
      <button class="buttons">RPG</button>
      <button class="buttons">Strategy</button>
    </div>

    <div id="products"></div>
    <div class="errorMessage"></div>
  </div>

  <div class="modal-container">
    <div class="modal">
      <img src="" alt="" class="modal-img" />
      <div class="modal-description">
        <div class="modal-name">Product name :</div>
        <div class="modal-category">Category :</div>
        <div class="modal-date">Date :</div>
        <span class="modal-details">Description : </span>
      </div>
      <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg" class="modal-close-btn" width="24" height="24">
        <path
          d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z" />
      </svg>
    </div>
  </div>

  <!-- <footer>
            <h2>STAY CONNECTED</h2>
            <p>
                &copy; 2023 GAMESNEXUS, INC. ALL RIGHTS RESERVED.<br>
                All <b>trademarks</b> referenced herein are the properties of their respective owners.
            </p>
            <a href="aboutus.html">
                <h3>Follow us on Social Media</h3>
            </a><br>
            <a href="#top"><img src="assets/logo-transparent.png"></a>
        </footer> -->

  <!-- JavaScript below -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="javascript/explore.js"></script>
</body>

</html>