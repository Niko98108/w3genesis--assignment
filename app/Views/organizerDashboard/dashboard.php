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
                                                <p class="card-text">
                                                <a href =""  data-toggle="modal" data-target="#exampleModalCenter"><button class="btn btn-success  mb-4 mr-2 btn-sm" >Share</button></a>
                                           
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
                <?php
                 $link = "https://ersystem.000webhostapp.com"
                 ?>
     <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Share Register Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                             <div class= "row">
                                     <div class="col">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$link?>"target="_blank"> <img src="<?=base_url();?>/assets/img/social/facebook.png" alt="facebook" style="width:60px;"></a>
                                    </div>
                                    <div class="col">
                                         <a href="#" target="_blank"> <img src="<?=base_url();?>/assets/img/social/instagram.png" alt="instragram" style="width:60px;"></a>
                                    </div>
                                    <div class="col">
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$link?>" target="_blank"> <img src="<?=base_url();?>/assets/img/social/linkedin.png" alt="linkedin" style="width:60px"></a>
                                    </div>
                                    <div class="col">
                                     <a href="https://twitter.com/share?url=<?=$link?>&text=form&hashtags=events" target="_blank"> <img src="<?=base_url();?>/assets/img/social/twitter.png" alt="twiter" style="width:60px;"></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://api.whatsapp.com/send?text=event_form&url=<?=$link?>"target="_blank"> <img src="<?=base_url();?>/assets/img/social/whatsapp.png" alt="whatsapp" style="width:60px;"></a>
                                    </div>
                                    <div class="col">
                                        <a href=""> <img src="<?=base_url();?>/assets/img/social/youtube.png" alt="youtube" style="width:60px;"></a>
                                    </div>
                                </div>
                                    <hr>
                            <div class ="form-row">
                                  </div>
                                    <div class="form-group col-sm-12">
                                      <label for="copylink">copy Link</label>
                                      <input type="text" name="link" value="<?=$link?>" class="form-control" id="link" readonly="readonly">
                                     </div>
                                     <div>
                                      <button type="button"  onclick="copyLink()" class="btn btn-primary mb-2 mr-2 btn-rounded">Copy Link</button>
                                      </div>
                                     </div>
                                    </div>
                            </div>
                            <script>
                                function copyLink() {
                                 var copyText = document.getElementById("link");
                                copyText.select();
                                copyText.setSelectionRange(0, 99999);
                                document.execCommand("copy");

                                }
                            </script>
                            
                            
                            
                    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/pages/faq/faq.js"></script>


