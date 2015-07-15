<?php include 'header.php';
if (!isset($data)) {$data = array(
	'username' => '',
	'password' => '',
	'lastname' => '',
	'firstname' => '',
	'email' => '',
	'group' => '2'					
);}
?>
<div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Thêm tài khoản admin <small></small></h2>
                                    <!-- <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                        </li>
                                    </ul>-->
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <form class="form-horizontal" method="post" action="create-admin">
				
				  <div class="form-group"  >
					<label for="inputEmail3" class="col-sm-2 control-label" style="text-align:left;margin-left:0px;padding-left:0px;"></label>
					<div class="col-sm-10">
					  <h3>Create new account</h3>
					</div>
					<div class="col-sm-12">
					
						<?php 
						if (isset($error) && !is_array($error)) {
echo '<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Error:</span>
							  '.html_entity_decode($error).'
							</div>';
						}
						if (isset($error) && is_array($error)) {
							for ($i = 0; $i < count($error); $i++) {
								
								echo '<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Error:</span>
							  '.$error[$i]['message'].'
							</div>';
							}
						}
						//success
						if (isset($message)) {
							echo '<div class="alert alert-success" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Message:</span>
							  '.$message.'
							</div>';
						}
						?>
					</div>
				  </div>
				  
				  <div class="form-group"  >
					<label for="inputEmail3" class="col-sm-2 control-label" style="text-align:left;margin-left:0px;padding-left:0px;">Username</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control custom-text" id="inputEmail3" placeholder="Username" style="width:70%;" name="username" value="<?php echo $data['username'];?>">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:left;margin-left:0px;padding-left:0px;">Password</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control custom-text" id="inputPassword3" placeholder="Password" style="width:70%;" name="password" value="">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label" style="text-align:left;margin-left:0px;padding-left:0px;">Cấp độ</label>
					<div class="col-sm-3">
					  <input type="radio" class="form-control" id="inputPassword3" placeholder=""  name="group" value="1" <?php if ($data['group'] == "1")echo 'checked';?>> <label>Super admin</label>
					  <input type="radio" class="form-control" id="inputPassword3" placeholder=""  name="group" value="2" <?php if ($data['group'] == "2")echo 'checked';?>> <label>Normal admin</label>	
					</div>
				  </div>
				  <div class="form-group">
					
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-success" name="submit">Register</button>
					</div>
				  </div>
				</form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php include'footer.php';?>