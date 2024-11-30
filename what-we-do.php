<?php

  session_start();
    


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PERTUT OFFICIAL | What We Do</title> 

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/whatwedo.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <style>
       .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        width: 350px !important;
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }


      .buycard,img{
        width:80%;
      }

      img{
  border-radius: 20px;
}

@media only screen and (max-width: 600px){
  .swiper-slide{
    width:200px !important;
  }
  .buycard,img{
        width:100%;
  }
}

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }











.context {
    width: 100%;
    position: absolute;
    top:50vh;
    
}

.context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
}


.area{
    background: red;  
    background:linear-gradient(to right, rgba(57, 106, 252,0.8), rgb(41, 72, 255,0.8));
    width: 100%;
    /* height:100vh; */
    position:relative;
   
}


.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    /* z-index: 1; */
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-2000px) rotate(720deg);
        opacity: .7;
        border-radius: 50%;
    }

}

.swiper-slide{
    background: antiquewhite;
    border-radius: 20px;
}

.swiper-slide .card-text{
    font-size: 1rem !important;
}
.buycard:hover,.swiper-slide:hover{
  transform:scale(1.05);
}
.buycard:hover{
  box-shadow: 3px 3px 10px #7c6666; 
  cursor : pointer;
}
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



.buycard{
        background : whitesmoke !important;
      }


      .modal-content{
        height: fit-content;
      }
    </style>
  </head>
  <body>

  <!-- <div class="area" >
         
    </div > -->

      <!-- <div class="front position-absolute">
      </div> -->
    <div class="container-fluid m-0 mb-5 p-0  position-relative">
  
        <div class="row mainrow m-0 p-0 front position-relative d-flex flex-row">
            <div class="col-12 position-relative">
              <?php
                include "navbar.php";

                ?>
                    <h1 class="mt-0 mt-sm-5 text-white text-center heading1">
                      What We Do
                    </h1>
                  </div>
        </div>
      

        <div class="col-12 area py-5">
        <ul class="circles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                    </ul>
        <div  class="row d-flex  my-sm-0 flex-column-reverse flex-lg-row justify-content-lg-around align-items-lg-center" style="min-height: 20vh;width: 80vw;margin-left: auto;margin-right: auto;">
          <div   class="col-lg-5 d-flex flex-column justify-content-center align-items-center " >
            <div class="p-3 buycard" style="background: antiquewhite;border-radius:20px;height:80%;" >
                <h1  style="width: 100%; border-bottom: 2px solid #ffa737; font-size: 35px;line-height:1.4; font-weight:800;font-family: 'Source Sans Pro';color:purple">
                  PERTUT ONLINE
                  </h1>
                <p   style="font-size: 20px;line-height:1.4;font-family: 'Source Sans Pro'; color:#5d5f64; text-align: justify;">
                Get one-on-one Tutorship By Our Professional Tutor on Your Desktop or Mobile. <br>
                                    They will teach you throughout your academics.
                                    And Doubt solving sessions.                                                                  </p>
                <div class="col-12 mt-3 d-flex justify-content-between" style="font-size:1.2rem;">
                  <div class="pop button text-white py-1 px-3 d-flex justify-content-center align-items-center" style="background-color: #ffa737;border-radius: 50px;"><a class="text-decoration-none text-white" onclick="openRegisterModal()" id="joinonline" href="<?php echo isset($_SESSION["id"])?"dashboard/dashboard.php":'#!';  ?>">JOIN</a>
                  </div>
                </div>
          
            </div>
          </div>
          <div class="col-12 col-lg-5 text-center position-relative h-50 my-3" >
                  <img src="images/studentstudying.jpeg" style="height:80%;
                    object-fit:cover; " alt="">
          </div>
        </div>

        <div class="col-12">
          <div  class="row d-flex my-sm-0 flex-column-reverse flex-lg-row-reverse justify-content-lg-around align-items-lg-center" style="min-height: 20vh;width: 80vw;margin-left: auto;margin-right: auto;">
            <div   class="col-lg-5 h-50 d-flex flex-column justify-content-center align-items-center ">
            <div class="p-3 buycard" style="background: antiquewhite;border-radius:20px;height:80%;" >
                  <h1  style="width: 100%; border-bottom: 2px solid #ffa737; font-size: 35px;line-height:1.4; font-weight:800;font-family: 'Source Sans Pro';color:purple">
                    PERTUT OFFLINE
                    </h1>
                  <p   style="font-size: 20px;line-height:1.4;font-family: 'Source Sans Pro'; color:#5d5f64; text-align: justify;">
                  Get one-on-one Tutorship By Our Professional Tutor  at Your Home. <br>
                                    They will come  your home to teach you EVERYDAY (except Sunday) .
                                    Take <strong>3 days </strong>trial.                                                                    </p>
                  <div class="col-12 mt-3 d-flex justify-content-between" style="font-size:1.2rem;">
                    <div class="pop button text-white py-1 px-3 d-flex justify-content-center align-items-center" style="background-color: #ffa737;border-radius: 50px;"><a class="text-decoration-none text-white" onclick="openRegisterModal()" id="joinoffline" href="<?php echo isset($_SESSION["id"])?"dashboard/dashboard.php":'#!';  ?>">JOIN</a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center fw-bold fs-4 " style="color:purple;"></div>
                    
                  </div>
            
              </div>
            </div>
            <div class="col-12 col-lg-5 text-center position-relative h-50 my-3" >
                    <img src="images/teacher.jpeg" style="height:80%;
                      object-fit:cover; " alt="">
            </div>
          </div>
        </div>




