<?php
 $obj_front_controller = new FrontController();
 // $last_news_cat_one = $obj_front_controller->last_news_category_one();
 // $last_new_cat_two = $obj_front_controller->last_news_category_two();
 // $last_news_category_three = $obj_front_controller->last_news_category_three();
 // $last_news_category_four = $obj_front_controller->last_news_category_four();
 // $last_news_category_five = $obj_front_controller->last_news_category_five();
 $first_category_name = $obj_front_controller->first_category_name();
 $second_categoey_name = $obj_front_controller->second_category_name();
 $thirt_category_name = $obj_front_controller->thirt_category_name();
 $four_category_name = $obj_front_controller->four_category_name();
 $five_category_name = $obj_front_controller->five_category_name();
 $six_category_name = $obj_front_controller->six_category_name();
 $seven_category_name = $obj_front_controller->seven_category_name();
 $eight_catrgory_name = $obj_front_controller->eight_category_name();
 $nine_category_name = $obj_front_controller->nine_category_name();

 $first_category_post = $obj_front_controller->get_all_post_from_category_first();
 $second_category_post = $obj_front_controller->get_all_post_from_category_second();
 $thirt_category_post = $obj_front_controller->get_all_post_from_category_thirt();
 $four_category_post = $obj_front_controller->get_all_post_from_category_four();
 $five_category_post = $obj_front_controller->get_all_post_from_category_five();
 $six_category_post = $obj_front_controller->get_all_post_from_category_six();
 $seven_category_post = $obj_front_controller->get_all_post_from_category_seven();
 $eight_category_post =$obj_front_controller->get_all_post_from_category_eight();
 $nine_category_post = $obj_front_controller->get_all_post_from_category_nine();

 $all_post = $obj_front_controller->all_post();




?>


<!-- first news part  -->
<section id="first-part-news" class="body-color">
	<div class="container py-4">
		<div class="row">
			<div class="col-sm-3">
				<?php if(isset($all_post[0])):?>
				<div class="first-part-news-content">
					<div class="first-part-news-image">
						<a href="<?php echo BASE_URL .'details-post/' .$all_post[0]['id']; ?>"><img src="<?php echo BASE_URL ."resources/backend2/post_images/".$all_post[0]['image'] ;?>" class="rounded mb-3 img-fluid" width="100%" height="150px" alt="Image"></a>
					</div>
					<div class="first-part-news-title first-dateline text-center">
						<a href="<?php echo BASE_URL .'details-post/' .$all_post[0]['id']; ?>"><h6><?php echo $all_post[0]['title']?></h6></a>
						<span class="text-warning text-center"><p><?php echo 'Posted '. $all_post[0]['published_at']?></p></span><hr>
					</div>
				</div>
					<?php endif;?>

				<div class="first-part-news-title first-dateline text-center">
					<a href="<?php echo BASE_URL .'details-post/' .$all_post[2]['id']; ?>"><h6><?php echo $all_post[1]['title']?></h6></a>
					<span class="text-warning"><p><p><?php echo 'Posted '. $all_post[1]['published_at']?></p></p></span><hr>
				</div>

				<div class="first-part-news-title first-dateline text-center">
					<a href="<?php echo BASE_URL .'details-post/' .$all_post[2]['id']; ?>"><h6><?php echo $all_post[2]['title']?></h6></a>
					<span class="text-warning"><p><p><?php echo 'Posted '. $all_post[2]['published_at']?></p></p></span><hr>
				</div>
				<div class="first-part-news-title first-dateline text-center">
					<a href="<?php echo BASE_URL .'details-post/' .$all_post[3]['id']; ?>"><h6><?php echo $all_post[3]['title']?></h6></a>
					<span class="text-warning"><p><p><?php echo 'Posted '. $all_post[3]['published_at']?></p></p></span><hr>
				</div>
			</div>
			<div class="col-sm-6 text-center">
				<div class="first-part-news-content">
					<div class="first-part-news-image">
						<a href="<?php echo BASE_URL .'details-post/' .$all_post[4]['id']; ?>"><img src="<?php echo BASE_URL ."resources/backend2/post_images/".$all_post[4]['image'] ;?>" class="rounded mb-4" width="100%" height="300px" alt="Image"></a>
					</div>
					<div class="first-part-news-title">
						<a href="<?php echo BASE_URL .'details-post/' .$all_post[4]['id']; ?>" class="text-center mb-4"><h3><strong><?php echo $all_post[4]['title']?></strong></h3></a>
						<div class="text-left"><p><?php echo substr($all_post[4]['description'],0,570); echo '......'; ?></p></div>
						<span class="text-warning first-dateline"><p><?php echo 'Posted '. $all_post[4]['published_at']?></span>
					</div>
				</div>
			</div>
			<div class="col-sm-3 text-center">
				<a href="#"><img src="<?php echo BASE_URL; ?>resources/front/images/add2.png" class="rounded mb-4" width="100%" height="200px" alt="Image"></a>
				<div class="first-part-news-content">
					<a href="#"><h3><strong>সাম্প্রতিক খবর</strong></h3></a>
					<?php for ($i=5; $i <=8 ; $i++): ?>
						<?php if(isset($all_post[$i])):?>
					<div class="first-part-news-title first-dateline">
						<a href="<?php echo BASE_URL .'details-post/' .$all_post[$i]['id']; ?>"><h6><?php echo $all_post[$i]['title']?></h6></a>
						<span class="text-warning"><p><?php echo 'Posted '. $all_post[$i]['published_at']?></p></span><hr>
					</div>
					<?php endif;?>
						<?php endfor;?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End first news part -->

