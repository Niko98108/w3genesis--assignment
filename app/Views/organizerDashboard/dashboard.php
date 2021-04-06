<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
            <div class="layout-px-spacing">
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
								
            <div class="page-header">
                    <div class="page-title">
                        <h3>Organizer Dashboard</h3>
                    </div>
                </div>

                <div class="row layout-top-spacing" id="cancel-row">
                    
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">

                            <div class="row">
                                <div class="col-4">
                                     <div class="infobox-1">
                                         <div class="card-body">
                                        
                                                <h5 class="card-title">Create Event</h5>
                                                <p class="card-text">
                                                <a href ="<?=base_url();?>/OrgernizerDashboard/createEvent"><button class="btn btn-info  mb-4 mr-2 btn-sm" >Create</button></a>
                                                </p>
                                                <p class="card-text">
                                                <a href ="<?=base_url();?>/OrgernizerDashboard/updateEvent"><button class="btn btn-dark  mb-4 mr-2 btn-sm" >Update</button></a>
                                                </p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-4">
                                     <div class="card component-card_1">
                                        <div class="card-body">
                                        <div class="counter-content">
                                                     <h1 class="display-4"><?=$users;?></h1>
                                                </div>
                                                    <p class="ico-counter-text">Users</p>
                                          
                                                <h5 class="card-title">Register Users</h5>
                                                <p class="card-text">
                                                <a href ="<?=base_url();?>/OrgernizerDashboard/Users"><button class="btn btn-info  mb-4 mr-2 btn-sm" >View</button></a>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                     <div class="card component-card_1">
                                        <div class="card-body">
                                        <div class="counter-content">
                                                     <h1 class="display-4"><?=$events;?></h1>
                                                </div>
                                                    <p class="ico-counter-text">Events</p>
                                         
                                                <h5 class="card-title">All Events</h5>
                                                <p class="card-text">
                                                <a href ="<?=base_url();?>/OrgernizerDashboard/events"><button class="btn btn-info  mb-4 mr-2 btn-sm" >View</button></a>
                                                
                                                </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

               
                    </div>
                </div>
            </div>
</div>       

                <!-- CONTENT AREA -->


