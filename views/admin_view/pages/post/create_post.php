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
            <form class="form-horizontal" action="<?php echo BASE_URL; ?>save-post" method="post" enctype="multipart/form-data">
            	<!-- title -->
                  <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="fas fa-heading"></i></p></div>
                    <div class="form-group col-lg-7 col-xs-10">
                        <input type="text" name="title" class="form-control form-control-line"  placeholder="Enter title ....">
                    </div>
                    <div class="col-lg-2"></div>
                  </div>
                  <!-- description -->
                   <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="fas fa-prescription-bottle"></i></p></div>
                    <div class="form-group col-lg-7 col-xs-10">
                         <textarea class="form-control form-control-line" name="description" placeholder="enter description"  rows="3"></textarea>
                    </div>
                    <div class="col-lg-2"></div>
                  </div>
                   <!-- content -->
                   <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="fas fa-prescription-bottle"></i></p></div>
                    <div class="form-group col-lg-7 col-xs-10">
                         <textarea class="form-control form-control-line" name="content" placeholder="enter content"  rows="3"></textarea>
                    </div>
                    <div class="col-lg-2"></div>
                  </div>
                    <!-- category -->
                    <?php
                     $postManageController = new PostManageController();
                     $result = $postManageController->get_all_category_name();

                    ?>
                   <div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="fas fa-align-justify"></i></p></div>
					<div class="form-group col-lg-7 col-xs-10">
						<select  class="form-control form-control-line" id="category_id" onchange="getSubcategoryByCategoryId();" name="category_id">
							<option selected>Select Category</option>
							<?php
							foreach ($result as $row) {
							?>
                             <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                         <?php }?>
						</select>
					</div>
					<div class="col-lg-2"></div>
				</div>
				<!-- subcategory -->
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="fas fa-align-justify"></i></p></div>
					<div class="form-group col-lg-7 col-xs-10">
						<select class="form-control form-control-line"  name="sub_category_id" id="sub_category_id">
							 <option value="" disabled selected>Select Sub Category</option>
						</select>
					</div>
					<div class="col-lg-2"></div>
				</div>
				<!-- published_at -->
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="far fa-clock"></i></p></div>
					<div class="form-group col-lg-7 col-xs-10">
						<input type="date" name="published_at" class="form-control form-control-line">
					</div>
					<div class="col-lg-2"></div>
				</div>
				<!-- image -->
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-1 col-xs-2" style="padding-top: 9px;"><p><i style="color: #36bcf1;" class="fas fa-image"></i></p></div>
					<div class="form-group col-lg-7 col-xs-10">
						<input type="file" name="image" class="form-control form-control-line">
					</div>
					<div class="col-lg-2"></div>
				</div>
                   
         <div class="row" style="justify-content: center;">
          <button type="submit" class="btn btn-primary">Add Post</button>
        </div>
      <div class="col-lg-2"></div>
    </div>
   </form>
          </div> 
        </div>
      </div>
    </div>

   <!--  <script>    
   $( "#category_id" ) .change(function () {    
      var category_id =  $('#category_id').val();  
      alert(category_id);
    });  
  </script>    
 -->

   <script type="text/javascript">
            
  function getSubcategoryByCategoryId(){
  var category_id=$("#category_id").val();
         // alert(category_id);
  $.ajax({
  url  : "<?php echo BASE_URL . 'get-subcategory-by-category-id'; ?>",
  type : "get",
  data : {category_id:category_id},
  success : function(response){
//          alert(response);
     $('#sub_category_id').html(response);

    },
    error : function(xhr, status){
      alert('There is some error. Try after some time.');
    }
});
  }
    </script>

