// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
document.addEventListener('DOMContentLoaded', () => {
    "use strict";
    /**
     * Preloader
     */
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
        setTimeout(() => {
          preloader.classList.add('loaded');
        }, 1000);
        setTimeout(() => {
          preloader.remove();
        }, 2000);
      });
    }
    anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
    $(document).ready(function(){
      $('.slider').slick({
          autoplay: true,
          autoplaySpeed: 2500,
          dots: true
      });
  });
  function displayCalendar(month, year){
    var monthNow = new Date().getMonth();
    var yearNow = new Date().getFullYear();;
    var nextMonth = month+1;
    var prevMonth = month-1;
    var day = 0;
    
    if((month == monthNow)&&(year == yearNow)){
        var day = new Date().getDate();
    }
    
    var htmlContent ="";
    var FebNumberOfDays ="";
    var counter = 1;
    var Nameday = 1;
    
    if (month == 1){
        if ( (year%100!=0) && (year%4==0) || (year%400==0)){
            FebNumberOfDays = 29;
            }else{
            FebNumberOfDays = 28;
        }
    }
    
    var monthNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
    var monthNum = ["1","2","3","4","5","6","7","8","9","10","11", "12"];
    var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
    var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]
    var nextDate = new Date(nextMonth +' 1 ,'+year);
    var weekdays = nextDate.getDay();
    var weekdays2 = weekdays
    var numOfDays = dayPerMonth[month];
                                    
    while (weekdays>0){
    htmlContent += "<li style='padding:1 0 0;'></li>";
        weekdays--;
    }
    
    while (counter <= numOfDays){
        
        if (weekdays2 > 6){
            weekdays2 = 0;
            htmlContent += "</ul><ul>";
        }
        if (counter == day){
            htmlContent +="<li class='dayNow'>"+counter+"</li>";
            Nameday = counter;
            }else{
            htmlContent +="<li>"+counter+"</li>";
        }
        weekdays2++;
        counter++;
    }
    
    document.getElementById("monthNow").innerHTML= monthNames[month]+" "+ year ;
    document.getElementById("daysNum").innerHTML= "<ul id="+monthNum[month]+" class="+year+">"+htmlContent+"</ul>";
}


(function() {
    var dateNow = new Date();
    var month = dateNow.getMonth();
    var year = dateNow.getFullYear();
    displayCalendar(month,year)
})(window);


document.getElementById("nextMonth").onclick = function(){
    var idmonth = document.getElementById("daysNum");
    var month = idmonth.getElementsByTagName("ul")[0].id;
    var nextYear = idmonth.getElementsByTagName("ul")[0].className;
    var nextMonth = Number(month);
    if(nextMonth == 12){
        nextMonth = 0;
        nextYear = Number(nextYear) + 1
    }
    displayCalendar(nextMonth,nextYear);
}


document.getElementById("prevMonth").onclick = function(){
    var idmonth = document.getElementById("daysNum");
    var month = idmonth.getElementsByTagName("ul")[0].id;
    var prevYear = idmonth.getElementsByTagName("ul")[0].className;
    var prevMonth = Number(month) - 2;
    if(prevMonth < 0 ){
        prevMonth = 11;    
        prevYear = Number(prevYear) - 1
    }
    displayCalendar(prevMonth,prevYear);
}
function aos_init() {
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    mirror: false
  });
}
window.addEventListener('load', () => {
  aos_init();
});
  });
 