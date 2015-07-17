<?php include 'header.php'?>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="<?php echo _ADMIN_URL_;?>add/job" method="post">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Thêm nganh nghe<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" required="required" name="name" class="form-control col-md-7 col-xs-12" data-parsley-id="0865"><ul class="parsley-errors-list" id="parsley-id-0865"></ul>
                                            </div>
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                
                                                <button type="submit" class="btn btn-success" name="add">Submit</button>
                                            </div>
                                        </div>

                                    </form>
<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>List <?php //echo $root_[$table];?><small></small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên <?php //echo $root_[$table];?></th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $stt = 0;
                                        if (isset($data) && count($data) > 0) {
											foreach ($data as $item) {
												$stt++;
												echo'
                                						<tr>
														<th scope="row">'.$stt.'</th>
														<td>'.$item['name'].'</td>
														<td><a href="'._ADMIN_URL_.'edit/'.$item['id'].'/'.$table.'"><i class="fa fa-edit"></i></a></td>
														<td><a href="'._ADMIN_URL_.'del/'.$item['id'].'/'.$table.'"><i class="fa fa-close"></i></a></td>
														</tr>
                                				';
												
											}
                                        	
                                        }else {
                                        	echo'<tr><td colspan="4">Không có dữ liệu nào</td></tr>';
                                        }
                                        
                                        ?>                                            
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix">	</div>
                        <?php include 'footer.php';?>