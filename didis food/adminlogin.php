<!DOCTYPE html>
<html>

<head>
    <title>adminlogin</title>
    <style>
        body {
            margin: 0;
            padding: 0;

        }

        .bgimg {
            background-image: url('images/admin.jpg');
            height: 100vh;
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            position: relative;
            top: 0;
        }

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

        .loginbox {
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .loginbox h1 {
            float: left;
            font-size: 40px;
            border-bottom: none;
            padding: 13px 0;
        }

        .textbox {
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #4caf50;
        }

        .textbox i {
            width: 26px;
            float: left;
            text-align: center;

        }

        .textbox input {
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 18px;
            width: 140px;
            float: left;
            margin: 10px;

        }

        .btn {
            width: 100%;
            background: red;
            border: 2px solid #af4c4c;
            color: white;
            padding: 5px;
            font-size: 20px;
            cursor: pointer;
            margin: 12px 0;
            border-radius: 20px;

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
                <li><a href="aboutus.php ">ABOUT US</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
    </div>

    <div class="bgimg">
        <div class="loginbox">
            <h1>Admin login</h1>
            <form action="admin_db.php" method="POST">
                <div class="textbox">
                    <input type="text" placeholder=" Enter Username" name="uname">
                </div>

                <div class="textbox">
                    <input type="Password" placeholder=" Enter Password" name="password">
                </div>

                <input class="btn" type="submit" name="sub" value="LOGIN">
            </form>


        </div>

    </div>
    <div class="footer">
    </div>


</body>

</html>