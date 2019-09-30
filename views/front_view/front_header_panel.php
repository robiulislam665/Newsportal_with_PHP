<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
	
	<button type="button" class="navbar-toggler btn-sm float-left" data-toggle="collapse" data-target="#mynav">
		sections<span class="navbar-toggler-icon fa-xs"></span>
	</button>
	<div class="collapse navbar-collapse mynavbar" id="mynav">
		<ul class="navbar-nav text-sm">
			<!-- <li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link" href="#"><img src="<?php echo BASE_URL; ?>resources/front/images/logo12.png" width="150px" height="35px"></a>
			</li>
			<?php
				 $frontController = new FrontController();
				 $result = $frontController->get_limit_headline();
				 if($result){


				 foreach ($result as $row) {

				?>
			<li class="nav-item">
				<a class="nav-link" href="#"><?php echo $row['name']; ?></a>
			</li>
		<?php } } ?>
		</ul>

		<form class="form-inline my-2 my-sm-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0 btn-sm" type="submit"><i class="fa fa-search"></i></button>
	    </form>
	</div>
    <button type="button" class="btn btn-secondary ml-2 mynav">log in</button>
</nav>