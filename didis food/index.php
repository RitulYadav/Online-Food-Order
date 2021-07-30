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

        .bg-image {
            background-image: url('images/bgindex4.jpg');
            height: 100vh;
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            position: relative;
            top: 0;

        }

        .menu-bar {
            position: fixed;
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

        .text {
            width: 100%;

            color: black;
            text-transform: uppercase;
            text-align: center;
            position: relative;
            top: 30vh;
        }

        .text h4 {
            font-family: 'Open Sans', sans-serif;
            font-size: 20px;
        }

        .text h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 60px;
            margin: 14px 0px;
        }

        .text h3 {
            font-size: 30px;
            font-family: 'Open Sans', sans-serif;
        }

        #btn1 {
            background-color: white;
            border: 3px solid white;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 40px;
            width: 150px;
            font-family: 'Montserrat', sans-serif;
            margin-top: 25px;
            color: black;
        }

        #btn2 {
            background-color: white;
            border: 3px solid white;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 40px;
            width: 150px;
            color: red;
            font-family: 'Montserrat', sans-serif;
            margin-top: 25px;
        }

        .content {
            background-color: white;
            height: 70vh;
            width: 100%;

        }

        .content .content1 img {
            width: 100%;
            height: 70;
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
    </div>
    <div class="bg-image">
        <center>
            <div class="text">
                <h4>LIVE,LOVE,EAT </h4>
                <h1> GOOD PEOPLE,GOOD FOOD,GOOD TIME </h1>
                <h3> COUNT MEMORIES,NOT CALORIES</h3>

                <a href="adminlogin.php"><button id="btn1" type="submit"> ADMIN LOGIN </button></a>
                <a href="userlogin.php"><button id="btn2" type="submit"> USER LOGIN </button></a>
            </div>
        </center>

    </div>

    <div class="footer">
    </div>



</body>

</html>