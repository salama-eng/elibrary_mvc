<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>elibrary</title>
  <link rel="stylesheet" href="app/assets/css/style.css" />
  <link rel="stylesheet" href="app/assets/css/login.css" />
  <link href="app/assets/js/main.js" />
 
</head>

<body>

  <header>

    <nav>
      <ul>

        <li style="flex-shrink:2;">English <img src="app/assets/icons/translate.png" alt=""></li>

        <li style="flex-shrink:2;">
          <h4>اليمن YER <img src="app/assets/icons/yemen.png" alt=""></h4>
        </li>
        <li style="flex-shrink:1.9;"><a> سياسة الخصوصية</a><img src="app/assets/icons/privacy.png" alt="xxx"></li>
        <li style="flex-shrink:2;"><a>المساعدة </a><img src="app/assets/icons/help.png" alt=""></li>
        <li style="flex-shrink:2;"><a>اتصل بنا</a><img src="app/assets/icons/privacy.png" alt=""> </li>
        <li style="flex-shrink:2;"><a>من نحن</a><img src="app/assets/icons/track.png" alt=""></li>
        <li style="flex-shrink:2;"><a href="/"> الرئيسية</a><img src="app/assets/icons/star.png" alt=""></li>


        <li style="flex-shrink:1.8;" id="loginbt"> أدخل الحساب او سجل الدخول
          <img src="app/assets/icons/user.png" alt="">
        </li>
      </ul>

    </nav>


    <div id="humb_icon" onclick="togglemobile(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul class="mobile">

        <li>English <img src="app/assets/icons/translate.png" alt=""></li>


        <li>
          <h4>اليمن YER <img src="app/assets/icons/yemen.png" alt=""></h4>
        </li>

        <li><a> سياسة الخصوصية<img src="icons/privacy.png" alt=""></a></li>
        <li><a>المساعدة <img src="icons/help.png" alt=""></a></li>
        <li><a>اتصل بنا<img src="icons/privacy.png" alt=""></a> </li>
        <li><a>من نحن<img src="icons/track.png" alt=""></a></li>
        <li><a>الرئيسية<img src="icons/star.png" alt=""></a></li>
        <li>أدخل الحساب او سجل الدخول
          <img src="icons/user.png" alt="">
        </li>
      </ul>
    </div>
  
  <div class="logo" style="background-color:white">
   <a href="basket"><img id="cart" class="basket" src="app/assets/icons/basket.png" alt="" width="2px" height="2px"></a> 
    <input id="search" type="search" placeholder="البحث">
   <a href="/"> <img class="immm"  src="app/assets/icons/logo1.png" alt="" width="100" height="100"></a>
  </div>
  <div id="cart-count">0</div>

  </header>
  <script type="text/javascript" src="app/assets/js/main.js"></script>