<!-- Top news part -->
<section id="topNews">
	<div class="container mt-4">
		<div class="row">
			<div class="col">
					<a href=""><img src="<?php echo BASE_URL; ?>resources/front/images/add4.png" width="100%" height="130px"></a>
				</div>
			<div class="col-sm-12 mt-4">
				<div class="topNews-heading">
					<a href="#"><h3 class="float-left"><strong>শীর্ষ খবর</strong></h3></a>
					<a href="#"><p class="float-right">আরও শীর্ষ খবর</p></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="topNews-content right_border">
					<div class="float-sm-left topNews-image">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/news1.png" class="rounded img-fluid mb-2" width="100%" height="auto" alt="Image">
						</a>
					</div>
					<div class="float-sm-right topNews-article">
						<a href="#"><h4><strong>নগরের মঞ্চগুলো এখনো পায়নি শিল্পকলা একাডেমি</strong></h4></a>
						<p>রাজধানীতে বিকেলে ঝুমবৃষ্টিতে ভোগান্তিতে পড়েন অফিসফেরত মানুষেরা। ঢাকার নাট্যকর্মীদের মাত্র তিনটি মঞ্চ চাহিদামতো বরাদ্দ দিতে হিমশিম খেতে হয় শিল্পকলাকে। এ অবস্থায় নাট্যদলগুলোর চাহিদা মোতাবেক মঞ্চ দেওয়া সম্ভব হয় না।</p>
						<span class="text-warning"><p style="line-height: 0px;">Sep 16 at 1:00 AM</p></span>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="topNews-content right_border d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/news2.png" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>আইইউবিএটিতে ‘ইন-জিনিয়াস’ অ্যাকটিভেশন পর্ব</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div><hr>

				<div class="topNews-content right_border d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/news3.png" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>সৌম্য–মিরাজদের পারফরম্যান্সে চোখ কোচ, নির্বাচকদের</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div><hr>

				<div class="topNews-content right_border d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/image2.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div><hr>

			<div class="topNews-content right_border d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/news5.png" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>রোহিঙ্গা সমস্যা সমাধানে জাতিসংঘে চার দফা প্রস্তাব দেবেন প্রধানমন্ত্রী</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
			</div><hr>
		</div>
			<div class="col-sm-4">
				<div class="topNews-content d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/image1.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div><hr>
				<a href=""><img src="<?php echo BASE_URL; ?>resources/front/images/add5.png" width="100%" height="300px"></a>
			</div>
		</div>
	</div>
</section>
<!-- End top news part -->

