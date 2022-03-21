<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>elibrary</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/stepper.css" />
  <link rel="stylesheet" href="../css/login.css" />
  <link href="../js/main.js" />
 

</head>

<body>

  <header>

    <nav>
      <ul>

        <li onclick="togglestyle()" style="flex-shrink:2;">English 
            <img src="../icons/translate.png" alt=""></li>

        <li style="flex-shrink:2;">
          <h4>اليمن YER <img src="../icons/yemen.png" alt=""></h4>
        </li>
        <li style="flex-shrink:1.9;"><a> سياسة الخصوصية</a><img src="../icons/privacy.png" alt="xxx"></li>
        <li style="flex-shrink:2;"><a>المساعدة </a><img src="../icons/help.png" alt=""></li>
        <li style="flex-shrink:2;"><a>اتصل بنا</a><img src="../icons/privacy.png" alt=""> </li>
        <li style="flex-shrink:2;"><a>من نحن</a><img src="../icons/track.png" alt=""></li>
       <li style="flex-shrink:2;"><a href="../index.html"> الرئيسية</a><img src="../icons/star.png" alt=""></li>


        <li style="flex-shrink:1.8;" id="loginbt"> أدخل الحساب او سجل الدخول
          <img src="../icons/user.png" alt="">
        </li>
      </ul>

    </nav>


    <div id="humb_icon" onclick="togglemobile(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul style="color:oldlace;" class="mobile">

        <li>English <img src="../icons/translate.png" alt=""></li>


        <li>
          <h4>اليمن YER <img src="../icons/yemen.png" alt=""></h4>
        </li>

        <li><a> سياسة الخصوصية<img src="../icons/privacy.png" alt=""></a></li>
        <li><a>المساعدة <img src="../icons/help.png" alt=""></a></li>
        <li><a>اتصل بنا<img src="../icons/privacy.png" alt=""></a> </li>
        <li><a>من نحن<img src="../icons/track.png" alt=""></a></li>
        <li><a>الرئيسية<img src="../icons/star.png" alt=""></a></li>
        <li >أدخل الحساب او سجل الدخول
          <img src="../icons/user.png" alt="">
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
    <a href="signup.html"><button>إنشاء حساب جديد</button></a>
  </div>

  <!--   end login popupp     --->


  <!--      logo and search         --->
  <img src="" alt="">
  <div class="logo">
    <a href="#.html"><img id="cart" class="basket" src="../icons/basket.png" alt="" width="2px" height="2px"></a>
    <input id="search" type="search" placeholder="البحث">
    <img id="site-logo" src="../icons/home.png" alt="">
  </div>
  <div id="cart-count">0</div>






    <div class="container">
        <div id="progres" class="progres">
            <div class="circle">1</div>
            <div class="circle">2</div>
            <div class="circle">3</div>
            <div class="circle">4</div>
        </div>

    </div>
   

     <div class="form">
    <div id="form1" class="form1">

    <form>
    <input type="text" placeholder="enter your name">
    <input type="text" placeholder="enter your email addres">
    <input type="text" placeholder="enter your phone number">
     
    </form>
    </div>
    <div id="form2" class="form1">

        <form >
     
            <input type="text" placeholder="enter your country">
            <input type="text" placeholder="enter your current address">
            <input type="text" placeholder="enter your zipcode">
        </form>
        
    </div>

    <div id="form3" class="form1">
   <h3>please choose your payment way</h3>
        <form>
   
      <input type="radio" name="payment" value="paypal" checked> paypal
      <input type="radio" name="payment" value="VISA" > Visa
      <input type="number" placeholder="enter your card number">
    
        </form>
    </div>

    <div id="form4"  class="form1">

        <form>
    
          <h3>GREAT!! WE ARE ABOUT TO DONE </h3>
         <label>Total Price :</label>  <p style="color: red;">745$</p>
         
    
        </form>
    </div>
    
</div> 

        <div class="container-btn">
        <button id="prev-btn" class="btn">prev</button>
        <button id="next-btn" class="btn">next</button>
    </div>
    <script>
  const nextbtn=document.getElementById('next-btn');
  const prevbtn=document.getElementById('prev-btn');
  const progres=document.getElementById('progres');
  const steps=document.querySelectorAll('.circle');/***to return array********/
  const forms=document.querySelectorAll('.form1');
  const form1=document.getElementById('form1');
  const form2=document.getElementById('form2');
  const form3=document.getElementById('form3');
  const form4=document.getElementById('form4');
  let index=-1;
  nextbtn.addEventListener("click",function(){
   index++;

  if(index>steps.length)
  {
   index=steps.length;
  }
steps.forEach((item,i)=>{
  if(i<=index)
  {
   
      item.classList.add('active'); 
      forms.forEach((item,i)=>{
      if(i==index){
        item.classList.add('active-form'); 
        let x=index;
      }
     else if(i==index-1){
        item.classList.remove('active-form'); 
      }
      if(index==3)
      {
        nextbtn.innerText="submit";
        nextbtn.onclick=function()
        {
            location.href="../index.html";
        }
      }
    });
   }
 


});

  });

  prevbtn.addEventListener("click",function(){
   index--;
 
  steps.forEach((item,i)=>{
  if(i>index)
  {
     
      item.classList.remove('active');
   
  }

});

forms.forEach((item,i)=>{
      if(i==index+1)
      {
          item.classList.remove('active-form'); 
      }
      else if(i==index)
      item.classList.add('active-form'); 
     
  });

  });


  

    </script>





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
          <img src="../icons/snap.png" alt="">
          <img src="../icons/tictok.png" alt="">
          <img src="../icons/whats.png" alt="">
          <img src="../icons/twitter.png" alt="">
          <img src="../icons/insta.png" alt="">
          <img src="../icons/gmail.png" alt="">

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