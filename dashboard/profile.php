<?php
  session_start();
    
if(isset($_SESSION['id'])){

}else{
  header("Location:../index.php");
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>PerTut Official | Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
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
.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
  animation: 1s linear infinite progress-bar-stripes;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
    animation: none;
  }
}

   </style>
</head>

<body>
   <!-- ============================================================== -->
   <!-- Preloader - style you can find in spinners.css -->
   <!-- ============================================================== -->
   <div class="preloader">
       <div class="lds-ripple">
           <div class="lds-pos"></div>
           <div class="lds-pos"></div>
       </div>
   </div>
   <!-- ============================================================== -->
   <!-- Main wrapper - style you can find in pages.scss -->
   <!-- ============================================================== -->
   <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
       data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
       <!-- ============================================================== -->
       <!-- Topbar header - style you can find in pages.scss -->
       <!-- ============================================================== -->
       <header class="topbar" data-navbarbg="skin5">
           <nav class="navbar top-navbar navbar-expand-md navbar-dark">
               <div class="navbar-header" data-logobg="skin6">
                   <!-- ============================================================== -->
                   <!-- Logo -->
                   <!-- ============================================================== -->
                   <a class="navbar-brand" href="../index.php">
                       <!-- Logo icon -->
                       <b class="logo-icon logoimage">
                           <!-- Dark Logo icon -->
                           <img src="../images/pertutlogosvgtransaprent.svg" style="width:75px;" alt="homepage" />
                       </b>
                       <!--End Logo icon -->
                       <!-- Logo text -->
                       <span class="logo-text logoname">
                           <!-- dark Logo text -->
                           <img src="../images/logo1t.png" style="width:75%;"  alt="homepage" />
                       </span>
                   </a>
                   <!-- ============================================================== -->
                   <!-- End Logo -->
                   <!-- ============================================================== -->
                   <!-- ============================================================== -->
                   <!-- toggle and nav items -->
                   <!-- ============================================================== -->
                   <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                       href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
               </div>
               <?php
                    include "sidelogo.php";
                    ?>
           </nav>
       </header>
       <!-- ============================================================== -->
       <!-- End Topbar header -->
       <!-- ============================================================== -->
       <!-- ============================================================== -->
       <!-- Left Sidebar - style you can find in sidebar.scss  -->
       <!-- ============================================================== -->
       <aside class="left-sidebar" data-sidebarbg="skin6">
           <!-- Sidebar scroll-->
           <div class="scroll-sidebar">
               <!-- Sidebar navigation-->
               <?php
               include "dashboardnavbar.php";
               ?>
               <!-- End Sidebar navigation -->
           </div>
           <!-- End Sidebar scroll-->
       </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="col-12">
            <div class="progress" style="height:5px;display:none;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-12  mx-auto my-2" id="msg">
                    </div>
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> 
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a class="position-relative" onclick="openImageModal()"><img src="../userlogo/<?php echo $_SESSION["dp"]; ?>"
                                                class="thumb-lg img-circle" alt="img" id="profiledp" >
                                                <i class="fas fa-camera" style="position:absolute;color:black;top:128%;right:62%;transform: translate(364%,50%);"></i>
                                            </a>
                                            <input type="file" class="d-none" id="getimage" accept=".jpg, .jpeg, .png, .gif" onchange="javascript:console.log('dfdfddfdf')">
                                        <h4 class="text-white mt-2" id="showfullname"><?php echo $_SESSION["fullname"]; ?></h4>
                                        <h5 class="text-white mt-2" id="showemail"><?php echo $_SESSION["email"]; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Full Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input id="fullname" type="text" placeholder="Johnathan Doe"
                                                class="form-control p-0 border-0" value="<?php echo $_SESSION["fullname"]; ?>"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input id="email" type="email" placeholder="johnathan@admin.com"
                                                class="form-control p-0 border-0" name="example-email" value="<?php echo $_SESSION["email"]; ?>"
                                                >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Phone No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input id="phone" type="text" placeholder="123 456 7890"
                                                class="form-control p-0 border-0" value="<?php echo $_SESSION["phone"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Password</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input id="password" type="text" placeholder="Password" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                   
                                    <!-- <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Message</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea rows="5" class="form-control p-0 border-0"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-sm-12">Select Country</label>

                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none p-0 border-0 form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="button" onclick="updateProfileData(event)">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
          include "dashboardfooter.php";
          ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>


    <script>
        
        function fetchImage(){
            $.ajax({
                            url: '../fetch_and_submit_sitedata.php', // point to server-side controller method
                            dataType: 'json', // what to expect back from the server
                            data: {
                                fetchProfilePic : 'pic'
                            },
                            type: 'POST',
                            success: function (response) {

                                // display success response from the server
                                if(response.error == 0)
                                {
                                    
                                    $("#profiledp").prop("src","../userlogo/"+response.url);
                                    $("#sidelogo").prop("src","../userlogo/"+response.url);
                                    
                                    console.log("done im");
                                }else{
                                    console.log("errrsd im");
                                }
                                
                            },
                            error: function (response) {
                                console.log("Couldnt update data"); // display error response from the server
                            }
                        });
        }

        function openImageModal(){
            $('#getimage').click();
        }

        function updateProfileData(e){
                        e.preventDefault();

                        fullname = $("#fullname").val();
                        email = $("#email").val();
                        $.ajax({
                            url: '../fetch_and_submit_sitedata.php', // point to server-side controller method
                            dataType: 'json', // what to expect back from the server
                            data: {
                                updateProfileData : 'profiledata',
                                fullname:fullname,
                                email:email,
                                phone:$("#phone").val(),
                                password: $("#password").val()
                            },
                            type: 'POST',
                            success: function (response) {

                                // display success response from the server
                                if(response.error == 0)
                                {

                                    $("#msg").html(`<span class="text-center text-success w-100 d-inline-block" style="font-size:1.5rem;text-align:center;">Profile  Updated successfully!</span>`);

                                    
                                    $("#showfullname").text(fullname);
                                    $("#showemail").text(email);
                                    
                                    console.log("done");
                                }else{
                                    $("#msg").html(`<span class="text-danger text-success w-100 d-inline-block" style="font-size:1.5rem;text-align:center;">Password doesn't match!</span>`);
                                    console.log("errrsd");
                                }
                                $("#password").val("");
                                
                            },
                            error: function (response) {
                                console.log("Couldnt update data"); // display error response from the server
                            }
                        });
                    }



                $(document).ready(function (e) {
                    
                    $('#getimage').on('change', function () {
                        console.log("files",$('#getimage').prop('files'));
                        var file_data = $('#getimage').prop('files')[0];
                        var form_data = new FormData();
                        form_data.append('file', file_data);
                        console.time("start here");
                        
                        $(".progress").show();
                        $("#msg").html("");
                        // $(".progress-bar").animate({width:'90%'},4000);
                        console.time();


                        $.ajax({
                            xhr: function() {
                            var xhr = new window.XMLHttpRequest();

                            xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                console.log(percentComplete);
                                
                                if (percentComplete > 90) {
                                    console.log("greater than 90",percentComplete);
                                }else{
                                    $(".progress-bar").css('width', percentComplete+'%');  
                                }

                            }
                            }, false);

                            return xhr;
                        },
                            url: '../uploadimage.php', // point to server-side controller method
                            dataType: 'json', // what to expect back from the server
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: form_data,
                            type: 'POST',
                            success: function (response) {
                                console.timeEnd();
                                // display success response from the server
                                if(response.error == 0)
                                {
                                    $(".progress-bar").css('width', '90%');  

                                    changeImage(response.url,response.size);

                                }else{
                                    $("#msg").html(`<span class="text-center text-danger w-100" style="font-size:1.5rem;">Profile Pic Couldnt Updated!</span>`);

                                    $(".progress").hide();
                                    $(".progress-bar").css('width', '0%');  
                                }



                            },
                            error: function (response) {
                                console.log("Couldnt upload photo"); // display error response from the server
                                $("#msg").html(`<span class="text-center text-danger w-100" style="font-size:1.5rem;">Profile Pic Couldnt Updated!</span>`);
                                

                                    $(".progress").hide();
                                    $(".progress-bar").css('width', '0%');  

                            }
                        });
                    });
                    
                    function changeImage(url,size){
                        $.ajax({
                            url: '../fetch_and_submit_sitedata.php', // point to server-side controller method
                            dataType: 'json', // what to expect back from the server
                            data: {
                                changeImage : 'image',
                                url: url,
                                size: size
                            },
                            type: 'POST',
                            success: function (response) {
                                // display success response from the server
                                if(response.error == 0)
                                {
                                    $(".progress-bar").css('width', '100%');  
                                    $("#profiledp").prop("src","../userlogo/"+url);
                                    $("#sidelogo").prop("src","../userlogo/"+url);
                                    $("#msg").html(`<span class="text-center text-success w-100" style="font-size:1.5rem;">Profile Pic Updated successfully!</span>`);


                                    console.log("done");
                                }else{
                                    $("#msg").html(`<span class="text-center text-danger w-100" style="font-size:1.5rem;">Profile Pic Couldnt Updated!</span>`);

                                    console.log("errrsd");
                                }
                                    $(".progress").hide();
                                    $(".progress-bar").css('width', '0%');  

                            },
                            error: function (response) {
                                console.log("Couldnt upload photo"); // display error response from the server
                            }
                        });
                    }              


                });

                fetchImage();
    </script>
</body>

</html>