<?php
  $pathname =  pathinfo($_SERVER['REQUEST_URI'])['filename'];  
?>
<script>console.log('<?php echo $pathname; ?>')</script>
<style>
    .selected{
        background: hsl(0 0% 83% / 0.3);
    }
</style>

<nav class="sidebar-nav">
                <ul id="sidebarnav" style="overflow:hidden;">
                    <!-- User Profile-->
                    <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "index")?"selected":""; ?>" href="../index.php"
                            aria-expanded="false">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span class="hide-menu">Home</span>
                        </a>
                     </li>
                    <li class="sidebar-item ">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "dashboard")?"selected":""; ?>" href="dashboard.php"
                            aria-expanded="false">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "profile")?"selected":""; ?>" href="profile.php"
                            aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>
                    <?php
                    if(isset($_SESSION["id"]) && $_SESSION["cat"] == "teacher"){
                    ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "users_chat")?"selected":""; ?>" href="users_chat.php"
                            aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Chat</span>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php
                    if(isset($_SESSION["id"]) && $_SESSION["cat"] == "teacher"){
                    ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "students")?"selected":""; ?>" href="analytics.php"
                            aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Analytics</span>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php
                    if(isset($_SESSION["id"]) && $_SESSION["cat"] == "teacher"){
                    ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "create_course")?"selected":""; ?>" href="create_course.php"
                            aria-expanded="false">
                            <i class="fa fa-columns" aria-hidden="true"></i>
                            <span class="hide-menu">Create Courses</span>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php
                    if(isset($_SESSION["id"]) && $_SESSION["cat"] == "student"){
                    ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "packages")?"selected":""; ?>" href="packages.php"
                            aria-expanded="false">
                            <i class="fa fa-columns" aria-hidden="true"></i>
                            <span class="hide-menu">My Courses</span>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    <!-- <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "todo")?"selected":""; ?>" href="todo.php"
                            aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">To Do</span>
                        </a>
                    </li> -->
                    <?php

                    if(isset($_SESSION["id"]) && $_SESSION["role"] == '1'){
                    ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "pertutusers")?"selected":""; ?>" href="pertutusers.php"
                            aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Pertut Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark <?php echo ($pathname == "basic-table")?"selected":""; ?>" href="basic-table.php"
                            aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Basic Table</span>
                        </a>
                    </li>
                    <?php } ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark " href="../logout.php"
                            aria-expanded="false">
                            <i class="fas fa-arrow-left" aria-hidden="true"></i>
                            <span class="hide-menu">Log Out</span>
                        </a>
                    </li>
                </ul>

               </nav>