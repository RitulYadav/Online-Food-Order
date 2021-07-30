<?php
include('connection.php');
?>



<DOCTYPE! html>

    <head>
        <title>review</title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }

            .bgimage {

                background: url(images/uo1.jpg);
                background-size: 100% 100%;
                width: 100%;
                height: 110vh;
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






            body {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            table {
                position: relative;
                max-height: 100vh;
                border-collapse: collapse;
                width: 80%;
                height: 100px;
                margin: 20px auto;
                border: 1px solid #bdc3c7;
                box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
                margin-bottom: 50px;
                background-color: white;

            }

            tr {
                transition: all 0.2s ease-in;
                cursor: pointer;
                height: 15vh;
            }

            th,
            td {
                padding: 12px;
                text-align: center;
                font-size: 16px;
                border-bottom: 1px solid #ddd;
            }

            tr .BGN {
                /* color: rgb(230, 1, 1); */
                color: black;
            }

            #header {
                background-color: palevioletred;
                color: white;
            }

            h1 {
                font-weight: 600;
                text-align: center;
                color: white;
                margin-top: 50px;
                padding: 10px 0px;
            }

            tr:hover {
                background-color: #f5f5f5;
                transform: scale(1.02);
                box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
            }

            .nameblock {
                width: 25%;
            }


            .footer {
                bottom: 0px;
                width: 100%;
                height: 49px;
                background-color: palevioletred;
                margin-bottom: 0px
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
                        <a href="adminhome.php">
                            <li> HOME </li>
                        </a>

                        <a href="logout.php">
                            <li> LOGOUT </li>
                        </a>
                    </ul>
                </div>
            </div>

            <h1> View Review </h1>
            <table>
                <tr id="header">
                    <th class="nameblock">customer name</th>
                    <th>Comments</th>
                </tr>

                <?php
                $query = "select * from comments";
                $result = mysqli_query($conn, $query);
                // $data = mysqli_fetch_assoc($result);
                while ($data = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                        <td class="nameblock"><?= $data['name']; ?></td>
                        <td><?= $data['comment']; ?></td>

                    </tr>
                <?php
                }


                ?>



            </table>

        </div>
        <div class="footer">
        </div>

    </body>

    </html>