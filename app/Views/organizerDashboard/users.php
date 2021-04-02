
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
                        <table class="multi-table table table-hover" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>email</th>
                                    <th>Event name</th>
                                    <th >View Event</th>
                                </tr>
                            </thead>
                            <?php foreach($users as $users): ?>
									<tbody>
										<tr class="text-center">
											<td><?=$users['userID']; ?></td>
											<td><?=$users['firstName']; ?></td>
											<td><?=$users['phoneNo']; ?></td>
											<td><?=$users['email']; ?></td>
                                            <td><?=$users['eventName']; ?></td>
										
											<td class="text-center"><a href = "" ><button class="btn btn-outline-primary">view</button> </a> </td>
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
