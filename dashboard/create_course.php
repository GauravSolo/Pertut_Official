<?php
  session_start();
    
if(isset($_SESSION['id']) && $_SESSION['cat'] == "teacher"){

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
    <title>PerTut Official | Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
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

.white-box.analytics-info:hover{
    box-shadow:2px 2px 10px rgb(224, 182, 103), -2px -2px 10px rgb(224, 182, 103);
    transform: scale(1.002);
    cursor :pointer;
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
	background-color: transparent;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #02899C;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary:hover{
	color: #231E39;
	background-color: #03BFCB;
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
                   
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
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
                    <div class="col-12 d-flex justify-content-between">
                        <h4 class="page-title">Create Course</h4>
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
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                   <div class="col-12  mx-auto my-2" id="msg">
                    </div>
                <div class="row">
                            <style>


        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .alert {
            display: none;
            margin-top: 15px;
            padding: 10px;
            background-color: #ffcccc;
            color: #a94442;
            border: 1px solid #a94442;
            border-radius: 5px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }
                            </style>

                    <div class="col-12 d-flex justify-content-center">
                                    <div class="form-container">
                                        <form id="createCourseForm">
                                            <div class="form-group">
                                                <label for="course_code">Course Code</label>
                                                <input type="text" id="course_code" name="course_code" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="course_name">Course Name</label>
                                                <input type="text" id="course_name" name="course_name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="course_price">Course Price</label>
                                                <input type="number" id="course_price" name="course_price" step="0.01" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="course_description">Course Description</label>
                                                <textarea id="course_description" name="course_description" rows="4" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="course_duration">Course Duration (in months)</label>
                                                <input type="number" id="course_duration" name="course_duration" required>
                                            </div>
                                            <button type="submit">Create Course</button>
                                        </form>

                                        <div id="alertMessage" class="alert"></div>
                                    </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent Comments -->
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
    <input type="hidden" value="<?php  echo $_SESSION["fullname"]; ?>" id="sessionfullname">
    <input type="hidden" value="<?php  echo $_SESSION["email"]; ?>" id="sessionemail">
    <input type="hidden" value="<?php  echo $_SESSION["phone"]; ?>" id="sessionphone">
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
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
  <script>
    $(document).ready(function() {
    $("#createCourseForm").submit(function(event) {
        event.preventDefault(); 

        $('#alertMessage').removeClass('success').addClass('alert').text('Processing...').show();

        var formData = {
            create_course: "course",
            course_code: $('#course_code').val(),
            course_name: $('#course_name').val(),
            course_price: $('#course_price').val(),
            course_description: $('#course_description').val(),
            course_duration: $('#course_duration').val()
        };

        $.ajax({
            url: 'fetch_analytics.php', 
            type: 'POST',
            data: formData,
            success: function(response) {
                var data = JSON.parse(response);
                
                if (data.error == 0) {
                    $('#alertMessage').removeClass('alert').addClass('success').text(data.message).show();
                    $('#createCourseForm')[0].reset();  
                } else {
                    $('#alertMessage').removeClass('success').addClass('alert').text(data.message).show();
                }
            },
            error: function() {
                $('#alertMessage').removeClass('success').addClass('alert').text('An error occurred. Please try again later.').show();
            }
        });
    });
});
  </script>
</body>

</html>