<!-- ====== For Carousel ====-->
<section id="ourPicks" class="mt-4">
	<div class="container mt-4">
	<div class="row">
		<div class="col-md-3">
          	<h3 class="text-center catheader py-4">OUR PICKS</h3>
          </div>
        <div class="col-md-8 offset-col-md-1">
         <div id="picksCarousel" class="carousel slide w-100 ourPicks-carousel" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
              <div class="carousel-item row active">
                 
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/picks11.png" style="height: 150px; width: 100%;">
                  </div>
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/picks12.png" style="height: 150px;">
                  </div>
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/picks13.png" style="height: 150px;">
                  </div>
              </div>
              <div class="carousel-item row">
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/picks14.png" style="height: 150px;">
                  </div>
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/picks19.jpg" style="height: 150px;">
                  </div>
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/picks20.jpg" style="height: 150px;">
                  </div>
              </div>
          </div>
          <a class="carousel-control left carousel-control-prev" href="#picksCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#picksCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>

          <!-- <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>
    </div>
</div>
</section>
		
<!--===== End Carousel ====-->




<!-- Comment carousel -->

<!-- End Comment carousel -->


<!-- Sport -->
<section id="topNews" class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="topNews-heading">
					<a href="#"><h3 class="float-left"><strong>খেলাধুলা</strong></h3></a>
					<a href="#"><p class="float-right">আরও খেলাধুলা</p></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="topNews-content right_border">
					<div class="float-sm-left topNews-image">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/sport1.jpg" class="rounded img-fluid mb-2" width="100%" height="auto" alt="Image">
						</a>
					</div>
					<div class="float-sm-right topNews-article">
						<a href="#"><h4>নগরের মঞ্চগুলো এখনো পায়নি শিল্পকলা একাডেমি</h4></a>
						ঢাকার নাট্যাঙ্গনে মঞ্চের অভাব। নাটকের দলগুলো তাই চাইলেও শিল্পকলা একাডেমির মঞ্চ বরাদ্দ পায় না। ঢাকার নাট্যকর্মীদের মাত্র তিনটি মঞ্চ চাহিদামতো বরাদ্দ দিতে হিমশিম খেতে হয় শিল্পকলাকে। এ অবস্থায় নাট্যদলগুলোর চাহিদা মোতাবেক মঞ্চ দেওয়া সম্ভব হয় না।
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="topNews-content right_border d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/sport2.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div><hr>

				<div class="topNews-content right_border d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/sport3.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div><hr>

				<div class="topNews-content right_border d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/sport4.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div><hr>

			<div class="topNews-content right_border d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/sport5.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
			</div><hr>
		</div>
			<div class="col-sm-4">
				<div class="topNews-content d-flex">
					<div class="float-sm-left topNews-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/sport1.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="topNews-article p-2 flex-fill top-dateline">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div><hr>
				<a href=""><img src="<?php echo BASE_URL; ?>resources/front/images/add2.png" width="100%" height="300px"></a>
			</div>
		</div>
	</div>
</section>
<!-- End sport -->

<!--====== Most popular-most commented ====-->

<!--====== End Most popular-most commented -->


<!-- =====================Video part ==============-->
<section id="video">
	<div class="row text-center video_body mt-4">
		<div class="col-sm-12 jumbotron video">
			<h3 class="text-white">VIDEO</h3>
			<div class="embed-responsive embed-responsive-16by9">
			  <iframe width="727" height="409" src="https://www.youtube.com/embed/a18py61_F_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
<!-- =====================End Video part ===========-->

