<?php
  session_start();
    
if(isset($_SESSION['id'])){

}else{
  
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles/style.css">
    <!-- <link rel="stylesheet" href="./botui/build/botui.min.css" />
    <link rel="stylesheet" href="./botui/build/botui-theme-default.css" />
    <link rel="stylesheet" href="styles/botui.css"> -->
    <title>PerTut Official</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <style>
       .logoname{
        display:block;
  }
  .logoimage{
        display:none;
  }

      @media only screen and (max-width: 600px){
 .logoname{
        display:none;
  }
  .logoimage{
        display:block;
  }
}


iframe{
    position: absolute;
    bottom: 0px;
    right: 0px;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow: auto;
  }
    
    </style>
  </head>
  <body>

    <div class="container-fluid position-relative ">
        <div class="row mainrow front d-flex flex-row">
            <div class="col-12">
                   <?php
                          include "navbar.php";
                    ?>
            </div>
            <div class="col-12 frontrow overflow-hidden">
                <div class="row h-100 d-flex flex-column-reverse flex-sm-row justify-content-center " >
                    <div class="col-sm-5 d-flex align-items-center" >
                        <div class="row d-flex" style="flex-direction: row;">
                            <div class="col-12 col-sm-10 d-flex flex-column text-center text-sm-start" style="padding: 0px 20px;margin-bottom: 15%;">
                                <!-- <h1 class="heading" style="color:#ffa737;">
PerTut                                </h1> -->
<div class="d-flex">
<h1 style="color:#ffb224;" class="typed-text heading"></h1><h1 class="cursor heading">&nbsp;</h1>
</div>
                                <h4 class="text-white"> Think | Research | Explore | Implement </h4>
                                <p class="pt-3 text-white" style="color:#ffa737;">

                                </p>
                                <div class="row mt-5">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="button text-white fs-5 d-flex justify-content-center align-items-center" style="background-color: #ffa737;border-radius: 100px;height: 130%; width: 40% ;"><a class="text-decoration-none text-white" href="whoweare.php">KNOW MORE</a></div>
                                        <div data-toggle="modal" data-target="#modalLoginForm" onclick="openContactUS()" class="pop button text-white fs-5 d-flex justify-content-center align-items-center" style="background-color: rgb(84 110 237);border-radius: 100px;height: 130%; width: 40% ;">CONTACT US</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-10 p-0 m-0">
                                <div class="row d-flex justify-content-evenly m-0 w-100">
                                  <div class="col-lg-4 col-6 text-center count">
                                    <div>
                                      <h1 id="student" class=" display-4 fw-500 count-up text-yellow" data-from="0" data-to="34" data-time="2000"></h1>
                                    </div>
                                    <h5 style="width: 182px; margin-left: auto; margin-right: auto;" class="text-white">Students Associated With Us</h5>
                                  </div>
                                  <div class="col-lg-4 col-6 text-center count">
                                    <div>
                                      <h1 id="teacher" class=" count2 display-4 fw-500 text-yellow" data-from="0" data-to="22" data-time="2000"></h1>
                                    </div>
                                    <h5 style="width: 182px; margin-left: auto; margin-right: auto;"  class="text-white">Teachers Associated With Us</h3>
                                  </div>
                                </div>
                              
                            </div>
                        </div>

                       
  

                          
                          
                                
                          
                             
                           
            

                          <!-- src='https://my.spline.design/pertutoriginal-39d285e9aea8c81a4f47059d837787e2/'  -->
                          <!-- src='https://my.spline.design/pertutcopy-3e2e64796df983d3476d0a8a4a6d6e70/' -->

                    </div>
                    <div class="col-12 col-sm-6 text-center d-sm-inline-block position-relative" style="min-height:450px;z-index:0;">
                      <div style="position: absolute; width: 100%; height: 100%; z-index: 10;" onclick="stop(event)"></div>
                      <iframe 
                          src='https://my.spline.design/pertutmodified-a3749f66c075d53193571961098a8093/'
                          frameborder='0' 
                          width='100%' 
                          height='100%' 
                          style="min-height:450px; pointer-events: none;">
                      </iframe>
                  </div>

                  <script>
                      function stop(e) {
                          console.log("Click intercepted on overlay");
                          e.preventDefault();
                          e.stopPropagation();
                          return false;
                      }
                  </script>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-12 m-0 p-0 " style="background-color: rgba(0, 0, 0, 0.2) ">

<!-- Remove the container if you want to extend the Footer to full width. -->

                <footer class="bg-light text-center text-white">
                          <!-- Grid container -->
                          <div class="container-fluid d-flex flex-column-reverse flex-sm-row justify-content-between  p-4 pb-0">
                              <div class="text-center text-dark p-3">
                                  © 2022 Copyright:
                                  <a class="text-dark" href="https://pertutofficial.com/">Pertut Official</a>
                                </div>
                            <!-- Section: Social media -->
                            <section class="mb-4">
                              <!-- Facebook -->
                              <a
                              class="btn btn-primary btn-floating m-1"
                              style="background-color: #3b5998 !important;"
                              href="https://www.facebook.com/profile.php?id=100086204502865"
                              role="button" target="_blank"
                              ><i class="fab fa-facebook-f"></i
                              ></a>
                              
                              <!-- Twitter -->
                              <a
                              class="btn btn-primary btn-floating m-1"
                              style="background-color: #55acee !important;"
                              href="https://twitter.com/pertut_official"
                              role="button" target="_blank"
                              ><i class="fab fa-twitter"></i
                              ></a>
                              
                              <!-- Google -->
                              <a
                              class="btn btn-primary btn-floating m-1"
                              style="background-color: #dd4b39 !important;"
                              href="https://mail.google.com/mail/?view=cm&fs=1&to=pertutofficial@gmail.com"
                              role="button" target="_blank"
                              ><i class="fab fa-google"></i
                              ></a>
                              
                              <!-- Instagram -->
                              <a
                              class="btn btn-primary btn-floating m-1"
                              style="background-color: #ac2bac !important;"
                              href="https://www.instagram.com/pertut_official/"
                              role="button" target="_blank"
                              ><i class="fab fa-instagram"></i
                              ></a>
                              
                              <!-- Linkedin -->
                              <!-- <a
                              class="btn btn-primary btn-floating m-1"
                              style="background-color: #0082ca !important;"
                              href="#!"
                              role="button" target="_blank"
                              ><i class="fab fa-linkedin-in"></i
                              ></a> -->
                              <!-- Github -->
                              <!-- <a
                              class="btn btn-primary btn-floating m-1"
                              style="background-color: #333333 !important;"
                              href="#!"
                              role="button" target="_blank"
                              ><i class="fab fa-github"></i
                              ></a> -->
                              </section>
                            <!-- Section: Social media -->
                            <div style="color:transparent;">
                            </div>
                          </div>
                          <!-- Grid container -->
                        
                          <!-- Copyright -->
                          
                          <!-- Copyright -->
                        </footer>    
  <!-- End of .container -->
            </div>
        </div>

        
    </div>
    
 




    <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
          <div class="modal-dialog modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content">
              <!--Header-->
              <div style="background-color: #ffa737 !important;"  class="modal-header">
                <p class="heading lead font-weight-bold">PERTUT</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
                </button>
              </div>

              <!--Body-->
              <div class="modal-body">
                <!-- <div class="text-center">
                  <i style="color: #ffa737 !important;" class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                  <img src="images2/handshake-32.gif" style="width:100%;" alt="">
                  <p>Thanks for contacting us</p>
                </div> -->
                <div class="d-flex justify-content-center align-items-center" style="color: #ffa737;">
                  <h3> Registration Successfull</h3>
                </div>
              </div>

              <!--Footer-->
              <div class="modal-footer justify-content-center" >
                <a style="color: white !important;background-color: #ffa737 !important;" type="button" class="btn  waves-effect" data-dismiss="modal">thanks</a>
              </div>
            </div>
            <!--/.Content-->
          </div>
    </div>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">CONTACT US</h4>
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input disabled value="pertutofficial@gmail.com" type="email" id="defaultForm-email" class="form-control">
                
                </div>

                <div class="md-form mb-4">
                  <!-- <i class="fas fa-lock prefix grey-text"></i>
                  <input type="text" id="defaultForm-pass" class="form-control validate"> -->
                  <section class="mb-4 text-center">
                    <!-- Facebook -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #3b5998 !important;"
                    href="https://www.facebook.com/profile.php?id=100086204502865"
                    role="button" target="_blank"
                    ><i class="fab fa-facebook-f"></i
                    ></a>
                    
                    <!-- Twitter -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #55acee !important;"
                    href="https://twitter.com/pertut_official"
                    role="button" target="_blank"
                    ><i class="fab fa-twitter"></i
                    ></a>
                    
                    <!-- Google -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #dd4b39 !important;"
                    href="https://mail.google.com/mail/?view=cm&fs=1&to=pertutofficial@gmail.com"
                    role="button" target="_blank"
                    ><i class="fab fa-google"></i
                    ></a>
                    
                    <!-- Instagram -->
                    <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #ac2bac !important;"
                    href="https://www.instagram.com/pertut_official/"
                    role="button" target="_blank"
                    ><i class="fab fa-instagram"></i
                    ></a>
                    
                    <!-- Linkedin -->
                    <!-- <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #0082ca !important;"
                    href="#!"
                    role="button" target="_blank"
                    ><i class="fab fa-linkedin-in"></i
                    ></a> -->
                    <!-- Github -->
                    <!-- <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #333333 !important;"
                    href="#!"
                    role="button" target="_blank"
                    ><i class="fab fa-github"></i
                    ></a> -->
                    </section>
                
                </div>

              </div>
            </div>
          </div>
    </div>

   

<?php
include "signupform.php";
?>

      </div>
    </div>
  </div>
</div>



<?php

// include "bot.php";


?>
</div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/vue/latest/vue.min.js"></script> -->
    <!-- <script src="./botui/build/botui.js"></script>
    <script src="scripts/boui.js"></script> -->
    <script src="https://kit.fontawesome.com/3785baa6f3.js" crossorigin="anonymous"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6330499637898912e96b2b00/1gdq9ut95';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <script type="text/javascript">



// document.querySelector('iframe').addEventListener('touchmove', (e) => {
//     e.stopPropagation();
// }, { passive: false });


var myModal,invoiceModal1,invoiceModal2,invoiceModal3;
$(document).ready(function () {
    myModal = new bootstrap.Modal(document.getElementById('registermodal'), {
  keyboard: true
});

Modal1 = new bootstrap.Modal(document.getElementById('modalLoginForm'), {
  keyboard: true
});
// invoiceModal2 = new bootstrap.Modal(document.getElementById('invoicemodal2'), {
//   keyboard: true
// });
// invoiceModal3 = new bootstrap.Modal(document.getElementById('invoicemodal3'), {
//   keyboard: true
// });

// myModal.show();
// invoiceModal1.show();
// invoiceModal2.show();
// invoiceModal3.show();

});

function closeRegisterModal(){
  myModal.hide();
}
function openContactUS(){
  Modal1.show();
}


const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["Home Tutor", "Personal Tutor", "Skilled Tutor"];
const typingDelay = 100;
const erasingDelay = 100;
const newTextDelay = 1500; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
  	setTimeout(erase, newTextDelay);
  }
}

function erase() {
	if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});





function fetchsitedata(){

$.ajax({
    url:"fetch_and_submit_sitedata.php",
    method:"POST",
    dataType: "json",
    data: {
        sitedata: "sitedata",
    },
    success:function(data)
    {
        res = data.res; 

        student = Number(res.student);
        teacher = Number(res.teacher);

        student += 58;
        teacher += 30;

        document.querySelector('#student').innerText = student;
        document.querySelector('#teacher').innerText = teacher;
    }
});  
}

fetchsitedata();

  </script>
  <script src="scripts/signupform.js"></script>
  </body>
</html>
