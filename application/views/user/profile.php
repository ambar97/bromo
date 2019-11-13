<?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
 <section>
	<!-- START: POST LISTING -->
	<div class="row">
		<div class="container clear-padding">
			<div>
				<div class="col-md-4 col-sm-4 booking-sidebar">
					<div class="sidebar-item recent-post">
						<h4><i class="fa fa-clock-o"></i>Popular Posts</h4>
						<div class="sidebar-body">
							<div class="wrapper">
								<div class="col-md-3 col-sm-3 col-xs-3 clear-padding">
									<img src="<?php echo base_url()?>master/client/assets/images/offer1.jpg" alt="cruise">
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9">
									<a href="#">A Lesson in Kindess While Hitchhiking Through Iceland</a>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="wrapper">
								<div class="col-md-3 col-sm-3 col-xs-3 clear-padding">
									<img src="<?php echo base_url()?>master/client/assets/images/offer2.jpg" alt="cruise">
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9">
									<a href="#">Contrary to popular belief, Lorem Ipsum is not simply.</a>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="wrapper">
								<div class="col-md-3 col-sm-3 col-xs-3 clear-padding">
									<img src="<?php echo base_url()?>master/client/assets/images/offer3.jpg" alt="cruise">
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9">
									<a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="wrapper">
								<div class="col-md-3 col-sm-3 col-xs-3 clear-padding">
									<img src="<?php echo base_url()?>master/client/assets/images/offer1.jpg" alt="cruise">
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9">
									<a href="#">A Lesson in Kindess While Hitchhiking Through Iceland</a>
								</div>
							</div>
						</div>
					</div>
					<div class="sidebar-item sidebar-subscribe">
						<h4><i class="fa fa-paper-plane"></i>Subscribe</h4>
						<div class="sidebar-body">
							<p>Subscribe to our monthly newletter. We promise we will never send spam.</p>
							<div class="text-center">
								<form >
									<input class="form-control" type="email" required placeholder="Enter Yout Email">
									<button type="submit"><i class="fa fa-paper-plane"></i> SUBSCRIBE</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-sm-8">
					<div class="post-wrapper">
						<img src="<?php echo base_url()?>master/client/assets/images/blog2.jpg" alt="cruise">
						<div class="post-body">
							<h3>A Lesson in Kindess While Hitchhiking Through Iceland</h3>
							<p><i class="fa fa-tags"></i><a href="#">Travel</a>, <a href="#">Asia</a><i class="fa fa-comments"></i><a href="#">22 Comments</a></p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
						</div>
						<div class="post-footer">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<h5>Aug 01, 2015/ By <a href="#">Admin</a></h5>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 read-more clear-padding">
								<a href="#" class="pull-right">READ MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: POST LISTING -->
</section>
		<?php $this->load->view("user/side/footer"); ?>

 <?php $this->load->view("user/side/js"); ?>
</body>
</html>