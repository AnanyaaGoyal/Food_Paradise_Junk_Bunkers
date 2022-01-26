//Get the button:
mybutton = document.getElementById("myBtn");
    
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
 // When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


        function readmore() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("readmore");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
          }
        }
        
        function knowmore(){
            var periodt= document.getElementById("period");
            var moreInfo= document.getElementById("more_Info");
            var btncaption= document.getElementById("buttonId");
  
            if(periodt.style.display === "none") {
                periodt.style.display= "inline";
                btncaption.innerHTML= "read more";
                moreInfo.style.display="none";
            } else{
                periodt.style.display="none";
                btncaption.innerHTML="read less";
                moreInfo.style.display="inline";
            }
        }
        