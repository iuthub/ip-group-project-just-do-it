<!DOCTYPE html>
<html>
<head>
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img class="logo" src="{{URL::asset('/images/logo.jpg')}}" alt="">
        </div>
        <div class="items">
            <a href = "menu" class="flexItems">MENU</a>
            <a href = "signIn" class="flexItems">SIGN IN</a>
            <a href = "about"  class="flexItems">About us</a>
        </div>
    </div>
    <div class="body">
        <img class="wallpaperMain" src="{{URL::asset('/images/wallpaperMain.jpg')}}" alt="">
        <div class="text">
            <h1 class="moto">Just Delicious Food</h1>
            <p class="bodyItem"><a  href="book">Book Table</a></p>
            <p  class="bodyItem"><a href="delivery">Delivery service</a></p>
        </div>
    </div>
    
    <div class="footer">
        <div class="footerItems">   
            <p class="info">Location</p>
            <p class="infoItem">9, Ziyolilar str., M.Ulugbek district, Tashkent city, 100170</p>
        </div> 
        <div class="footerItems">   
            <p class="info">Contact us</p>
            <p class="infoItem">+998 71 289-99-99</p>
            <p class="item">+998 71 000-00-00</p>
        </div> 

        <div class="footerItems">   
            <p class="info">Email</p>
            <p class="infoItem">info@inha.uz</p>
        </div> 
    </div>
</body>
</html>