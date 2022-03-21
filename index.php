<?php
require_once 'app/system/app.php';
$app=new App();
?>


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

        <li onclick="togglestyle()" style="flex-shrink:2;">English <img src="app/assets/icons/translate.png" alt=""></li>

        <li style="flex-shrink:2;">
          <h4>اليمن YER <img src="app/assets/icons/yemen.png" alt=""></h4>
        </li>
        <li style="flex-shrink:1.9;"><a> سياسة الخصوصية</a><img src="app/assets/icons/privacy.png" alt="xxx"></li>
        <li style="flex-shrink:2;"><a>المساعدة </a><img src="app/assets/icons/help.png" alt=""></li>
        <li style="flex-shrink:2;"><a>اتصل بنا</a><img src="app/assets/icons/privacy.png" alt=""> </li>
        <li style="flex-shrink:2;"><a>من نحن</a><img src="app/assets/icons/track.png" alt=""></li>
        <li style="flex-shrink:2;"><a>الرئيسية</a><img src="app/assets/icons/star.png" alt=""></li>


        <li style="flex-shrink:1.8;" id="loginbt"> أدخل الحساب او سجل الدخول
          <img src="app/assets/icons/user.png" alt="">
        </li>
      </ul>

    </nav>


    <div id="humb_icon" onclick="togglemobile(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul style="color:oldlace;" class="mobile">

        <li>English <img src="app/assets/icons/translate.png" alt=""></li>


        <li>
          <h4>اليمن YER <img src="app/assets/icons/yemen.png" alt=""></h4>
        </li>

        <li><a> سياسة الخصوصية<img src="app/assets/icons/privacy.png" alt=""></a></li>
        <li><a>المساعدة <img src="app/assets/icons/help.png" alt=""></a></li>
        <li><a>اتصل بنا<img src="app/assets/icons/privacy.png" alt=""></a> </li>
        <li><a>من نحن<img src="app/assets/icons/track.png" alt=""></a></li>
        <li><a>الرئيسية<img src="app/assets/icons/star.png" alt=""></a></li>
        <li >أدخل الحساب او سجل الدخول
          <img src="icons/user.png" alt="">
        </li>
      </ul>
    </div>


  </header>
  <!--    login popupp     --->
  <div id="login" class="login">
    <button id="loginclose">X</button>
    <h1>تسجيل الدخول</h1>
    <form>
      <input type="text" placeholder="البريد الالكتروني او رقم الجوال">
      <input type="text" placeholder="كلمة السر">
      <button>تسجيل الدخول</button>
    </form>
    <h1>?ليس لديك حساب </h1>
    <a href="../pages/signup.php"><button>إنشاء حساب جديد</button></a>
  </div>

  <!--   end login popupp     --->



  <!--      logo and search         --->
  <img src="" alt="">
  <div class="logo">
    <a href="views/basket.php"><img id="cart" class="basket" src="app/assets/icons/basket.png" alt="" width="2px" height="2px"></a>
    <input id="search" type="search" placeholder="البحث">
    <img id="site-logo" src="app/assets/icons/home.png" alt="">
  </div>
  <div id="cart-count">0</div>

  <!--      hogo and search end      --->



  <!--    cart popupp     --->
  
  <!--   end cart popupp     --->


  <!-- Slideshow container -->

  <div class="slider">
    <img class="mySlides" src="app/assets/adds/home4.jpg">
    <img class="mySlides" src="app/assets/adds/home3.jpg">
    <img class="mySlides" src="app/assets/adds/home2.jpg">
    <img class="mySlides" src="app/assets/adds/home1.jpg">
  </div>
  

  <!-- Slideshow container  end -->




  <!-- departements icons container   -->
  <a href="category.php">
<h1 class="h1main">تصفح حسب القسم</h1></a>
<a href="category.php">
<div class="dep-icon">
  <div class="dep-icon1"><img src="/icon1.png" alt=""></div>
  <div class="dep-icon1"><img src="app/assets/icons/icon2.png" alt=""></div>
  <div class="dep-icon1"><img src="app/assets/icons/icon3.png" alt=""></div>
  <div class="dep-icon1"><img src="app/assets/icons/icon4.png" alt=""></div>
  <div class="dep-icon1"><img src="app/assets/icons/icon5.png" alt=""></div>
  <div class="dep-icon1"><img src="app/assets/icons/icon6.png" alt=""></div>
  <div class="dep-icon1"><img src="app/assets/icons/icon7.png" alt=""></div>
  
