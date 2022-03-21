<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>elibrary</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/login.css" />
  <link href="js/main.js" />
 
</head>

<body>

  <header>

    <nav>
      <ul>

        <li style="flex-shrink:2;">English <img src="icons/translate.png" alt=""></li>

        <li style="flex-shrink:2;">
          <h4>اليمن YER <img src="icons/yemen.png" alt=""></h4>
        </li>
        <li style="flex-shrink:1.9;"><a> سياسة الخصوصية</a><img src="icons/privacy.png" alt="xxx"></li>
        <li style="flex-shrink:2;"><a>المساعدة </a><img src="icons/help.png" alt=""></li>
        <li style="flex-shrink:2;"><a>اتصل بنا</a><img src="icons/privacy.png" alt=""> </li>
        <li style="flex-shrink:2;"><a>من نحن</a><img src="icons/track.png" alt=""></li>
        <li style="flex-shrink:2;"><a href="../index.html"> الرئيسية</a><img src="icons/star.png" alt=""></li>


        <li style="flex-shrink:1.8;" id="loginbt"> أدخل الحساب او سجل الدخول
          <img src="icons/user.png" alt="">
        </li>
      </ul>

    </nav>


    <div id="humb_icon" onclick="togglemobile(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul class="mobile">

        <li>English <img src="icons/translate.png" alt=""></li>


        <li>
          <h4>اليمن YER <img src="icons/yemen.png" alt=""></h4>
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


  </header>
  <!--    login popupp     --->
  <div id="login" class="login">
    <h1>تسجيل الدخول</h1>
    <form>
      <input type="text" placeholder="البريد الالكتروني او رقم الجوال">
      <input type="text" placeholder="كلمة السر">
      <button>تسجيل الدخول</button>

    </form>
    <h1>?ليس لديك حساب </h1>
    <a href="../pages/signup.html"><button>إنشاء حساب جديد</button></a>
  </div>

  <!--   end login popupp     --->



  <!--      hogo and search         --->
  <img src="" alt="">
  <div class="logo">
    <img id="cart" class="basket" src="icons/basket.png" alt="" width="2px" height="2px">
    <input id="search" type="search" placeholder="البحث">
    <img src="icons/home.png" alt="">
  </div>
  <div id="cart-count">0</div>

  <!--      hogo and search end      --->
  <!--    cart popupp     --->
 
  <!--   end cart popupp     --->
    <!-- Slideshow container -->



    <!-- Slideshow container  end -->

    <!-- main -->
    <div class="main">
        <div class="card-content">
            <div class="books" id="books">
                


          
    <div class="book">
        <img onclick="callImage(this);" src="books/book2.webp" alt="" height="250rem" width="180rem">
        <div class="booktype">
          <h1 class="search_key">كتاب الكتروني</h1>
          <img src="icons/logo.png" alt="" height="50rem">
        </div>
        <p>كبرياء وهو كتاب الكتروني</p>
        <h4>17.9<span style="font-size:0.8rem;">ر.س</span></h4>
        <img src="icons/star.png" alt="" height="30rem">
  
          <!--  basket =====================-->
  
        <img onclick="basket_counter()" src="icons/basket2.png"
         alt="" height="35rem" style="background-color: rgb(247, 12, 12);
         border-radius: 50%;padding:.2rem;"
         >
        <img src="icons/close.png" alt="" height="30rem">
  
      </div>



      <div class="book">
        <img onclick="callImage(this);" src="books/book8.jpeg" alt="" height="250rem" width="180rem">
        <div class="booktype">
          <h1 class="search_key">كتاب الكتروني</h1>
          <img src="icons/logo.png" alt="" height="50rem">
        </div>
        <p>كبرياء وهو كتاب الكتروني</p>
        <h4>17.9<span style="font-size:0.8rem;">ر.س</span></h4>
        <img src="icons/star.png" alt="" height="30rem">
  
          <!--  basket =====================-->
  
        <img onclick="basket_counter()" src="icons/basket2.png"
         alt="" height="35rem" style="background-color: rgb(247, 12, 12);
         border-radius: 50%;padding:.2rem;"
         >
        <img src="icons/close.png" alt="" height="30rem">
  
      </div>






      <div class="book">
        <img onclick="callImage(this);" src="books/book10.jpeg" alt="" height="250rem" width="180rem">
        <div class="booktype">
          <h1 class="search_key">كتاب الكتروني</h1>
          <img src="icons/logo.png" alt="" height="50rem">
        </div>
        <p>كبرياء وهو كتاب الكتروني</p>
        <h4>17.9<span style="font-size:0.8rem;">ر.س</span></h4>
        <img src="icons/star.png" alt="" height="30rem">
  
          <!--  basket =====================-->
  
        <img onclick="basket_counter()" src="icons/basket2.png"
         alt="" height="35rem" style="background-color: rgb(247, 12, 12);
         border-radius: 50%;padding:.2rem;"
         >
        <img src="icons/close.png" alt="" height="30rem">
  
      </div>






      <div class="book">
        <img onclick="callImage(this);" src="books/book5.jpeg" alt="" height="250rem" width="180rem">
        <div class="booktype">
          <h1 class="search_key">كتاب الكتروني</h1>
          <img src="icons/logo.png" alt="" height="50rem">
        </div>
        <p>كبرياء وهو كتاب الكتروني</p>
        <h4>17.9<span style="font-size:0.8rem;">ر.س</span></h4>
        <img src="icons/star.png" alt="" height="30rem">
  
          <!--  basket =====================-->
  
        <img onclick="basket_counter()" src="icons/basket2.png"
         alt="" height="35rem" style="background-color: rgb(247, 12, 12);
         border-radius: 50%;padding:.2rem;"
         >
        <img src="icons/close.png" alt="" height="30rem">
  
      </div>







      <div class="book">
        <img onclick="callImage(this);" src="books/book6.jpeg" alt="" height="250rem" width="180rem">
        <div class="booktype">
          <h1 class="search_key">كتاب الكتروني</h1>
          <img src="icons/logo.png" alt="" height="50rem">
        </div>
        <p>كبرياء وهو كتاب الكتروني</p>
        <h4>17.9<span style="font-size:0.8rem;">ر.س</span></h4>
        <img src="icons/star.png" alt="" height="30rem">
  
          <!--  basket =====================-->
  
        <img onclick="basket_counter()" src="icons/basket2.png"
         alt="" height="35rem" style="background-color: rgb(247, 12, 12);
         border-radius: 50%;padding:.2rem;"
         >
        <img src="icons/close.png" alt="" height="30rem">
  
      </div>







      
    <div class="book">
        <img onclick="callImage(this);" src="books/book4.jpeg" alt="" height="250rem" width="180rem">
        <div class="booktype">
          <h1 class="search_key">كتاب الكتروني</h1>
          <img src="icons/logo.png" alt="" height="50rem">
        </div>
        <p>كبرياء وهو كتاب الكتروني</p>
        <h4>17.9<span style="font-size:0.8rem;">ر.س</span></h4>
        <img src="icons/star.png" alt="" height="30rem">
  
          <!--  basket =====================-->
  
        <img onclick="basket_counter()" src="icons/basket2.png"
         alt="" height="35rem" style="background-color: rgb(247, 12, 12);
         border-radius: 50%;padding:.2rem;"
         >
        <img src="icons/close.png" alt="" height="30rem">
  
      </div>


            </div>
        </div>



        <div class="category">
            <div>
                <ul>
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="index.html">الكتب العربية</a></li>
                    <li><a href="index.html">كتب إلكترونية</a></li>
                </ul>
            </div>


            <div class="cat-title">
                <h2>كتب الكترونية</h2>
                <img src="icons/logo.png" alt="">
            </div>
            <div class="cat-result">
                <h1>تصفية النتائج</h1>
                <div>علامة تجارية</div>
                <div>السعر</div>
                <div>صيغة الكتاب</div>
            </div>


        </div>



    </div>
    <!-- main end-->



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