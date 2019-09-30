
		<div class="row">
			<div class="col">
				<div class="card info">
					<div class="card-body">
						 <?php
		                    if (isset($_SESSION['success_message'])) {
		                        echo "<h5 class='text-success'>" . $_SESSION['success_message'] . "</h5>";
		                        $_SESSION['success_message'] = "";
		                    }
		                    if (isset($_SESSION['err_message'])) {
		                        echo "<h5 class='text-success'>" . $_SESSION['err_message'] . "</h5>";
		                        $_SESSION['err_message'] = "";
		                    }

		                    ?>
						<?php
                        $obj_user_category_controller = new CategoryManageController;
                        $all_category_list = $obj_user_category_controller->get_all_category();
                        ?>
						<div class="panel-body table-responsive">

						  <table class="table table-striped order-table" id="myTable">
						    <thead>
						      <tr>
						        <th>Name</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?php foreach ($all_category_list as $v_category_list) { ?>
						      <tr>
						        <td><?php echo $v_category_list['name']; ?></td>
						        <td>
						          <a href="<?php echo BASE_URL . 'delete-category/' . $v_category_list['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" data-toggle="tooltip" data-placement="top" title="delete"><i style="color: red;" class="fa fa-trash" aria-hidden="true"></i></a>

						          <a href="<?php echo BASE_URL . 'edit-category/' . $v_category_list['id']; ?>" data-toggle="tooltip" data-placement="top" title="edit"><i style="color: #f4a425;" class="fa fa-edit fa-lg"></i></a>
                                  
                                  <?php
                                  if($v_category_list['status'] == 1){

                                  ?>
						          <a href="<?php echo BASE_URL . 'unpublish-category-status/' . $v_category_list['id']; ?>" data-toggle="tooltip" data-placement="top" title="status"><i style="color: red;" class="fas fa-check"></i></a>
						      <?php } else {?>

						           <a href="<?php echo BASE_URL . 'publish-category-status/' . $v_category_list['id']; ?>" data-toggle="tooltip" data-placement="top" title="status"><i style="color: #f4a425;" class="fas fa-times-circle"></i></a>
						       <?php }?>
						          <!-- <a onclick="Confirm.render('Are you sure you want to delete?')" data-toggle="tooltip" data-placement="top" title="delete"><i style="color: red;" class="fa fa-trash-alt fa-lg"></i></a> -->
						        </td>
						     </tr>
						 <?php }?>
						    </tbody>
						  </table>
						 </div>	
					</div> 
				</div>
			</div>
		</div>