<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
include "../config.inc.php";
$teacher = array();
$teacher_id = "";
$teacher_name = "";
if(isset($_SESSION['id']) && $_SESSION["cat"] == "teacher"){
    $teacher_id = $_SESSION["id"];
    $teacher_name = $_SESSION["username"];
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
.chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 60vh;
    min-height: 60vh;
    overflow-y: scroll
}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
}
.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}
.px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
}
.flex-grow-0 {
    flex-grow: 0!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}

.users.active{
    background:#dedede;
    color:grey;
}
.list-group-item{
    min-width: 180px;
    max-height: 55px;
    border-bottom: 1px solid #ccc !important;
}
.border-bottom{
    border-bottom: 1px solid #ccc !important;
}
.border-right{
    border-right: 1px solid #ccc;
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
            <!-- <div class="page-breadcrumb bg-white"> -->
                <!-- <div class="row align-items-center"> -->
                    <!-- <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12"> -->
                        <!-- <h4 class="page-title"><?php echo $teacher_name;  ?> profile</h4> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                   <div class="col-12  mx-auto mb-1" id="msg">
                    </div>
                    <div class="col-sm-12">
                        <div class="white-box d-flex flex-column flex-md-row">
                            <div class="col px-3 chat">
                                <div class="row">
                                <div class="col-12">
                                        <h4 class="page-title" style="border-bottom: 1px solid;font-weight:bold;color:orange;">Chat</h4>
                                    </div>
                                    <div class="col-12 d-flex flex-wrap w-100">
                                        <main class="content w-100">
                                            <div class="container p-0">
                                                <div class="card">
                                                    <div class="row g-0">
                                                        <div class="col-12 col-md-3" style="overflow-y:auto; max-height: 60vh;border:1px solid #ccc;border-bottom:0;border-right:0;">
                                                            <div class="px-4 d-none d-md-block">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <input type="text" class="form-control my-3" placeholder="Search...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mx-0">
                                                                <div class="col-12  participants pb-2 pb-md-0 d-flex flex-row flex-md-column" >

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-12 col-md-9 mt-5 mt-md-0" style="border: 1px solid #ccc;">
                                                        <div class="py-2 px-4 border-bottom d-block">
                                                            <div class="d-flex align-items-center py-1">
                                                                <div class="position-relative">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" id="active-image" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                                                </div>
                                                                <div class="flex-grow-1 ps-3">
                                                                    <strong id="active-name"> Select Chat</strong>
                                                                </div>
                                                                <div>
                                                                    <button data-id="" data-role="" id="active-user" class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="position-relative">
                                                                <div class="chat-messages p-4">
                                                            </div>

                                                            <div class="flex-grow-0 py-3 px-4 border-top">
                                                                <div class="input-group">
                                                                    <input type="text" id="message" class="form-control" placeholder="Type a message...">
                                                                    <button class="btn btn-primary" id="send">Send</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </main>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <?php
          include "dashboardfooter.php";
          ?>
        </div>
    </div>
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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="../scripts/paymentscript.js"></script>
</body>
<script>
var conn = null;
var sender_id = <?php echo $_SESSION["id"]; ?>; 

    
function activeChat(e, id, role,logo,name) {
        if ($(e.currentTarget).hasClass("active")) return;
        $("#active-image").attr("src", "../userlogo/"+logo);
        $("#active-name").text(name);
        $("#active-user").attr("data-id",id);
        $("#active-user").attr("data-role",role);
        $(".users").removeClass('active');
        $(e.currentTarget).addClass('active');
        $(".chat-messages").html('');
        fetchChatHistory(id, role);

        if (conn !== null) {
            conn.close();
        }

        conn = new WebSocket('ws://localhost:8080/?sender_id=' + id + '&receiver_id=' + sender_id);

        conn.onopen = function() {
            console.log("Connected to chat server for teacher-student chat.");
        };

        conn.onmessage = function(e) {
            var data = JSON.parse(e.data);
            console.log("Received data", data);
            if ($(".users").filter(`[data-id='${data}']`).length <= 0 && data.sender_id != sender_id) {
                console.log("An element with the matching data-id not exists.");
                fetchChatParticipants($('.users.active').attr("data-id"));
                return;
            }
            addMessage(data.sender_id, data.sender_logo, data.sender_name, data.timestamp, data.message_content);
        };

        conn.onerror = function(err) {
            console.log("Error in WebSocket connection:", err);
        };
}

document.getElementById('send').onclick = function() {
    if (!$(".users").hasClass("active")) {
        alert("Please select a student to chat with.");
        return;
    }

    var receiver_id = $(".users.active").attr("data-id");
    var receiver_role = $(".users.active").attr("data-role");

    var message = document.getElementById('message').value;

    var data = {
        sender_id: sender_id, 
        receiver_id: receiver_id, 
        message_content: message, 
        sender_role: "<?php echo $_SESSION["cat"]; ?>",
        receiver_role: receiver_role, 
        sender_logo: "<?php echo $_SESSION["dp"]; ?>",
        sender_name: "<?php echo $_SESSION["fullname"]; ?>"  
    };

    if (conn !== null && conn.readyState === WebSocket.OPEN) {
        conn.send(JSON.stringify(data)); 
    }

    document.getElementById('message').value = '';
};


document.getElementById('message').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        document.getElementById('send').click();
    }
});

