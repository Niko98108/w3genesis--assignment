
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <div class="page-title">
                        <h3><?=$title;?></h3>
                    </div>
                </div>
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

                <div class="row layout-top-spacing" id="cancel-row">
                    
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                        <table class="multi-table table table-hover" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>image</th>
                                    <th>ID</th>
                                    <th>Event Name</th>
                                    <th>Oraganizer Name</th>
                                    <th>Oraganizer Mobile</th>
                                    <th>Event Description</th>
                                </tr>
                            </thead>
                            <?php foreach($events as $events): ?>
									<tbody>
										<tr class="text-center">
                                        <td class="text-center"><img src="<?=base_url()."/".$events['image']; ?>"  style="width:60px; border-style: solid;" /> </td>
											<td><?=$events['eventID']; ?></td>
											<td><?=$events['eventName']; ?></td>
											<td><?=$events['orgName']; ?></td>
                                            <td><?=$events['phoneNo']; ?></td>
                                            <td><?=$events['eventDesc']; ?></td>
										
											<td class="text-center"><a href = "" ><button class="btn btn-outline-primary">view</button> </a> </td>
                                            <td class="text-center"><a href = "<?=base_url('/OrgernizerDashboard/DeleteEvents/'.$events['eventID'])?>"><button class="btn btn-outline-danger">Delete</button> </a> </td>
											<!--  -->
										</tr>
									</tbody>
								<?php endforeach; ?>
								</table>    
					   
                        </div>
                    </div>
                </div>
            </div>
        </div>
