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
.card-container img{
    width: 143.6px;
    height: 143.6px;
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
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex flex-column flex-sm-row">
                            <input type="text" class="form-control me-3" oninput="filter()" id="search_teacher" placeholder="Search ..."  style="border:1px solid #ccc;max-width:300px;">
                            <select name="" id="subject-list" class="form-select" onchange="filter()" style="max-width:300px;">
                                <option value="" selected>Select Subject</option>
                            </select>
                        </div>
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
                    <div class="col-12" id="teacher-container">

                    </div>
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Products Yearly Sales</h3>
                            <div class="d-md-flex">
                                <ul class="list-inline d-flex ms-auto">
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                                    </li>
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="ct-visits" style="height: 405px;">
                                <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                        class="chartist-tooltip-value">6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <!-- RECENT SALES -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Recent sales</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <option>March 2021</option>
                                        <option>April 2021</option>
                                        <option>May 2021</option>
                                        <option>June 2021</option>
                                        <option>July 2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 18, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Real Homes WP Theme</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Ample Admin</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Medical Pro WP Theme</td>
                                            <td>TAX</td>
                                            <td class="txt-oflo">April 20, 2021</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">Hosting press html</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 21, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 23, 2021</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">Helping Hands WP Theme</td>
                                            <td>MEMBER</td>
                                            <td class="txt-oflo">April 22, 2021</td>
                                            <td><span class="text-success">$64</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
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

  <script src="../scripts/paymentscript.js"></script>
  <script>



    $(document).ready(function () {
    // Fetch teachers from the backend
    $.ajax({
        url: 'fetch_teachers.php', // Backend PHP script
        method: 'POST',
        data : {
            fetch_teachers : "teachers"
        },
        dataType: 'json',
        success: function (response) {
            // Iterate over the teachers and add them to the container
            teachers = response.teachers;
            console.log(teachers);
            i = 1;
            teachers.forEach(function (teacher) {
                // ${teacher.profile_picture}
                gender = 'men';
                if(teacher.gender == 'male'){
                    gender = 'men';
                }else{
                    gender = 'women';
                }
                url = ''
                if(teacher.profile_picture.trim() == ""){
                    randomNumber = Math.floor(Math.random() * 100);
                    url = `https://randomuser.me/api/portraits/${gender}/${randomNumber}.jpg`;
                }else{
                    url = `../userlogo/${teacher.profile_picture}`;
                }
                const teacherCard = `
                    <div class="card-container" data-expertise="${teacher.expertise}" data-name="${teacher.name}">
                        <img class="image" src="${url}" alt="${teacher.name}" />
                        <h3>${teacher.name}</h3>
                        <div class="rating">${generateStars(teacher.rating)}<span class='ms-2' style='color:#8c8888;'>(${teacher.cnt}+)</span></div>
                        <h6>${teacher.expertise}</h6>
                        <p>${teacher.bio}</p>
                        <div class="details">
                            <p><strong>Education:</strong> ${teacher.education}</p>
                            <p><strong>Experience:</strong> ${teacher.experience} years</p>
                        </div>
                        <div class="buttons">
                            <button class="primary" onclick="javascript:location.href='teacher.php?teacher_id=${teacher.teacher_id}&chat'">Chat</button>
                            <?php  if($_SESSION["cat"] == "student") {
                            ?>
                            <button class="primary ghost" onclick="javascript:location.href='teacher.php?teacher_id=${teacher.teacher_id}&courses'">Courses</button>
                            <?php } ?>
                            <!-- <button class="primary ghost">Subscribe</button> -->
                        </div>
                    </div>`;
                $('#teacher-container').append(teacherCard); // Append card to container
            });
        },
        error: function (error) {
            console.error('Error fetching teacher data:', error);
        },
    });

    $.ajax({
        url: 'fetch_teachers.php', // Backend PHP script
        method: 'POST',
        data : {
            fetch_subjects : "subjects"
        },
        dataType: 'json',
        success: function (response) {
            subjects = response.html;
            $('#subject-list').html(subjects);
        },
        error: function (error) {
            console.error('Error fetching teacher data:', error);
        },
    });

    // Function to generate star ratings
    function generateStars(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            stars += i <= Math.floor(rating) ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
        }
        return stars;
    }
});

function filter(){
        const selectedCourse = $("#subject-list").val().toLowerCase();
        const search_teacher = $("#search_teacher").val().toLowerCase();
        $('.card-container').each(function () {
            const expertise = $(this).data('expertise').toLowerCase();
            const name = $(this).data('name').toLowerCase();

            if ((expertise.includes(selectedCourse) || selectedCourse === "all")  && name.includes(search_teacher)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
}
filter();
  </script>
</body>

</html>