<?php include 'header.php';?>
<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Manage <small>List admin</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>-->
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">

                                    <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                                </th>
                                                
                                                <th class="column-title" style="display: table-cell;">Username </th>
                                                <th class="column-title" style="display: table-cell;">Ngày tạo </th>
                                                <th class="column-title" style="display: table-cell;">Login lần cuối </th>
                                                <th class="column-title" style="display: table-cell;">Status </th>
                                                <th class="column-title" style="display: table-cell;">Cấp độ </th>
                                                <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7" style="display: none;">
                                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
								if (isset($error)) {
									echo '<tr><td colspan="8">'.$error.'</td></tr>';
								}
								 if (isset($data) && count($data) > 0){
									foreach($data as $item) {
										echo '
                                    <tr class="even pointer">
		                                    <td class="a-center "><div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" name="check['.$item['id'].']" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div></td>
		                                    <td class=" ">'.$item['username'].'</td>
		                                    <td class=" ">'.date('d/m/Y',$item['created_at']).' </td>
		                                    <td class=" ">'.date('d/m/Y',$item['last_login']).' <i class="success fa fa-long-arrow-up"></i></td>
		                                    ';
											if($item['status'] == 1) {
												echo'
		                                    <td class=" last">Active</td>';
											}else{
												echo'
		                                    <td class=" last">Block</td>';
											}
											echo'
		                                    <td class=" ">';
											if($item['group'] == 1) {
												echo'
		                                    Supper admin';
											}else{
												echo'
		                                    Normal admin';
											}
		                                    if($item['status'] == 1) {
												echo'
		                                    <td class=" last"><a href="block/'.$item['id'].'/0"><b>Block</b></a></td>';
											}else{
												echo'
		                                    <td class=" last"><a href="block/'.$item['id'].'/1"><b>UnBlock</b></a></td>';
											}
											
											echo'
                                    </tr>
                                    		';
									}
								}
							?>
                            
                                
                                            </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
<?php include 'footer.php';?>