<!-- ========== Event part & event button =============-->
<section id="event-part">
	<div class="container">
    <h3>UPCOMING EVENTS</h3>
    <div class="row">
        <div class="col-12">
            <div class="input-group">
                <input class="form-control border-secondary py-2" type="search" value="What are you looking for?">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

	<div class="container mytext mt-4">
		<div class="row text-center">
			<div class="col-sm-4 col-md-4 col-12 custom_event mr-4 text-center">
			  	<img src="<?php echo BASE_URL; ?>resources/front/images/event1.png" alt="Avatar" class="image img-fluid mb-2" style="height: 270px">
			  	<div class="overlay">
				  	<a href="#" style="color: white; text-decoration: none;">
				  		<p>প্রযুক্তি হতে হবে মঙ্গলের জন্য .অনেক পরিশ্রম করে আলিবাবা নামের প্রতিষ্ঠানটি গড়ে তুলেছেন জ্যাক মা। বিশ্ববাজারে যে প্রতিষ্ঠানটি চীনের ঝান্ডা তুলে ধরেছে সগর্বে। রযুক্তি হতে হবে মঙ্গলের জন্য .অনেক পরিশ্রম করে আলিবাবা নামের প্রতিষ্ঠানটি গড়ে তুলেছেন জ্যাক মা। বিশ্ববাজারে যে প্রতিষ্ঠানটি চীনের ঝান্ডা তুলে ধরেছে সগর্বে।</p>
					</a>
				</div>
			</div>
			
			<div class="col-sm-4 col-md-4 col-12 custom_event mr-4 text-center">
			  <img src="<?php echo BASE_URL; ?>resources/front/images/picks3.jpg" alt="Avatar" class="image img-fluid mb-2" style="height: 270px">
			  <div class="overlay">
			  	<a href="#" style="color: white; text-decoration: none;">
			  		<p>প্রযুক্তি হতে হবে মঙ্গলের জন্য .অনেক পরিশ্রম করে আলিবাবা নামের প্রতিষ্ঠানটি গড়ে তুলেছেন জ্যাক মা। বিশ্ববাজারে যে প্রতিষ্ঠানটি চীনের ঝান্ডা তুলে ধরেছে সগর্বে। রযুক্তি হতে হবে মঙ্গলের জন্য .অনেক পরিশ্রম করে আলিবাবা নামের প্রতিষ্ঠানটি গড়ে তুলেছেন জ্যাক মা। বিশ্ববাজারে যে প্রতিষ্ঠানটি চীনের ঝান্ডা তুলে ধরেছে সগর্বে।</p>
				</a>
				</div>
			</div>

			<div class="col-sm-4 col-md-4 col-12 custom_event mr-4 text-center">
			  <img src="<?php echo BASE_URL; ?>resources/front/images/event2.jpg" alt="Avatar" class="image img-fluid mb-2" style="height: 270px">
			  <div class="overlay">
			  	<a href="#" style="color: white; text-decoration: none;">
			  		<p>প্রযুক্তি হতে হবে মঙ্গলের জন্য .অনেক পরিশ্রম করে আলিবাবা নামের প্রতিষ্ঠানটি গড়ে তুলেছেন জ্যাক মা। বিশ্ববাজারে যে প্রতিষ্ঠানটি চীনের ঝান্ডা তুলে ধরেছে সগর্বে। রযুক্তি হতে হবে মঙ্গলের জন্য .অনেক পরিশ্রম করে আলিবাবা নামের প্রতিষ্ঠানটি গড়ে তুলেছেন জ্যাক মা। বিশ্ববাজারে যে প্রতিষ্ঠানটি চীনের ঝান্ডা তুলে ধরেছে সগর্বে।</p>
				</a>
			  </div>
			</div>
		</div>
	</div>

	<div class="container mytext">
		<div class="row mt-4">
			<div class="col-sm-4">
				<a href="#" class="btn btn-info btn-block btn-color" role="button">আরও ইভেন্ট</a>
			</div>
			<div class="col-sm-4">
				<a href="#" class="btn btn-info btn-block btn-color" role="button">আপনার ইভেন্ট প্রচার করুন</a>
			</div>
			<div class="col-sm-4">
				<a href="#">
					<p class="text-center" style="text-decoration: none;">Powered by Robiul</p>
				</a>
			</div>
		</div>
	</div>
</section>
<!--=========== End Event part & event button ======== -->

<!-- Editor's Choise -->
<section id="editor" class="mt-4">
	<div class="container mt-4">
	<div class="row">
		<div class="col-md-3">
          	<h3 class="text-center catheader py-4">EDITOR'S CHOISE</h3>
          </div>
        <div class="col-md-8 offset-col-md-1">
         <div id="recipeCarousel" class="carousel slide w-100 editor-carousel" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
              <div class="carousel-item row active">
                 
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/editor13.png" style="height: 150px; width: 100%;">
                  </div>
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/editor17.png" style="height: 150px;">
                  </div>
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/image4.jpg" style="height: 150px;">
                  </div>
              </div>
              <div class="carousel-item row">
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/picks3.jpg" style="height: 150px;">
                  </div>
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/picks1.jpg" style="height: 150px;">
                  </div>
                  <div class="col-4 col-xs-4 float-left">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>resources/front/images/editor12.png" style="height: 150px;">
                  </div>
              </div>
          </div>
          <a class="carousel-control left carousel-control-prev" href="#recipeCarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control right carousel-control-next" href="#recipeCarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>

          <!-- <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>
    </div>
</div>
</section>
<!--End Editor's Choise -->


