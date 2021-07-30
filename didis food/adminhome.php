<!DOCTYPE html>
<html>

<head>
    <title>adminhome</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .bgimage {
            background: url(images/userhome.jpg);
            background-size: 100% 100%;
            width: 100%;
            height: 110vh;
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
            padding: 40px 0px;
            flex-wrap: wrap;
            float: left;
        }

        .container a .box {
            position: relative;
            width: 450px;
            height: 40vh;
            padding: 20px;
            background: white;
            box-shadow: 5px 5px 25px black;
            border-radius: 4px;
            margin: 15px;
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
            color: #040a0f;
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
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="aboutus.php ">ABOUT US</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>


                    </ul>
                </div>


            </div>
        </div>
        <div class="body">

            <div class="container">
                <a href="vieworder.php">
                    <div class="box">

                        <div class="content">
                            <img src="images/a2 (1).jpg" height="190vh" width="100%">

                            <h3>View Orders</h3>
                        </div>
                    </div>
                </a>
                <a href="addstock.php">
                    <div class="box">

                        <div class="content">
                            <img src="images/a2 (2).jpg" height="190vh" width="100%">


                            <h3>Add Stock</h3>
                        </div>

                    </div>
                </a>

                <a href="stocklist.php">
                    <div class="box">

                        <div class="content">
                            <img src="images/a2.jpg" height="190vh" width="100%">
                            <h3>Stock List</h3>
                        </div>
                    </div>
                </a>
                <a href="viewreview.php">
                    <div class="box">

                        <div class="content">
                            <img src="images/photo-1540189549336-e6e99c3679fe.jpg" height="190vh" width="100%">
                            <h3>View Review</h3>
                        </div>
                    </div>
                </a>


            </div>



        </div>

        <div class="footer">
        </div>
    </div>
</body>

</html>