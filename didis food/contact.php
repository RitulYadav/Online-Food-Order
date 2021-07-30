<html>

<head>
    <title>registration form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

        h3 {
            font-size: 35px;
        }

        a {
            text-decoration: none;
            margin-top: 6vh;

        }

        i {
            margin-top: 6vh;
        }
    </style>

</head>

<body>
    <div class="bgimg">
        <center>
            <form method="POST" action="registration_db.php">
                <div class="wrapper">
                    <div class="title">
                        Contact US </div>
                    <div class="form">


                        <a href="">
                            <i class="fa fa-phone" style="font-size:50px"></i>
                            <h3>7923967366<h3>
                        </a>
                        <a href="https://www.facebook.com/">
                            <i class="fa fa-facebook" style="font-size:24px"></i><br>
                            <h3>https://www.facebook.com/<h3>
                        </a>
                        <a href="https://www.instagram.com/">
                            <i class="fa fa-instagram" style="font-size:24px"></i><br>
                            <h3>https://www.instagram.com/
                                <h3>
                        </a>
                        <a href="">
                            <i class="far fa-facebook"></i><br>
                            <h3>
                                <h3>
                        </a>


                    </div>


        </center>

        </form>
    </div>

</body>

</html>>