<!-- Photo Gallery -->
<section class="gellary mt-4">
	<div class="gallery-header">
		<a href="#"><h3 class="text-center text-white">PHOTO GALLERIES</h3></a>
	</div>
		<div class="row">
			<div class="col-sm-12 gellary">
				<div class="container12">
				  <img src="<?php echo BASE_URL; ?>resources/front/images/boxing.jpg" alt="Notebook" width="100%" style="width:100%;">
					  <div class="content text-center">
					    <a href="#"><h4>কীভাবে পৃথিবীর সেরা বক্সার</a></h4>
					    <a href="#"><p>কীভাবে পৃথিবীর সেরা বক্সার হয়েছিলেন মোহাম্মদ আলী </p></a>
					    <p>19 september</p>
					  </div>
				</div>
			</div>
		</div>
</section>
<!--End Photo Gallery -->

	<!-- market place -->
<section id="market-place" class="market-place mt-4">
	<div class="row">
		<div class="col-sm-12 py-5">
			<div class="text-center market">
				<h2>MARKET PLACE</h2>
			</div>
		</div>
	</div>
</section>
	<!-- end market place -->

<!-- Entertainment -->
<section id="entertainment">
	<div class="container mt-4">
		<div class="row">
			<div class="col-sm-12">
				<div class="entertainment-heading">
					<a href="#"><h3 class="float-left"><strong>বিনোদন</strong></h3></a>
					<a href="#"><p class="float-right">আরও বিনোদন</p></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="entertainment-content right_border">
					<div class="float-sm-left entertainment-image">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/en1.jpg" class="rounded img-fluid" width="100%" height="auto" alt="Image">
						</a>
					</div>
					<div class="float-sm-right entertainment-article">
						<a href="#"><h4>নগরের মঞ্চগুলো এখনো পায়নি শিল্পকলা একাডেমি</h4></a>
						<p>ঢাকার নাট্যাঙ্গনে মঞ্চের অভাব। নাটকের দলগুলো তাই চাইলেও শিল্পকলা একাডেমির মঞ্চ বরাদ্দ পায় না। ঢাকার নাট্যকর্মীদের মাত্র তিনটি মঞ্চ চাহিদামতো বরাদ্দ দিতে হিমশিম খেতে হয় শিল্পকলাকে। এ অবস্থায় নাট্যদলগুলোর চাহিদা মোতাবেক মঞ্চ দেওয়া সম্ভব হয় না।</p>
						<div class="dateline">
							<span class="text-warning">Sep 16 at 1:00 AM</span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="entertainment-content right_border d-flex">
					<div class="float-sm-left entertainment-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/en2.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="entertainment-article p-2 flex-fill">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<div class="dateline">
							<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
						</div>
					</div>
				</div><hr>

				<div class="entertainment-content right_border d-flex">
					<div class="float-sm-left entertainment-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/entertain1.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="entertainment-article p-2 flex-fill">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<div class="dateline">
							<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
						</div>
					</div>
				</div><hr>

				<div class="entertainment-content right_border d-flex">
					<div class="float-sm-left entertainment-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/entartain2.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="entertainment-article p-2 flex-fill">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<div class="dateline">
							<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
						</div>
					</div>
				</div><hr>

			<div class="entertainment-content right_border d-flex">
					<div class="float-sm-left entertainment-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/entertain4.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="entertainment-article p-2 flex-fill">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<div class="dateline">
							<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
						</div>
					</div>
			</div><hr>
		</div>
			

			<div class="col-sm-4">
				<div class="entertainment-content d-flex">
					<div class="float-sm-left entertainment-image p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/entertain4.jpg" class="rounded mr-3 img-fluid" width="145px" height="100px" alt="Image">
						</a>
					</div>
					<div class="entertainment-article p-2 flex-fill">
						<a href="#"><h6>রিয়েলিটি শোর বিচারকদের স্বাধীনতা চান মৌসুমী</h6></a>
						<div class="dateline">
							<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
						</div>
					</div>
				</div><hr>
				<a href=""><img src="<?php echo BASE_URL; ?>resources/front/images/add6.png" width="100%" height="300px"></a>
			</div>

		</div>
	</div>
</section>
<!-- End entertainment -->

