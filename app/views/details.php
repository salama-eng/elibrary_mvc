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
        <li style="flex-shrink:2;"><a href="index.html">الرئيسية</a><img src="icons/star.png" alt=""></li>


        <li style="flex-shrink:1.8;" id="loginbt"> أدخل الحساب او سجل الدخول
          <img src="icons/user.png" alt="">
        </li>
      </ul>

    </nav>



    <div id="humb_icon" onclick="togglemobile(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul style="color:oldlace;" class="mobile">

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
    <button id="loginclose">X</button>
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



  <!--      logo and search         --->
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

  <div class="category-details">

    <ul>
      <li><a href="index.html">الرئيسية</a></li>
      <li><a href="index.html">الكتب العربية</a></li>
      <li><a href="index.html">كتب إلكترونية</a></li>
      <li><a href="index.html">لانك الله كتاب إلكتروني</a></li>
    </ul>

  </div>
  <div class="main-details">



    <div class="details1">
      <img onclick="callImage(this);" src="books/book2.webp" alt="" width="250px">
      <div style="border: olive solid 1px; width: 4rem;
 display: flex;justify-content: space-around;border-radius: 0.5rem;
"> <img src="books/book2.webp" alt="" width="40px"></div>
    </div>

  <!--  books popUpp-->
  <div id="popUP">
    <div class="header">
      <button onclick="hideModule('popUP');">X</button>
      <button id="book-prev">></button>
      <button id="book-next">
        <</button>

    </div>
    <img id="imageView">
  </div>

    <div class="details2">
      <h1>لانك الله (كتب إلكتروني)</h1>
      <h4>عرض المزيد</h4>
      <p class="price">12.99رس
      </p>
      <div style="text-align: left;">
        <p>وحدة البيع</p>
        <h4>رقم الصنف 545454 رقم المنتج 4</h4>
      </div>
      <p style="margin-bottom: 0.9rem;"> الصيغ المتوفرة</p>
      <div class="details-select">
      

        <span><input type="checkbox" name="book"> كتاب الكتروني </span> 
         <p class="price">12.99R.S</p>

       
        <span><input type="checkbox" name="book"> كتاب مطبوع </span> <p class="price">17.99R.S</p>
      </div>



    </div>


    <div class="details3">
      <div class="details3-1">
        <div class="details3-p">
          <p><em>ملاحضة</em> سيتم إافة هذا الكتاب
            الالكتروني الى مكتبتك</p>
          <h4>إقراء المزيد</h4>
        </div>

      </div>

      <div class="details3-2"> 
        <select name="1" id="">1</select>
       <a href="pages/basket.html"><button class="addtocart"> تحديث الى السلة </button></a> 
       
      </div>




      <div class="details3-3">
        <ul>
          
         
          <li>اصلي ومضمون<img src="icons/star.png" alt="" width="30px"></li>
          <li>شحن سريع ومجاني<img src="icons/track.png" alt="" width="30px"> </li> 
          <li>تسوق امن<img src="icons/privacy.png" alt="" width="30px"> </li>
        </ul>
      </div>

      <div class="details3-4">
        <div>مشاركة<img src="icons/twitter.png" width="20px" alt=""></div>
        <div>المفضلة<img src="icons/insta.png" width="20px" alt=""></div>
        <div>مقارنة<img src="icons/snap.png" width="20px" alt=""></div>

      </div>

    </div>

  </div>

  <!--المواصفات -->
  <p class="details-title">كتاب يتحدث عن بعض اسماء الله الحسنى وكيف نعيشها في حياتنا
    حرص المؤلف ان يكون الكتاب مناسبا لمن هم متوسطي الثقافة ويكون مناسبا
    للمحتاج والمريض والسليم
  </p>
  <h1 style="text-align: right;padding: 1rem;">المواصفات</h1>
  <table class="details-table">
    <tr>
      <td>JB54521</td>
      <th>رقم الصنف</th>
    </tr>
    <tr>
      <td>4</td>
      <th>رقم المنتج</th>
    </tr>
    <tr>
      <td>علي جابر الفيفي</td>
      <th>المؤلف</th>
    </tr>
    <tr>
      <td>دار الحضارة للنشر والتوزيع</td>
      <th>الناشر</th>
    </tr>
    <tr>
      <td>2016</td>
      <th>تاريخ النشر </th>
    </tr>
    <tr>
      <td>ُEbook</td>
      <th>صيغة الكتاب</th>
    </tr>
    <tr>
      <td>182</td>
      <th>عدد الصفحات</th>
    </tr>
    <tr>
      <td>0.0100</td>
      <th>وزن الشحن </th>
    </tr>
    <tr>
      <td>epub</td>
      <th>صيغة الملف</th>
    </tr>
    <tr>
      <td>عربي</td>
      <th>اللغة</th>
    </tr>


  </table>

  <!-- مراجعات العملاء -->
  <div class="client">
    <div class="client-header">
      <h2>مراجعات العملاء</h2>
      <button>+ اكتب مراجعتك</button>
    </div>
    <div class="client-content">
      <div>
        <h3>Good</h3>
        <p>من قبل ريم</p>
        <p>2021/11/16</p>
      </div>
      <p>good</p>

      <!--  end1   -->
      <div>
        <h3>Good</h3>
        <p>من قبل ريم</p>
        <p>2021/11/16</p>
      </div>
      <p>good</p>

      <!--  end1   -->
      <div>
        <h3>Good</h3>
        <p>من قبل ريم</p>
        <p>2021/11/16</p>
      </div>
      <p>good</p>

      <!--  end1   -->


    </div>


  </div>

<div class="similler-products">
   <h1>منتجات مشابهه</h1>


  <div><img src="books/book10.jpeg" width="150px" alt="">
  <h2> لأني عبدك </h2>
  <p class="price">15رس</p>
  <p>شامل الضريبة</p>
  </div>


  <div><img src="books/book11.jpeg" width="150px" alt="">
    <h2>وضيفة الدين في الحياة</h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>


    
  <div><img src="books/book12.jpeg" width="150px" alt="">
    <h2> اصول الدين </h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>


    
  <div><img src="books/book13.jpeg" width="150px" alt="">
    <h2>القدس الشريف  </h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>


    
  <div><img src="books/book2.webp" width="150px" alt="">
    <h2> لانك الله </h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>


    
  <div><img src="books/book11.jpeg" width="150px" alt="">
    <h2>وضيفة الدين في الحياة  </h2>
    <p class="price">15رس</p>
    <p>شامل الضريبة</p>
    </div>

</div>
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
        <li>
          <h1>تواصل معنا </h1>
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
      <h4>جميع الحقوق محفوضة لمكتبة جرير</h4>
    </div>
    <div><img src="icons/stc.png" alt="">
      <img src="icons/apple.png" alt="">
      <img src="icons/visa.png" alt="">
    </div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>