<div class="col-12 my-5 pertutreviews" style="height:145px;">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="card swiper-slide">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text mx-auto" > <strong>"</strong> this is a very helpful platform for us.
I have never seen this type of platform who are taking step to solves our problems. 
thank you to give us this service. 😇😇<strong>"</strong></p>
                    <!-- <p class="card-text mx-auto" ><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text mx-auto" > <strong>"</strong>It's amazing I have never ever seen this type of site where we can get that much facility in very low price. <strong>"</strong></p>
                    <!-- <p class="card-text mx-auto" ><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text mx-auto" > <strong>"</strong>I really love this platform it's really wonderful thank you to give us this type of opportunity <strong>"</strong></p>
                    <!-- <p class="card-text mx-auto" ><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text mx-auto" > <strong>"</strong>I am  from aligarh I am part of this family. 
I really think  I am lucky person who get this type of teachers. <strong>"</strong></p>
                    <!-- <p class="card-text mx-auto" ><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text mx-auto" > <strong>"</strong>me pertut ka offline student  ho mare sir bhut  hi accche hai  bo samjane pr bahut focus rkhtw hai. <strong>"</strong></p>
                    <!-- <p class="card-text mx-auto" ><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text mx-auto" > <strong>"</strong>Bo bolte hai ki agr ek baar topic smj aagya tau kbhi bhuloge nahi fr exam me answer yaad nahi हो tau khud bhi likh skto ho . <strong>"</strong></p>
                    <!-- <p class="card-text mx-auto" ><small class="text-muted">Last updated 3 mins ago</small></p> -->
                  </div>
                </div>
            </div>
          </div>
</div>





</div>


<div class="col-12">
<div  class="row d-flex my-sm-0 flex-column-reverse flex-lg-row justify-content-lg-around align-items-lg-center" style="background:white;min-height: 20vh;width: 80vw;margin-left: auto;margin-right: auto;">
<div   class="col-lg-5 h-50 d-flex flex-column justify-content-center align-items-center ">
  <div class="  " style="border-radius:20px;height:80%;" >
        <h1  style="width: 100%; border-bottom: 2px solid #ffa737; font-size: 35px;line-height:1.4; font-weight:800;font-family: 'Source Sans Pro';color:">
          PERTUT Platform Test
          </h1>
        <p   style="font-size: 20px;line-height:1.4;font-family: 'Source Sans Pro'; color:#5d5f64; text-align: justify;">
        You can track your progress (FREE) and Tutor will get to know  your performance here.<br>
                                   Weekly test and reward will be announce.                                                          </p>
      
   
    </div>
  </div>
  <div class="col-12 col-lg-5 text-center position-relative h-50 my-3" >
          <img src="images/exam.png" style="height:80%;
            object-fit:cover; " alt="">
  </div>
</div>
                                                      </div>
</div>



</div>



  <div class="row">
<?php 

include "footer.php";

?>
  </div>




  <?php
include "signupform.php";
?>
  
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/vue/latest/vue.min.js"></script> -->
    <!-- <script src="./botui/build/botui.js"></script>
    <script src="scripts/boui.js"></script> -->
    <script src="https://kit.fontawesome.com/3785baa6f3.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>



  
  <script src="scripts/whatwedo.js"></script>
  
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

<script>


var myModal,invoiceModal1,invoiceModal2,invoiceModal3;
$(document).ready(function () {
    myModal = new bootstrap.Modal(document.getElementById('registermodal'), {
  keyboard: true
});
// invoiceModal1 = new bootstrap.Modal(document.getElementById('invoicemodal1'), {
//   keyboard: true
// });
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
function openRegisterModal(){
  myModal.show();
}

function saveEmail(){
  email = $("#saveemail").val().trim();
  
if(email == "")
{
  return;
}

  $.ajax({
    url: "fetch_and_submit_sitedata.php",
    method:"POST",
    dataType: "json",
    data:{
        saveEmail: "email",
        email:email
    },
    success:function(data){
            if(data.error == '1')
            {

              alert("Something went wrong");
              
            }else{
              
              alert("Thanks ");
            }
            $("#saveemail").val("");
    }
  });
}
</script>
<script src="scripts/signupform.js"></script>

  </body>

</html>