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
      width: 300px;
      color: black;
      margin-right: 10px;
      font-size: 20px bold;
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
  </style>

</head>

<body>
  <div class="bgimg">
    <center>
      <form method="POST" action="stock_db.php">
        <div class="wrapper">
          <div class="title">
            Didi's FoodS </div>
          <div class="form">

            <div class="inputfield">
              <label> Food Name</label><br>
              <input type="text" name="food_name" class="input" required>
            </div>
            <div class="inputfield">
              <label>quantity</label>
              <input type="text" name="quantity" class="input" required>
            </div>
            <div class="inputfield">
              <label>Price</label>
              <input type="text" name="price" class="input" required>
            </div>


            <div class="inputfield">
              <input type="submit" name="sub" value="Add items" class="btn">
            </div>
          </div>


    </center>

    </form>
  </div>

</body>

</html>>