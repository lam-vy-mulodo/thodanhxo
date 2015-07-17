<?php include 'header.php';?>
<div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit <small>nganh nghề</small></h2>
                                   
                                    <div class="clearfix"></div>
                                </div>
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
                                <div class="x_content">
                                    <br>
                                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="post" action="<?php echo _ADMIN_URL_;?>edit/<?php echo $id.'/'.$table;?>">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên thành phố <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="thanhpho" required="required" name="name" class="form-control col-md-7 col-xs-12" data-parsley-id="3358"
                                                <?php if(isset($value))echo' value="'.$value.'"';?>>
                                                
                                                <ul class="parsley-errors-list" id="parsley-id-3358"></ul>
                                            </div>
                                        </div>                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="<?php echo _ADMIN_URL_;?>list/experience" class="btn btn-primary">Cancel</a>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php include 'footer.php';?>