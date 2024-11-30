<?php
                                include "../config.inc.php";

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
.courses-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
}

.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 16px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 220px;
    height: 250px;
    /* margin: 0.5rem; */
    /* margin-inline:auto; */
}

.card h4 {
    margin: 8px 0;
}

.card p {
    margin: 4px 0;
}

.card .primary {
    background-color: #007bff;
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.card-container {
	background-color: ##e1e7ec;
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: #6f7282;
	padding-top: 20px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
}
.card-container h3{
    font-weight:bold;
    color: darkslategray;
}

/* .card-container .pro {
	color: #231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size: 14px;
	font-weight: bold;
	padding: 3px 7px;
	position: absolute;
	top: 30px;
	left: 30px;
} */

.card-container .image {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
}

.rating{
    color : orange;
}

button.primary {
	background-color: #03BFCB;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #231E39;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary.ghost {
	background-color: transparent;
	color: #02899C;
}

.skills {
	background-color: #1F1A36;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #2D2747;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}
#teacher-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns on large screens */
    gap: 20px; /* Space between the cards */
    padding: 20px; /* Padding around the grid */
}

/* For medium screens (e.g., tablets, 2 columns) */
@media (max-width: 1200px) {
    #teacher-container {
        grid-template-columns: repeat(2, 1fr); /* 2 columns */
    }
}

/* For small screens (e.g., mobile, 1 column) */
@media (max-width: 768px) {
    #teacher-container {
        grid-template-columns: 1fr; /* 1 column */
    }
}

/* Optional: Styling for individual teacher cards */
.card-container {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.course-card {
    border: 1px solid #ddd;
    padding: 10px;
    height: 200px;
    margin: 10px 0;
    border-radius: 5px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.course-card h4 {
    margin: 0 0 5px;
}

.course-card p {
    margin: 5px 0;
}

.course-card button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}

.course-card button:hover {
    background-color: #0056b3;
}
.image {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
    width:50px;
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
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Packages</h4>
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
                   <div class="col-12  mx-auto my-2" id="msg"></div>
                        <div class="white-box">
                            
                            <?php

                                $student_id = $_SESSION['id'];

                                $course_query = "
                                SELECT c.*, 
                                    CASE 
                                        WHEN e.student_id IS NOT NULL THEN 1
                                        ELSE 0
                                    END AS is_enrolled,
                                    t.name,
                                    t.profile_picture,
                                    t.gender
                                FROM courses c
                                LEFT JOIN enrollments e 
                                ON c.course_id = e.course_id  AND e.student_id = '".$student_id."' LEFT JOIN teachers t ON c.teacher_id = t.teacher_id 
                                WHERE e.status = 1";
                                
                                $error = 0;
                                $courses = array();
                                try {
                                    $st = $db->prepare($course_query);
                                    $st->execute();
                                    $courses = $st->fetchAll(PDO::FETCH_ASSOC);
                                } catch (Throwable $th) {
                                    $error = 1;
                                }
                            ?>
                   <div class="col-12 px-3 courses">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="page-title" style="border-bottom: 1px solid;font-weight:bold;color:orange;">Courses</h4>
                                    </div>
                                    <div class="col d-flex flex-wrap" style="gap:1rem;">
                                        <?php 
                                        if(empty($courses)){
                                        ?>
                                        <div class="d-flex flex-column align-items-center justify-content-center w-100">
                                            <h3 class="box-title text-center">No Package</h3>
                                            <h3 class="box-title text-center text-info" style="cursor: pointer;" onclick="javascript:window.location.href='dashboard.php'">Click Here to Select Package</h3>
                                        </div>
                                        <?php
                                        }
                                            foreach($courses as $course){
                                        ?>
                                        <div class="card">
                                                    <div class="d-flex flex-column align-items-center">
                                                    <?php
                                                        $gender = 'men';
                                                        if($course["gender"] == 'male'){
                                                            $gender = 'men';
                                                        }else{
                                                            $gender = 'women';
                                                        }
                                                        $url = '';
                                                        if(trim($course["profile_picture"]) == ""){
                                                            $randomNumber = rand(0, 99);
                                                            $url = "https://randomuser.me/api/portraits/$gender/$randomNumber.jpg";
                                                        }else{
                                                            $url = "../userlogo/".$course["profile_picture"];
                                                        }
                                                        ?>
                                                        <img class="image" src="<?php echo $url; ?>"  />
                                                        <h4 class="ms-3 fw-bold"><?php echo $course['name']; ?></h4>
                                                    </div>
                                            <h4 class="fw-bold mb-0">Course : <?php echo $course['course_name']; ?></h4>
                                            <h4 class="fw-bold">Code : <?php echo $course['course_code']; ?></h4>
                                            <p><?php echo $course['course_description']; ?></p>
                                            <p class="mt-auto"><strong>Duration:</strong> <?php echo $course['course_duration']; ?> months</p>
                                            <?php if ($course['is_enrolled']) { ?>
                                                <button class="primary" onclick="javascript:location.href='course.php?teacher_id=<?php echo $course['teacher_id']; ?>&course_id=<?php echo $course['course_id']; ?>'">Go to Course</button>
                                            <?php } else { ?>
                                                <button class="primary" onclick="processPayment(event,<?php echo $course['course_id']; ?>,<?php echo $course['teacher_id']; ?>,<?php echo $course['monthly_rate']; ?>)">Enroll</button>
                                            <?php } ?>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
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
</body>

</html>