<DOCTYPE! html>

    <head>
        <title>food order</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }

            .bgimage {
                background: url(images/userhome.jpg);
                background-size: 100% 100%;
                width: 100%;
                height: auto;
            }

            .menu {
                width: 100%;
                height: 70px;
                background-color: palevioletred;
                top: 0;
                position: sticky;
                z-index: 5;
            }

            .leftmenu {
                width: 25%;
                line-height: 70px;
                float: left;
            }

            .leftmenu h4 {
                padding-left: 70px;
                font-weight: bold;
                color: white;
                font-size: 28px;
                font-family: 'Montserrat', sans-serif;
            }

            .rightmenu {
                width: 75%;
                height: 70px;
                float: right;
            }

            .rightmenu ul {
                margin-left: 720px;
            }

            .rightmenu ul li {
                font-family: 'Montserrat', sans-serif;
                display: inline-block;
                list-style: none;
                font-size: 15px;
                color: white;
                font-weight: bold;
                line-height: 70px;
                margin-left: 40px;
                text-transform: uppercase;
            }

            .rightmenu ul li:hover {
                color: orange;
            }


            .footer {
                position: relative;
                bottom: 0px;
                width: 100%;
                height: 50px;
                background-color: palevioletred;
                margin-bottom: 0px;

            }

            .row:after {
                content: "";
                display: table;
                clear: both;


            }

            .column {
                position: relative;
                float: left;
                width: 15%;
                padding: 3vh;
                text-align: center;
                border: 2px solid white;
                margin: 2vh 1.8vh;
                background-color: #ddd;
                border-radius: 15px;
                box-shadow: 5px 5px 10px grey;


            }

            .image {
                width: 100%;
            }

            .content {
                margin-top: 2vh;
                text-align: left;
                width: 100%;
                font-family: arial;
            }

            .content .food-title {
                color: black;
                border: none;
                background: none;
                font-size: 24px;
                font-weight: bolder;
            }

            .content .food-qty {
                color: black;
                border: none;
                background: none;
                font-size: 32px;
                font-weight: bolder;
            }

            .rating {
                margin-top: 2vh;
            }

            .column .btn {
                padding: 1.5vh 8vh;
                margin: 2vh;
                font-size: 26px;
                border-radius: 5px;
                background-color: #0fcfcf;
                box-shadow: 5px 5px 5px grey;
            }

            .column .btn:hover {
                padding: 1.5vh 10vh;

            }
        </style>
    </head>

    <body>
        <div class="bgimage">
            <div class="menu">
                <div class="leftmenu">
                    <h4>DIDIS FOOD </h4>
                </div>

                <div class="rightmenu">
                    <ul>
                        <a href="userhome.php">
                            <li> HOME </li>
                        </a>

                        <a href="logout.php">
                            <li> LOGOUT </li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="row">
                <!-- SAMOSA -->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/u2.jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Samosa" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="10" readonly>

                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!-- END SAMOSA -->

                <!-- BURGER -->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/f1.jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Burger" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="35" readonly>
                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!-- END BURGER -->

                <!--pizza-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/f2 (1).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Pizza" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="59" readonly>
                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end pizza-->

                <!--sandwich-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/f2 (2).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Sandwich" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="59" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end sandwich-->

                <!--tea-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/f2 (3).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Tea" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="15" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end tea-->

                <!--noodles-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/f3 (1).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Noodles" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="60" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end noodles-->



                <!--noodles-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/images.jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Jalebi" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="20" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end noodles-->
                <!--noodles-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/images (1).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Full Plate" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="120" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end noodles-->
                <!--noodles-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/images (2).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Fries" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="60" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end noodles-->
                <!--noodles-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/images (3).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Fried Rice" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="60" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end noodles-->
                <!--noodles-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/images (4).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="Ice-Cream" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="60" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end noodles-->
                <!--noodles-->
                <form action="placeorder.php" method="post">
                    <div class="column">
                        <div class="image">
                            <img src="images/download (1).jpg" alt="image" width="100%" height="20%">
                        </div>
                        <div class="content">
                            <input type="text" name="food_name" class="food-title" value="idlie-sambhar" readonly>

                            <i class="fas fa-rupee-sign"></i> <input type="number" name="price" class="food-qty" value="60" readonly>


                            <div class="rating">
                                <i class="far fa-star" style="font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style=" font-size:24px; margin-right:1vh"></i>
                                <i class="far fa-star" style='font-size:24px; margin-right:1vh'></i>
                            </div>

                        </div>
                        <input class="btn" type="submit" value="order" name="sub">
                    </div>
                </form>
                <!--end noodles-->
            </div>
        </div>

        <div class="footer">
        </div>


    </body>

    </html>