<!-- mughshot face -->
<section id="mughshot" class="mughshot-face mt-4">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mugh-face-header">
				<a href="#"><h3 class="float-left"><strong>MUGSHOTS</strong></h3></a>
				<a href="#"><p class="float-right">MORE MUGSHOTS</p></a>
			</div>
		</div>
	
		<div class="row equal-height-column mt-4 text-center">
			<div class="col-sm-3">
				<div class="equal-column-content">
					<a href="#"><img src="<?php echo BASE_URL; ?>resources/front/images/opinion2.jpg" class="img-fluid" style="height: 250px;"></a>
					<a href="#"><h4>MASHRUKH KHAN</h4></a>
					<div class="text-left"><p>জিপিএইচ ইস্পাত ও প্রথম আলো যৌথভাবে এ প্রতিযোগিতার আয়োজন করেছে</p></div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="equal-column-content">
					<a href="#"><img src="<?php echo BASE_URL; ?>resources/front/images/mughshot2.jpg" class="img-fluid" style="height: 250px;"></a>
					<a href="#"><h4>DENNIS RALPH</h4></a>
					<div class="text-left"><p>শিক্ষার্থীদের মধ্যে এ প্রতিযোগিতা পুরকৌশল বিষয়ে আগ্রহ বাড়াবে</p></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="equal-column-content">
					<a href="#"><img src="<?php echo BASE_URL; ?>resources/front/images/mughshot3.jpg" class="img-fluid" style="height: 250px;"></a>
					<a href="#"><h4>JONS KIBRIA</h4></a>
					<div class="text-left"><p>গতকাল ঢাকা প্রকৌশল বিশ্ববিদ্যালয়ে (ডুয়েট) অ্যাকটিভেশন পর্ব অনুষ্ঠিত হয়</p></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="equal-column-content">
					<a href="#"><img src="<?php echo BASE_URL; ?>resources/front/images/mughshot1.png" class="img-fluid" style="height: 250px;"></a>
					<a href="#"><h4>DEVIT MARIA</h4></a>
					<div class="text-left"><p>অনুষ্ঠানটি পরিচালনা করেন প্রথম আলোর যুব কার্যক্রমের প্রধান মুনির হাসান</p></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End mughshot face -->

	<!-- Comment -->
<section id="comment" class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="comment-heading">
					<a href="#"><h3 class="float-left"><strong>মতামত</strong></h3></a>
					<a href="#"><span class="float-right">আরও মতামত</span></a>
				</div>
			</div>
		</div>
		<div class="row text-justify mt-4">
			<div class="col-sm-4">
				<div class="comment-content right_border">
					<div class="comment-image mb-4">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/opinion.jpg" class="rounded img-fluid" width="100%" height="300px" alt="Image">
						</a>
					</div>
					<div class="comment-article">
						<a href="#"><h4><strong>দেশে শিক্ষা ও মানবিকতার সংকট চলছে</strong></h4></a>
						ড. সেলিম জাহান। ইউএনডিপির মানব উন্নয়ন রিপোর্ট দপ্তরের সাবেক পরিচালক এবং মানব উন্নয়ন প্রতিবেদনের মুখ্য রচয়িতা। ১৯৯২ সালে ইউএনডিপিতে যোগদানের আগে তিনি ঢাকা বিশ্ববিদ্যালয়ে অর্থনীতি বিভাগের অধ্যাপক ছিলেন। আইএলও, ইউএনডিপি, ইউনেসকো ও বিশ্বব্যাংকের পরামর্শক হিসেবেও কাজ করেছেন। অতিথি অধ্যাপকের দায়িত্ব পালন করেছেন যুক্তরাষ্ট্রের মেরিল্যান্ড ইউনিভার্সিটিতে। প্রথম আলোর সঙ্গে সাক্ষাৎকারে উঠে এসেছে বাংলাদেশের আর্থসামাজিক পরিস্থিতির পাশাপাশি বিশ্বায়নের অভিঘাত ও মানব সম্পর্কের গতিবিধি। সাক্ষাৎকার নিয়েছেন সোহরাব হাসান। </
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="comment-content right_border d-flex">
					<div class="comment-image mb-2 float-sm-left p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/opinion3.jpg" class="rounded mr-3 img-fluid" width="145px" height="50px" alt="Image">
						</a>
					</div>
						<div class="comment-article comment-line-height p-2 flex-fill">
							<a href="#"><h6>পেছন যাত্রার মধ্যে গণতন্ত্র নিয়ে আশাবাদ</h6></a>
							<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
						</div>
				</div><hr>
				<div class="right_border d-flex">
					<div class="comment-image mb-2 float-sm-left p-2 flex-fill">
						<a href="#">
							<img src="<?php echo BASE_URL; ?>resources/front/images/opinion4.jpg" class="rounded mr-3 img-fluid" width="145px" height="50px" alt="Image">
						</a>
					</div>
						<div class="comment-article comment-line-height p-2 flex-fill">
							<a href="#"><h6>পেছন যাত্রার মধ্যে গণতন্ত্র নিয়ে আশাবাদ</h6></a>
							<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
						</div>
				</div><hr>
				
				<div class="right_border">
					<div class="comment-article comment-line-height mb-2 float-sm-left">
						<a href="#"><h6>বাংলাদেশ থেকে ভারতের যা শেখার আছে</h6></a>
						<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span><hr>
					</div>
				</div>
				<div class="comment-article comment-line-height mb-2 float-sm-left">
					<a href="#"><h6>আফগানিস্তানে ট্রাম্পের উভয়সংকট</h6></a>
					<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="comment-article comment-line-height">
					<a href="#"><h6>আরব দেশগুলোর ঐক্য কি মারা গেছে?</h6></a>
					<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
				</div><hr>

				<div class="comment-article comment-line-height">
					<a href="#"><h6>আরব দেশগুলোর ঐক্য কি মারা গেছে?</h6></a>
					<span class="text-warning"><p>Sep 16 at 1:00 AM</p></span>
				</div>
				<a href=""><img src="<?php echo BASE_URL; ?>resources/front/images/add7.png" width="100%" height="300px"></a>
			</div>
		</div>
	</div>
