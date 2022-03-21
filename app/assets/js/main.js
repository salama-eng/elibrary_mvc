
function togglemobile(menu)
{
   menu.classList.toggle('open');
}



/***********slider**************** */




//**********login******* */
const container =document.getElementById('login');
let popup=document.getElementById('loginbt');
popup.addEventListener("click",()=>{
   container.style.visibility='visible';

});
document.getElementById('loginclose').onclick=function()
{ container.style.visibility='hidden';}


/*******************CART ************ */
/**********CART COUNTER ************** */
let counter_basket=0;

function basket_count1()
{
 counter_basket+=1;
 localStorage.setItem('cart-counter',counter_basket);
var v =localStorage.getItem('cart-counter');
var d_counter=document.getElementById('cart-count');
d_counter.innerHTML=v;

}

/*************serch****************** */
const search_key=document.getElementsByClassName('search_key');
const search_input=document.getElementById('search');
const books=document.getElementsByClassName('books');
for(let i=0;i<search_key.length;i++)
{

   search_input.addEventListener('input',function(){
      search_input.value=search_input.value.trim().slice(0,1);
      let check=search_key[i].innerHTML.trim().slice(0,1);
      if(search_input.value !=check)
      {
         books[i].style.display="none";
      
      }
      else {
         books[i].style.display="block";
         books[i].style.display="flex";
      

      }
      
      
      });
      
}
/********* slider ********** */







const callImage = img => {
   document.getElementById("imageView").setAttribute("src", img.getAttribute("src"));
   document.getElementById('popUP').style.display = "block";
}
const hideModule = id => document.getElementById(id).style.display = "none";

const bookprev=document.getElementById('book-prev');
const booknext=document.getElementById('book-next');


bookprev.addEventListener("click",()=>{
   document.getElementById("imageView").src="books/book2-1.jpeg";

});


booknext.addEventListener("click",()=>{
   document.getElementById("imageView").src="books/book2-2.jpeg";

});


var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display ="block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}


function togglestyle()
{
   let s=document.getElementsByTagName('link')[0];
   if(s.getAttribute('href')=='css/style.css'){
      s.setAttribute('href','css/styleEN.css')
   }
   else{
      s.setAttribute('href','css/style.css');
   }
}


/************ Timer ************ */
const counttime=()=>
{
   const upperdata=new Date('jan 29,2022 00:00:00:00');
   const currentdate=new Date().getTime();
   const diffDate =upperdata-currentdate;
   const second=1000;
   const minit=second*60;
   const hours=minit*60;
   const days=hours*24;

   const remindays=Math.floor(diffDate/days);
   const reminhours=Math.floor((diffDate%days)/hours);
   const reminsec=Math.floor((diffDate%hours)/minit);
   const reminsecond=Math.floor((diffDate%minit)/second);
   var d=document.getElementById('days');
  // var h=document.getElementById('hours');

   //var m=document.getElementById('min');

  // var s=document.getElementById('sec');

   d.style.color="red";
   d.style.fontSize="3rem";
   d.style.position="relative";
   d.style.top="5px";
d.innerHTML=remindays+"أيام";
//h.innerHTML=reminhours;
//m.innerHTML=reminsec;
//s.innerHTML=reminsecond;

}

setInterval(counttime,1000);


//**********popup book************** *





/****************TImer end **************** */


/************************ */