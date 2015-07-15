<?php include 'header.php'?>
<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>List thành phố <small></small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên thành phố</th>
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
														<td><a href="edit-thanhpho/'.$item['id'].'"><i class="fa fa-edit"></i></a></td>
														<td><a href="del-thanhpho/'.$item['id'].'"><i class="fa fa-close"></i></a></td>
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