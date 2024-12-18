<?php
  session_start();
    
// if(isset($_SESSION['id']) and $_SESSION['role'] == '1'){

// }else{
//   header("Location:dashboard.php");
// }

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
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Pertut Users</h3>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Profile</th>
                                            <th class="border-top-0">Username</th>
                                            <th class="border-top-0">Full Name</th>
                                            <th class="border-top-0">Phone Number</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">City</th>
                                            <th class="border-top-0">Password</th>
                                            <th class="border-top-0">Profile Size</th>
                                            <th class="border-top-0">Joined</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_body">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
                        $.ajax({
                            url: '../fetch_and_submit_sitedata.php', // point to server-side controller method
                            dataType: 'json', // what to expect back from the server
                            data: {
                                fetchpertutusers : 'users'
                            },
                            type: 'POST',
                            success: function (response) {
                                // display success response from the server
                                if(response.error == 0)
                                {
                                    $('#table_body').html(response.res);
                                    console.log("done");
                                }else{
                                    console.log("errrsd");
                                }


                            },
                            error: function (response) {
                                console.log("Couldnt fetch users"); // display error response from the server
                            }
                        });
    </script>
</body>

</html>