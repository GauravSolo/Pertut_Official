<?php
  $pathname =  pathinfo($_SERVER['REQUEST_URI'])['filename'];  
?>
<script>console.log('<?php echo $pathname; ?>')</script>
<nav class="navbar navbar-expand-lg  navbar-light bg-transparent" style="box-shadow: none;">
                                <div class="container-fluid">
                                <a class="navbar-brand position-relative text-start text-sm-end" style="width: 150px" href="index.php"><img src="images/finallogo2.png"  class="w-75 h-50 logoimage" alt="logo" style="transform:scale(0.5);"><img src="images/logo1t.png"  class="w-75 h-50 logoname ms-5" alt="logo" style="transform:scale(1.2);"></a>
                                <button style="color: transparent !important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                        <li class="nav-item text-center">
                                            <a class="nav-link  px-4 pb-1 <?php echo ($pathname == "index")?"active":""; ?>" aria-current="page" href="index.php">Home</a>
                                        </li>
                                                        <li class="nav-item text-center">
                                                            <a class="nav-link  px-4 pb-1 <?php echo ($pathname == "what-we-do")?"active":""; ?>" href="what-we-do.php">What We Do</a>
                                                        </li>
                                                        <li class="nav-item text-center ">
                                                            <a class="nav-link   px-4 pb-1 <?php echo ($pathname == "whoweare")?"active":""; ?>" aria-current="page" href="whoweare.php">Who We Are</a>
                                                        </li>                                                  
                                                        </ul>
                                                        <?php 
                                                            if(isset($_SESSION['id']))
                                                              {
                                                          ?><a href="#" class="text-white text-decoration-none fs-6" onclick="javascript:window.location.href = 'dashboard/dashboard.php'">
                                                        <div class="text-white text-center  p-2 my-1 p-sm-3 mx-auto mx-lg-0" style=" cursor: pointer; border-radius: 100px ;width: 150px; background-color: #ffa737; font-weight: bold; font-size: 1rem;"> Dashboard</div></a>
                                                        
                                                        <a href="#" class="text-white text-decoration-none fs-6" onclick="javascript:window.location.href = 'logout.php'"> <div class="text-white text-center  p-2 my-1 p-sm-3 mx-auto mx-lg-0" style="cursor: pointer; border-radius: 100px ;width: 150px; background-color: #ffa737; font-weight: bold; font-size: 1rem;"> LOG OUT</div></a>
                                                        <?php }else{?>
                                                            <div data-bs-toggle="modal" data-bs-target="#registermodal" class="text-white text-center  p-sm-3 mx-auto mx-lg-0" style=" cursor: pointer; border-radius: 100px ;width: 150px; background-color: #ffa737; font-weight: bold; font-size: 1rem;"> <a href="#" class="text-white text-decoration-none fs-6" >Register</a></div>

                                                        <?php  } ?>
                                                        
                                </div>
                                </div>
                    </nav>