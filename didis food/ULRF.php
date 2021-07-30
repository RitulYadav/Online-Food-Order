<html>

<head>
    <title>registration form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }


        .bgimg {
            background-image: url('images/food.jpg');
            height: 100vh;
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            position: relative;
            top: 0;
        }

        body {
            margin: 0;
            padding: 0;

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

        .wrapper {
            max-width: 600px;
            width: 100%;
            background: #fff;
            margin: auto;
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
            padding: 30px;
            position: relative;
            top: 20vh;
        }

        .wrapper .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: rgb(182, 30, 30);
            text-transform: uppercase;
            text-align: center;
        }

        .wrapper .form {
            width: 100%;
        }

        .wrapper .form .inputfield {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .wrapper .form .inputfield label {
            width: 200px;
            color: black;
            margin-right: 10px;
            font-size: 14px;
        }

        .wrapper .form .inputfield .input,
        .wrapper .form .inputfield .textarea {
            width: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .wrapper .form .inputfield .btn {
            width: 100%;
            padding: 8px 10px;
            font-size: 15px;
            border: 0px;
            background: rgb(182, 30, 86);
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
            outline: none;
        }

        .wrapper .form .inputfield .btn:hover {
            background: rgb(172, 182, 30);
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
                <li><a href=" ">ABOUT US</a></li>
                <li><a href="">SERVICES</a> </li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
    </div>

    <div class="bgimg">
        <center>
            <form method="POST" action="registration_db.php">
                <div class="wrapper">
                    <div class="title">
                        Didi's FoodS </div>
                    <div class="form">

                        <div class="inputfield">
                            <label>Name</label>
                            <input type="text" name="name" class="input" required>
                        </div>
                        <div class="inputfield">
                            <label>Email Address</label>
                            <input type="text" name="email" class="input" required>
                        </div>
                        <div class="inputfield">
                            <label>Mobile Number</label>
                            <input type="text" name="mno" class="input" required>
                        </div>
                        <div class="inputfield">
                            <label>Password</label>
                            <input type="Password" name="pass" class="input" required>
                        </div>
                        <div class="inputfield">
                            <label>Confirm Password</label>
                            <input type="Password" name="cpass" class="input" required>
                        </div>
                        <div class="inputfield terms">
                            <label class="check">
                                <input type="checkbox" required>
                                <span class="checkmark"></span>
                            </label>
                            <p>Agreed with above details</p>
                        </div>
                        <div class="inputfield">
                            <input type="submit" name="sub" value="Register" class="btn">
                        </div>
                    </div>


        </center>

        </form>
    </div>
    <div class="footer">
    </div>

</body>

</html>>