</section>	
	<!-- End Comment -->

<!-- Subscribe -->
<section id="daily-brief" class="section-ribbon newsletter">
	<div class="row">
		<div class="col-sm-12 py-5">
			<div class="text-center inbox">
				<h4 class="d-inline-block">
					<span class="fa-stack fa-sm">
					  <i class="fa fa-circle fa-stack-2x icon-background1"></i>
					  <i class="fa fa-envelope fa-stack-1x"></i>
					</span>
					আপনার <span class="text-warning mr-2">ইনবক্সে দৈনিক</span>ব্রিফ পান
				</h4>
				<button type="button" class="btn btn-secondary btn-sm btn-subscribe">Subscribe Now</button>
			</div>
		</div>
	</div>
</section>
<!-- end subscribe -->

<!-- food, health -->
<section id="lifestyle-food-health">
	<div class="container mt-4">
		<div class="row">
			<div class="col-sm-4 right_border">
				<div class="heading">
					<div class="head-top">
						<a href="#"><h3><strong>জীবনধারা</strong></h3></a>
					</div>
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
			</div>
			<div class="col-sm-4 right_border">
				<div class="head-top">
					<a href="#"><h3><strong>খাবার</strong></h3></a>
				</div>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
			</div>
			<div class="col-sm-4">
				<div class="head-top">
					<a href="#"><h3><strong>স্বাস্থ্য</strong></h3></a>
				</div>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
			</div>

		</div>
	</div>
</section>
<!-- End food, health -->

<!-- TV GUIDE, SHAREABLE, FAITH -->
<section id="tv-shareble-faith">
	<div class="container mt-4">
		<div class="row">
			<div class="col-sm-4 right_border">
				<div class="head-top">
					<a href="#"><h3><strong>টিভি নির্দেশিকা</strong></h3></a>
				</div>
				
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
			</div>
			<div class="col-sm-4 right_border">
				<div class="head-top">
					<a href="#"><h3><strong>ভাগ করে নেওয়ার যোগ্য</strong></h3></a>
				</div>	
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
			</div>
			<div class="col-sm-4">
				<div class="head-top">
					<a href="#"><h3><strong>বিশ্বাস</strong></h3></a>
				</div>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
				<div class="heading">
					<div class="headline">
						<a href="#"><h5>নিরাশ বোধ করার সময়, আশা নির্বাচন করুন</h5></a>
					</div>
					<div class="dateline">
						<span class="text-warning my-0">Sep 16 at 1:00 AM</span>
					</div>
				</div><br><hr>
			</div>

		</div>
	</div>
</section>
<!-- End TV GUIDE, SHAREABLE, FAITH