function openCoursesModal(teacher_id) {
    const teacher = teachers.find(t => t.teacher_id === teacher_id);

    const coursesContent = `
        <h4>Courses by ${teacher.name}</h4>
        <ul class="courses-list">
            ${teacher.courses.map(course => `
                <li>
                    <h5>${course.title}</h5>
                    <p>Price: ₹${course.price}</p>
                    <button onclick="enrollInCourse(${course.course_id}, ${teacher_id})">Enroll</button>
                </li>
            `).join('')}
        </ul>
    `;

    document.getElementById("teacher-profile-content").innerHTML = coursesContent;
}

function sendMessage(teacher_id) {
    alert(`Sending message to teacher with ID: ${teacher_id}`);
}

function enrollInCourse(course_id, teacher_id) {
    alert(`Enrolled in course with ID: ${course_id} taught by teacher with ID: ${teacher_id}`);
}

function toggleButton(event){
    $(".chat-button").toggleClass("ghost");
    $(".courses-button").toggleClass("ghost");

    $(".chat").toggle();
    $(".courses").toggle();
}

function fetchChatParticipants(active_user = -1) {
    $('.participants').html(``);
    $.ajax({
        url: 'fetch_analytics.php', 
        type: 'POST',
        data: {
            fetch_chat_participants: 'data',
            user_id: <?php echo $_SESSION["id"];  ?>,
            user_role : "<?php echo $_SESSION["cat"];  ?>"
        },
        success: function(response) {
            const data = JSON.parse(response);
            console.log(data);  

            if (data.error === 0) {
                
                data.participants.forEach(function(participant) {
                    let participantName = participant.name;
                    let participantImage = participant.avatar || 'https://bootdey.com/img/Content/avatar/avatar5.png'; 
                    let participantId = participant.participant_id;
                    let active = (active_user == participantId)?'active':'';
                    let badge = (active_user == participantId)?`
                                <div class="badge bg-success float-right" style='position: absolute;right: 10%;top: 10px;border-radius:50%;padding:0.4em;'> </div>`:'';
                    let participantHTML = `
                        <a href="#!" class="list-group-item list-group-item-action border-0 users ${active}" onclick="activeChat(event,${participantId},'${participant.role}','../userlogo/${participantImage}','${participantName}')" data-id="${participantId}" data-name="${participantName}" data-logo="../userlogo/${participantImage}" data-role="${participant.role}">
                            <div class="d-flex align-items-center">
                                <img src="../userlogo/${participantImage}" class="rounded-circle mr-1" alt="${participantName}" width="40" height="40">
                                <div class="flex-grow-1 ms-3 d-flex align-items-center">
                                    ${participantName}
                                    ${badage}
                                    <!-- <div class="small"><span class="fas fa-circle chat-offline">Offline</span></div> -->
                                </div>
                            </div>
                        </a>
                    `;

                    $('.participants').append(participantHTML);
                });
            } else {
                console.log("Error fetching participants.");
            }
        },
        error: function(xhr, status, error) {
            console.log("AJAX error: " + error);
        }
    });
}

fetchChatParticipants();


function fetchChatHistory(rec_id, rec_role) {
    $.ajax({
        url: 'fetch_analytics.php', 
        type: 'POST',
        data: {
            fetch_chat_history: 'data',
            sender_id: <?php echo $_SESSION["id"]; ?>, 
            receiver_id: rec_id, 
            sender_role: "teacher",
            receiver_role: rec_role,
        },
        success: function(response) {
            const data = JSON.parse(response);
            console.log(data);
            if (data.error === 0) {
                $('#chat-messages').empty();
                
                data.messages.forEach(function(message) {
                    let messageContent = message.message_content;
                    let sender_id = message.sender_id;
                    let senderName = message.sender_name;  
                    let receiverName = message.receiver_name;
                    let senderImage = message.sender_avatar || 'https://bootdey.com/img/Content/avatar/avatar3.png'; 
                    let receiverImage = message.receiver_avatar || 'https://bootdey.com/img/Content/avatar/avatar4.png';
                    let timestamp = message.timestamp; 

                    addMessage(sender_id,senderImage,senderName,timestamp,messageContent);
                    
                });
            } else {
                console.log("Error fetching messages.");
            }
        },
        error: function(xhr, status, error) {
            console.log("AJAX error: " + error);
        }
    });
}


function addMessage(sender_id,senderImage,senderName,timestamp,messageContent){

    let messageHTML = '';
    if(sender_id == <?php echo $_SESSION["id"]; ?>) {
        messageHTML = `
            <div class="chat-message-right pb-4" data-id="${sender_id}">
                <div class="d-flex flex-column">
                    <img src="../userlogo/${senderImage}" class="rounded-circle ml-1" alt="${senderName}" width="40" height="40">
                    <div class="text-muted small text-nowrap mt-2">${timestamp.split(" ")[0]+"<br>"+timestamp.split(" ")[1]}</div>
                </div>
                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                    <div class="font-weight-bold mb-1"  style='font-style:italic;'>${senderName}</div>
                    ${messageContent}
                </div>
            </div>
        `;
    } else {
        messageHTML = `
            <div class="chat-message-left pb-4" data-id="${sender_id}">
                <div class="d-flex flex-column">
                    <img src="../userlogo/${senderImage}" class="rounded-circle mr-1" alt="${senderName}" width="40" height="40">
                    <div class="text-muted small text-nowrap mt-2">${timestamp.split(" ")[0]+"<br>"+timestamp.split(" ")[1]}</div>
                </div>
                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                    <div class="font-weight-bold mb-1"  style='font-style:italic;'>${senderName}</div>
                    ${messageContent}
                </div>
            </div>
        `;
    }
    $('.chat-messages').append(messageHTML);

    chatContainer = document.querySelector('.chat-messages');
    chatContainer.scrollTop = chatContainer.scrollHeight;
}
</script>
</html>