
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
	      <?php
              $subCategoryManageController = new SubcategoryManageController();
              $result = $subCategoryManageController->get_all_subcategory();

	      ?>
		<div class="panel-body table-responsive">

		  <table class="table table-striped order-table" id="myTable">
		    <thead>
		      <tr>
		        <th>Subcategory Name</th>
                <th>Category Name</th>
                <th>Action</th>
		      </tr>
		    </thead>
		    <tbody>
		        <?php
		        foreach ($result as $row) {
		        	
		        
		        ?>
		      <tr>
		        <td><?php echo $row['sub_category_name']?></td>
		        <td>
		        	<?php
		        	$category_id = $row['category_id'];
		        	$category_name = $subCategoryManageController->get_category_name_by_category_id($category_id);
		        	echo $category_name['name'];

		        	?>
		        </td>
		        <td>
		          <a href="<?php echo BASE_URL . 'delete-subcategory/' . $row['id']; ?>"  onclick="return confirm('Are you sure you want to delete this subcategory?');"data-toggle="tooltip" data-placement="top" title="delete"><i style="color: red;" class="fa fa-trash fa-lg"></i></a>

		          <a href="<?php echo BASE_URL . 'edit-subcategory/' . $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="edit"><i style="color: #f4a425;" class="fa fa-edit fa-lg"></i></a>
                  
                   <?php
                      if($row['status'] == 1){

                      ?>
		          <a href="<?php echo BASE_URL . 'unpublish-subcategory-status/' . $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="edit"><i style="color: red;" class="fas fa-check fa-lg"></i></a>
                 <?php } else {?>
		          <a href="<?php echo BASE_URL . 'publish-subcategory-status/' . $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="edit"><i style="color: #f4a425;" class="fas fa-times-circle fa-lg"></i></a>
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