<!DOCTYPE html>
<html>

<head>
    <title>userhome</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .bgimage {
            background: url(images/userhome.jpg);
            background-size: 100% 100%;
            width: 100%;
            height: 120vh;
            background-repeat: no-repeat;
            position: relative;
            top: 0;
        }

        .menu {
            position: fixed;
            top: 0;
            z-index: 5;
            width: 100%;
            height: 10vh;
            font-family: monospace;
            background-color: palevioletred;

        }

        .menu .leftmenu {
            position: fixed;
            width: 30%;
            color: black;
            margin-left: 10vh;
            line-height: 10vh;
            font-family: 'Montserrat', sans-serif;
        }

        .menu .leftmenu h1 {
            float: left;
        }

        .menu .rightmenu-bar {
            width: 70%;
            float: left;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }

        .menu .rightmenu-bar ul {
            display: block;
            position: fixed;
            font-size: 18px;
            right: 0;
        }

        .menu .rightmenu-bar ul li {
            line-height: 10vh;
            list-style: none;
            margin-right: 10vh;
            float: left;
        }

        .menu .rightmenu-bar ul li a {
            text-decoration: none;
            color: black;
        }

        .menu-bar .rightmenu-bar ul li a:hover {
            color: orange;
        }

        .body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            display: flex;
            justify-items: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .body .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 0px;
            flex-wrap: wrap;
            float: left;
        }

        .container a .box {
            position: relative;
            width: 450px;
            height: 40vh;
            padding: 20px;
            background: #fff;
            box-shadow: 5px 5px 25px black;
            border-radius: 4px;
            margin: 6vh 5vh 0 5vh;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center;
            float: left;
        }

        .container a:hover {

            width: 500px;
            height: 42vh;
        }

        .container a {
            font-size: 32px;
            text-decoration: none;
            color: black;
        }

        .container a .box .content {
            position: relative;
            z-index: 1;
            font-size: 40px;
            transition: 0.5s;
            text-align: center;
            min-height: 21vh;
        }

        .container a .box .content h3 {
            margin: 10px;
            font-size: 32px;
            text-align: center;
        }

        .footer {
            bottom: 0px;
            width: 100%;
            height: 50px;
            background-color: palevioletred;
            margin-bottom: 0px;

        }
    </style>
</head>

<body>
    <div class="bgimage">
        <div class="menu">
            <div class="leftmenu">
                <h4>DIDI'S FOOD</h4>
            </div>

            <div class="rightmenu">
                <div class="rightmenu-bar">
                    <ul>
                        <li><a href="adminhome.php">HOME</a></li>
                        <li><a href="aboutus.php ">ABOUT US</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>

                    </ul>
                </div>
                <ul>



                    </a>
                </ul>
            </div>
        </div>
        <div class="body">

            <div class="container">
                <a href="yourorder.php">
                    <div class="box">

                        <div class="content">
                            <img src="images/u1.jpg" height="190vh" width="100%">
                            <h3>Your Orders</h3>
                        </div>
                    </div>
                </a>
                <a href="order.php">
                    <div class="box">

                        <div class="content">
                            <img src="images/u2.jpg" height="190vh" width="100%">

                            <h3>order</h3>
                        </div>

                    </div>
                </a>

                <a href="review.php">
                    <div class="box">

                        <div class="content">
                            <img src="images/u3.jpg" height="190vh" width="100%">
                            <h3>Review</h3>
                        </div>
                    </div>
                </a>


            </div>



        </div>


    </div>
    <div class="footer">
    </div>
</body>

</html>