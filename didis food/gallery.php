<!DOCTYPE html>
<html>

<head>
  <title>Didi'food </title>



  <style>
    * {
      padding: 0;
      margin: 0;
    }

    .bg {
      width: 100%;
      height: auto;
    }




    .menu-bar {
      position: sticky;
      top: 0;
      z-index: 5;
      width: 100%;
      height: 10vh;
      font-family: monospace;
      background-color: palevioletred;

    }

    .menu-bar .leftmenu-bar {
      position: fixed;
      width: 30%;
      color: black;
      margin-left: 10vh;
      line-height: 10vh;
      font-family: 'Montserrat', sans-serif;
    }

    .menu-bar .leftmenu-bar h1 {
      float: left;
    }

    .menu-bar .rightmenu-bar {
      width: 70%;
      float: left;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
    }

    .menu-bar .rightmenu-bar ul {
      display: block;
      position: fixed;
      font-size: 18px;
      right: 0;
    }

    .menu-bar .rightmenu-bar ul li {
      line-height: 10vh;
      list-style: none;
      margin-right: 10vh;
      float: left;
    }

    .menu-bar .rightmenu-bar ul li a {
      text-decoration: none;
      color: black;
    }

    .menu-bar .rightmenu-bar ul li a:hover {
      color: orange;
    }

    .footer {
      position: fixed;
      bottom: 0px;
      width: 100%;
      height: 10vh;
      background-color: palevioletred;
      box-shadow: 8px 4px 10px #040a0f;
      margin-bottom: 0px;

    }

    .dropdown {
      position: relative;
      display: inline-block;
      margin: 1vh;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>

<body>


  <div class="menu-bar">
    <div class="leftmenu-bar">
      <h2>DIDI'FOOD</h2>
    </div>
    <div class="rightmenu-bar">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
  </div>

  <div class="dropdown">
    <img src="images/u1.jpg" alt="Cinque Terre" width="260" height="200">
    <div class="dropdown-content">
      <img src="images/u1.jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/u2.jpg" alt="Cinque Terre" width="260" height="200">
    <div class="dropdown-content">
      <img src="images/u2.jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/u3.jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/u3.jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/images (1).jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/images (1).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/images.jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/images.jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/download (1).jpg" alt="Cinque Terre" width="260" height="200">
    <div class="dropdown-content">
      <img src="images/download (1).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/images (4).jpg" alt="Cinque Terre" width="260" height="200">
    <div class="dropdown-content">
      <img src="images/images (4).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/images (3).jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/images (3).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/images (2).jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/images (2).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/s1 (3).jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/s1 (3).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/s1 (2).jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/s1 (2).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/s1 (1).jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/s1 (1).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/s1 (5).jpg" alt="Cinque Terre" width="260" height="200">
    <div class="dropdown-content">
      <img src="images/s1 (5).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/s1 (6).jpg" alt="Cinque Terre" width="260" height="200">
    <div class="dropdown-content">
      <img src="images/s1 (6).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>
  <div class="dropdown">
    <img src="images/f3 (1).jpg" alt="Cinque Terre" width="300" height="200">
    <div class="dropdown-content">
      <img src="images/f3 (1).jpg" alt="Cinque Terre" width="600" height="400">

    </div>
  </div>


  <div class="footer">
  </div>
</body>

</html>