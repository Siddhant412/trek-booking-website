<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment-devkund-prod</title>
    <link rel="stylesheet" href="/Mini Project/home.css">

    <style> 
		body {
  				background-image: url("https://image.freepik.com/free-photo/greenery-product-background_53876-89517.jpg");
  				background-repeat: no-repeat;
 			    background-color: #cccccc;
 			    background-size: cover;
 				background-attachment: fixed;
			 }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        html, body {
        min-height: 100%;
        }
        body, div, form, input, select, textarea, p { 
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: #666;
        line-height: 22px;
        }
        h1 {
        position: absolute;
        margin: 0;
        line-height: 55px;
        font-size: 55px;
        color: #fff;
        z-index: 2;
        }
        .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 20px;
        }
        form {
        width: 50%;
        padding: 20px;
        border-radius: 6px;
        background: #fff;
        box-shadow: 0 0 30px 0 #a37547; 
        }
        .banner {
        position: relative;
        height: 230px;
        background-image: url("http://wallpapercave.com/wp/wp1903471.jpg");  
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        }
        .banner::after {
        content: "";
        background-color: rgba(0, 0, 0, 0.4); 
        position: absolute;
        width: 100%;
        height: 100%;
        }
        input, select, textarea {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }
        input {
        width: calc(100% - 10px);
        padding: 5px;
        }
        select {
        width: 100%;
        padding: 7px 0;
        background: transparent;
        }
        textarea {
        width: calc(100% - 12px);
        padding: 5px;
        }
        .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
        color: #a37547;
        }
        .item input:hover, .item select:hover, .item textarea:hover {
        border: 1px solid transparent;
        box-shadow: 0 0 6px 0 #a37547;
        color: #a37547;
        }
        .item {
        position: relative;
        margin: 10px 0;
        }
        input[type=radio], input[type=checkbox]  {
        display: none;
        }
        label.radio {
        position: relative;
        display: inline-block;
        margin: 5px 20px 15px 0;
        cursor: pointer;
        }
        .question span {
        margin-left: 30px;
        }
        label.radio:before {
        content: "";
        position: absolute;
        left: 0;
        width: 17px;
        height: 17px;
        border-radius: 50%;
        border: 2px solid #ccc;
        }
        input[type=radio]:checked + label:before, label.radio:hover:before {
        border: 2px solid #a37547;
        }
        label.radio:after {
        content: "";
        position: absolute;
        top: 6px;
        left: 5px;
        width: 8px;
        height: 4px;
        border: 3px solid #a37547;
        border-top: none;
        border-right: none;
        transform: rotate(-45deg);
        opacity: 0;
        }
        input[type=radio]:checked + label:after {
        opacity: 1;
        }
        .btn-block {
        margin-top: 10px;
        text-align: center;
        }
        button {
        width: 150px;
        padding: 10px;
        border: none;
        border-radius: 5px; 
        background: #6b4724;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
        }
        button:hover {
        box-shadow: 0 0 18px 0 #3d2914;
        }
        @media (min-width: 568px) {
        .name-item, .city-item {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        }
        .name-item input, .city-item input {
        width: calc(50% - 20px);
        }
        .city-item select {
        width: calc(50% - 8px);
        }
        }
    </style>
</head>
<body>
<header>
        <h2 style="font-size:xx-large;"> Checkout </h2>
    </header>

    <div class="topnavcol">

	<nav class="topnavl">
			<a href="Home.php">HOME</a>
			<a href="/Mini Project/Home.php/#trek">TREKS</a> 
			<a href="products.html">PRODUCTS</a>
	</nav>		

	<nav class="topnavr">
			
      <a href="\Mini Project\myprofile.php">MY PROFILE</a>
      <a href="signout.php">SIGN OUT</a> 
    
	</nav>

</div>

    <div class="testbox">
        <form action="/Mini Project/devkundprod2checkout_2.php">
          <div class="banner">
            <h1>Please fill payment details</h1>
          </div>
          <div class="item">
            <p>Card Holder Name</p>
            <div class="name-item">
              <input type="text" name="name" required/>
            </div>
          </div>
          <div class="item">
            <p>Expiry Date</p>
            <input type="date" name="expdate" required/>
          </div>
          <div class="item">
            <p>CVV</p>
            <input type="password" name="cvv" required minlength='3' maxlength='3'/>
          </div>
          
            <div class="btn-block">
              <button type="submit" href="/Mini Project/devkundprod2checkout_2.php">Buy</button>
            </div>
        </form>
        </div>
</body>
</html>