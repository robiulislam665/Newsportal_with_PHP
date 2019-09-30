
		<div class="row">
			<div class="col">
				<div class="card info">
					<div class="card-body">
						 <?php
		                    if (isset($_SESSION['success_message'])) {
		                        echo "<h5 class='text-success'>" . $_SESSION['success_message'] . "</h5>";
		                        $_SESSION['success_message'] = "";
		                    }

		                    ?>
						<div class="panel-body table-responsive">

						  <table class="table table-striped order-table" id="myTable">
						    <thead>
						      <tr>
						        <th>Title</th>
						        <th>Content</th>
						        <th>Description</th>
						        <th>Category</th>
						        <th>Sub Category</th>
						        <th>Image</th>
						        <th>Action</th>
						      </tr>
						    </thead>
                             <?php
                             $postManageController = new PostManageController();
                             $result = $postManageController->get_all_post();
                             ?>
						    <tbody>
						    <?php
						    foreach ($result as $row) {
						    	# code...
						    
						    ?>
						      <tr>
						        <td><?php echo $row['title'];?></td>
						        <td><textarea rows="2"><?php echo $row['content'];?></textarea></td>
						        <td><textarea rows="2"><?php echo $row['description'];?></textarea></td>
						        <td><?php echo $row['name']?></td>
						        <td><?php echo $row['sub_category_name']?></td>
						        <td><img src="<?php echo BASE_URL ."resources/backend2/post_images/".$row['image'] ;?>" class="img-thumbnail" alt="Brand Image" height="100" width="100"></td>
						        <td>
						          <a href="<?php echo BASE_URL . 'edit-post/' . $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="edit"><i style="color: #f4a425;" class="fa fa-edit fa-lg"></i></a>

						          <?php
				                      if($row['status'] == 1){

				                      ?>
						          <a href="<?php echo BASE_URL . 'unpublished-post-status/' . $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="edit"><i style="color: #f4a425;" class="fas fa-check"></i></a>
				                 <?php } else {?>
						          <a href="<?php echo BASE_URL . 'published-post-status/' . $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="edit"><i style="color: #f4a425;" class="fas fa-times-circle"></i></a>
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