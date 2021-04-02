<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>ERSystem</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/pages/faq/faq.css" rel="stylesheet" type="text/css" /> 
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->     
</head>
<body class="sidebar-noneoverflow">

    <div class="fq-header-wrapper">
        <nav class="navbar navbar-expand">
            <div class="container">
                <a class="navbar-brand" href="index.html">Event Registration  System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url();?>/Login">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="pages_contact_us.html">Contact Us</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center order-md-0 order-1">
                    <h1 class="">Welcome!</h1>
                    <p class="">Get Instant Answer From Popular Question Asked By Other Users</p>
                    <button class="btn">Start Learning</button>
                </div>
                <div class="col-md-6 order-md-0 order-0">
                    <a target="_blank" class="banner-img">
                        <img src="assets/img/event.png"Style="height:450px;width:450px;" class="d-block" alt="header-image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="faq container">

        <div class="faq-layouting layout-spacing">


            <div class="fq-comman-question-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Event Registration</h3>
                        <?php if(isset($validation)){ ?>
                            <div class="alert alert-danger"> <?= $validation->listErrors() ?> 
                            </div>
                        <?php } ?>

                        <?php
                        $session = session();
                        if($session->getFlashdata("msg")!=null){

                        $messagetype = "danger";
          
                        if($session->getFlashdata("msgtype")!=null){
                        if($session->getFlashdata("msgtype") == 1){
                         $messagetype = "success";
                        }      
                        }

                        ?>
                            <div class="alert alert-<?=$messagetype;?>"> 
                <?php 
                  echo $session->getFlashdata("msg"); 
                ?> 
            </div>
                        <?php
                        }
                        ?>
                        <form  method="POST" action="<?=base_url();?>/EventsRegister/register"  class="needs-validation">
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">First Name</label>
                                    <input type="text" class="form-control" name="fname"id="" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id=""required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Email</label>
                                    <input type="email" class="form-control" name="email" id="" required>
                                </div><div class="form-group col-md-4">
                                    <label for="inputPassword4">Phone Number</label>
                                    <input type="text" class="form-control" name="mobile" id="" required>
                                </div>
                            </div>
                            
                            <div class="form-row md-4">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Address</label>
                                    <input type="text" name="address" class="form-control" id="" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">District</label>
                                    <select class="form-control form-control-sm" id="districtid" name="district" required>
                                                <option value="Colombo">Colombo</option>
                                                <option value="Kurunegala">Kurunegala</option>
                                                <option value="Kandy">Kandy</option>
                                                <option value="Gampaha">Gampaha</option>
                                                <option value="Anuradhapura">Anuradhapura</option>
                                                <option value="Ampara">Ampara</option>
                                                <option value="Batticaloa">Batticaloa</option>
                                                <option value="Badulla">Badulla</option>
                                                <option value="Galle">Galle</option>
                                                <option value="Hambantota">Hambantota</option>
                                                <option value="Jaffna">Jaffna</option>
                                                <option value="Kegalle">Kegalle</option>
                                                <option value="Kalutara">Kalutara</option>
                                                <option value="Kilinochchi">Kilinochchi</option>
                                                <option value="Monaragala">Monaragala</option>
                                                <option value="Matara">Matara</option>
                                                <option value="Mannar">Mannar</option>
                                                <option value="Mullaitivu">Mullaitivu</option>
                                                <option value="Matale">Matale</option>
                                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                                <option value="Puttalam">Puttalam</option>
                                                <option value="Polonnaruwa">Polonnaruwa</option>
                                                <option value="Ratnapura">Ratnapura</option>
                                                <option value="Trincomalee">Trincomalee</option>
                                                <option value="Vavuniya">Vavuniya</option>
                                            </select>    
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">NIC</label>
                                    <input type="text" class="form-control" name="nic"id="inputZip"required>
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="inputState">Event Name</label>
                                        <select class="form-control form-control-sm" id="eventid" name="eventname" required>
                                        <?php foreach($event as $eventname): ?> 
                                                    <option value="<?=$eventname['eventID']; ?>"><?=$eventname['eventName']; ?></option>
                                                <?php endforeach; ?>
    
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check pl-0">
                                    <div class="custom-control custom-checkbox checkbox-info">
                                        <input type="checkbox" class="custom-control-input" id="gridCheck">
                                        <label class="custom-control-label" for="gridCheck">Check me out</label>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary mt-3">Register</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="fq-article-section">
                <h2>Upcomming Events</h2>
                <div class="row">
                <?php foreach($event as $events): ?> 
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                        <div class="card">
                        <img src="<?=base_url()."/".$events['image']; ?> " class="card-img-top" alt="faq-video-tutorials" style="width:250px; height:200px;">
                            <div class="card-body">
                               
                                <h5 class="card-title"><?=$events['eventName']; ?></h5>
                                <p class="card-text"><?=$events['eventDesc']; ?></p>
                                <p class="meta-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <?=$events['date']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; ?> 

            </div>

        </div>
    </div>
    <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-2a597d21-0e56-43cf-8029-ab8e92a2d9da"></div>  -->

    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <p class="">Up</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
                            <p class="mt-md-0 mt-4 mb-0">2021 &copy; <a target="_blank" href="https://designreset.com/cork">W3 Genesis</a>.</p>
                        </div>
                        <div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center">
                            <p class="mb-0">Developed By Nisal, Powered By W3 Genesis</p>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/pages/faq/faq.js"></script>
    
</body>
</html>