</div></a>




  <!-- departements icons container  end -->

 <!-- ADDS container   -->


 <div class="adds">
   <div class="add"><img src="app/assets/adds/add1.png" alt=""></div>
   <div class="add"><img src="app/assets/adds/add2.png" alt=""></div>
   <div class="add"><img src="app/assets/adds/add3.png" alt=""></div>
   <div class="add"><img src="app/assets/adds/add4.png" alt=""></div>
   <div class="add"><img src="app/assets/adds/add5.png" alt="" width="100%"></div>
  

   
 </div>
 
 
 
 
   <!-- ADDS container  -->
 
  <!-- Timer -->
  <h1 class="h1main" >العروض الحالية</h1>
  <div id="timer" class="timer">

    <div class="book">
      <div id="days"></div>
      <img src="app/assets/books/book10.jpeg" alt="" height="250rem" width="180rem">
      <div class="booktype">
        <h1 class="search_key">كتاب الكتروني</h1>
        <img src="app/assets/icons/logo.png" alt="" height="50rem">
      </div>
      <p>كبرياء وهو كتاب الكتروني</p>
      <h4>17.9<span style="font-size:0.8rem;">ر.س</span></h4>
      <img src="app/assets/icons/star.png" alt="" height="30rem">

        <!--  basket =====================-->

      <img onclick="basket_count1()" src="app/assets/icons/basket2.png"
       alt="" height="35rem" style="background-color: rgb(247, 12, 12);
       border-radius: 50%;padding:.2rem;"
       >
      <img src="app/assets/icons/close.png" alt="" height="30rem">
      
    </div>




   <!--<div id="hours"></div>:
    <div id="min"></div>:
    <div id="sec"></div>--> 

  </div>
  <!-- main end-->


  <!--  books-->
  <h1 class="h1main" >الكتب الدينية</h1>
  <div class="books" id="books">

  









    
   




   








  







    
   
   
  </div>







  
  <!--  books end-->

  <!--  books popUpp-->
 
  <!--  footer     -->
  <footer>



    <div class="footer">

      <ul>
        <li>
          <h1>عن جرير</h1>
        </li>
        <li>من نحن</li>
        <li>الحوكمة</li>
        <li>علاقات المستثمرين والتقارير</li>
        <li>الاستادامة</li>
        <li>الاخبار</li>
        <li>الاخبار </li>
        <li>فرص العمل</li>

      </ul>

    </div>

    <div class="footer">

      <ul>
        <li>
          <h1>خدمات جرير</h1>
        </li>
        <li>خدمة تقسيط المشتريات</li>
        <li>خدمة مابعد البيع</li>
        <li>خدمة الحماية الشاملة</li>
        <li>خدمة اجهزة ابل</li>
        <li>بطاقة خصم جرير</li>
        <li>بطاقة جرير لهدايا </li>


      </ul>

    </div>


    <div class="footer">

      <ul>
        <li>
          <h1>خدمة العملاء </h1>
        </li>
        <li>مبيعات الشركات</li>
        <li>الاسالة المتكررة</li>
        <li>دليل التسوق والمطبوعات</li>
        <li>مواقع المعارض</li>
        <li>سياسة الضمان</li>
        <li>سياسة الاسترجاع والاستبدال </li>
        <li>اتصل بنا</li>

      </ul>

    </div>


    <div class="footer">

      <ul>
        <li>
          <h1>انظم الى نشرتنا البريدية </h1>
        </li>
        <div class="footer-input">
          <li><input type="text" value=""></li>
          <button>اشتراك</button>
        </div>
        <li><h1>تواصل معنا </h1>
          <img src="icons/snap.png" alt="">
          <img src="icons/tictok.png" alt="">
          <img src="icons/whats.png" alt="">
          <img src="icons/twitter.png" alt="">
          <img src="icons/insta.png" alt="">
          <img src="icons/gmail.png" alt="">

        </li>
      </ul>

    </div>




  </footer>
  <div class="footer-last">
  <div><span>بيانات الخصوصية</span><span>شروطالخدمة</span>
    <h4>جميع الحقوق محفوضة لمكتبة جرير</h4></div> 
   <div><img src="icons/stc.png" alt="">
    <img src="icons/apple.png" alt="">
    <img src="icons/visa.png" alt=""></div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>