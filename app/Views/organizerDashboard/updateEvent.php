
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <div class="page-title">
                        <h3><?=$title;?></h3>
                    </div>
                </div>

                <div class="row layout-top-spacing" id="cancel-row">
                    
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
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
                        <div class="col-12">
                                     <div class="card component-card_1">
                                         <div class="card-body">
                                             
                                    
                                                <h5 class="card-title">Update Event</h5>
                                                <div class="card-text">
                                             <form  method="POST" action="<?=base_url();?>/OrgernizerDashboard/updateEvent" enctype="multipart/form-data" class="needs-validation">
                                                 <div class="form-row mb-4">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Event Name</label>
                                                        <input type="text" class="form-control" name="eventname"id="" required>
                                                    </div>
                                                    <div class="form-group mb-4 mt-2">
                                                        <label for="exampleFormControlFile1">Select you Event Image</label>
                                                        <input type="file" class="form-control-file" accept="image/*" name="imagetxt"id="imagetxt" >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        
                                                        <textarea  type="text" class="form-control" name="description" id="" placeholder="Enter Event Description" required></textarea>
                                                     </div>
                                                    </div>
                                                    
                                                    <div class="form-row mb-4">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4">closing Date</label>
                                                        <input type="date" class="form-control" name="date" id="" required>
                                                    </div>
                                                    
                                                </div>
                                                
                                                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                                             </form>
                                               
                                                </div>
                                        </div>
                                    </div>
                                </div>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    
