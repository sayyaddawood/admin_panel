 <?php
    $Controller = $this->uri->segment(1);
 ?>
<!--<div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <!--<ul class="list-inline">
                <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-white"></i> <a class="text-white" href="#">+92 22 6125000</a> </li> <i class="fa fa-mobile text-white"></i> <a class="text-white" href="#">+92 333 2761451</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">info@eliteenterprises.pk</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
		  <i class="fa fa-phone text-white"></i>
		  <a class="text-white" href="#">+92 22 6125000</a> 
		  <i class="fa fa-mobile text-white"></i> 
		  <a class="text-white" href="#">+92 333 2761451</a> </li>
		  <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">info@eliteenterprises.pk</a> </li>
                <!--<li>
                  <a href="#" class="text-white"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white"><i class="fa fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="<?php echo base_url()?>appassets/images/elite_enterprises_logo.jpg" alt="">
            </a>
            <ul class="menuzord-menu">
              <li class="<?php echo ($Controller  == "home") ? "active":""?>"><a href="<?php echo base_url().'home'?>">Home</a></li>
              <li class="<?php echo ($Controller  == "about") ? "active":""?>"><a href="<?php echo base_url().'about'?>">About Us</a></li>
              <li class="<?php echo ($Controller  == "partners") ? "active":""?>"><a href="<?php echo base_url().'partners'?>">Our Partners</a></li>
	      <li class="<?php echo ($Controller  == "services") ? "active":""?>"><a href="<?php echo base_url().'services'?>">Services</a></li>
	      <li class="<?php echo ($Controller  == "contact") ? "active":""?>"><a href="<?php echo base_url().'contact/'?>">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>