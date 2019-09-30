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
                  echo "<h5 class='text-danger'>" . $_SESSION['err_message'] . "</h5>";
                  $_SESSION['err_message'] = "";
              }

              if (isset($_SESSION['exception_message'])) {
                  echo "<h5 class='text-danger'>" . $_SESSION['exception_message'] . "</h5>";
                  $_SESSION['exception_message'] = "";
              }
              ?>
            <form class="form-horizontal" action="<?php echo BASE_URL; ?>save-subcategory" method="post">

            	 <div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="fa fa-users-cog fa-lg"></i></p></div>
							<div class="form-group col-lg-7 col-xs-10">
								<select class="form-control form-control-line" id="sel1" name="category_id">
									<option selected>Select Category</option>
									<?php
                                        $subcategoryManageController = new SubcategoryManageController();
                                        $result=$subcategoryManageController->get_all_category_name();
                                        foreach ($result as $row){
                                        ?>
                                        <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                        <?php
                                        }
                                        ?>
								</select>
							</div>
							<div class="col-lg-2"></div>
						</div>

	                  <div class="row">
	                    <div class="col-lg-2"></div>
	                    <div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="fas fa-align-justify"></i></p></div>
	                    <div class="form-group col-lg-7 col-xs-10">
	                        <input type="text" name="sub_category_name" class="form-control form-control-line" id="exampleInputAmount2" placeholder="Enter sub Category ....">
	                    </div>
	                    <div class="col-lg-2"></div>
	                  </div>
	                 <div class="row" style="justify-content: center;">
	                  <button type="submit" class="btn btn-primary">Add Sub Category</button>
	                </div>
	              <div class="col-lg-2"></div>
            </div>
            </form>
          </div> 
        </div>
      </div>
    </div>