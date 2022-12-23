<?php include('includes/header.php'); ?>
<?php
// $postData = $uploadedFile = $statusMsg = '';
 /*
  if(isset($_POST['submit'])){
     $postData = $_POST;
    
    $FullName = $_POST['FullName'];
    $Subject = $_POST['Subject'];
    $Email = $_POST['Email'];
    $ContactNumber = $_POST['ContactNumber'];
    $Message = $_POST['Message'];
        
    // Check whether submitted data is not empty
    if(!empty($Email) && !empty($FullName) && !empty($Subject) && !empty($Message)){
        
        // Validate email
        if(filter_var($Email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        } else {
            $uploadStatus = 1;
       */
           /* if($uploadStatus == 1){
                
                // Recipient
                $toEmail = 'arshadagha@gmail.com'; // 'info@vng.org.pk';

                // Sender Detail
                $from = $Email;
                $fromName = $FullName;
                
                // Subject
                $emailSubject = $FullName.' has submitted Contact Us form';

		$htmlContent = '<center><h2>Contat Us Detail</h2></center>';
		$htmlContent .= '<table style="width:90%;" border="1" cellpadding="2" cellspacing="0">';
		$htmlContent .= '<tbody><tr><td style="text-align:left; width:25%; font-weight:700;">Full Name: </td><td>'.$FullName.'</td></tr>';
		$htmlContent .= '<tbody><tr><td style="text-align:left; width:25%; font-weight:700;">Subject: </td><td>'.$Subject.'</td></tr>';
		$htmlContent .= '<tbody><tr><td style="text-align:left; width:25%; font-weight:700;">Email: </td><td>'.$Email.'</td></tr>';
		$htmlContent .= '<tbody><tr><td style="text-align:left; width:25%; font-weight:700;">Contact Number: </td><td>'.$ContactNumber.'</td></tr>';
		$htmlContent .= '<tbody><tr><td style="text-align:left; width:25%; font-weight:700;">Message: </td><td>'.$Message.'</td></tr>';
		$htmlContent .= '</tbody></table>';
		
                
                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";
		// Set content-type header for sending HTML email
		$headers .= "\r\n". "MIME-Version: 1.0";
		$headers .= "\r\n". "Content-type:text/html;charset=UTF-8";

		// Send email
		$mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                
                // If mail sent
                if($mail){
                $statusMsg = 'Thank you for writing us.';
                   
                $postData = '';
                }else{
                $statusMsg = 'Your detail failed to submit, please try again.';
                } 
            } */
    /*    }
    } else{
        $statusMsg = 'Please fill all the required fields.';
    }
} */
?>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
     <img alt="" src="<?php echo base_url()?>appassets/images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>  
  <!-- Header -->
  <header id="header" class="header">
    <?php include('includes/header-nav.php'); ?>
  </header>
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
      
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url()?>appassets/images/contact/contact-us.jpg" alt=""><!--http://placehold.it/1920x1280-->">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Contact -->
    <section class="divider layer-overlay  overlay-white-1" data-bg-img="images/bg/bg15.jpg">
      <div class="container">
        <div class="row">
	      <?php 
	     // if($this->session->flashdata('form_submitted')) {
	     // echo $this->session->flashdata('form_submitted');
	      //    }
	      ?>
	    <?php // if(!empty($statusMsg)){ ?>
	   <!-- <h3 class="text-black">	      
	      <p style="text-align: center; height: 65px; color: black;">
		   <?php // echo $this->session->flashdata('form_submitted'); ?>
		  <?php //echo $statusMsg; ?></p>
	    <?php //} ?>
	    </h3>-->
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-20">If Interested Write Us</h3>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" action="<?php echo base_url("Contact/SubmitContactUsForm"); ?>" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
		      <label>Full Name: <span style="color: red; font-size: 10px;">  (required)</span></label>
                    <input name="FullName" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email: <span style="color: red; font-size: 10px;">  (required)</span></label>
                    <input name="Email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject: <span style="color: red; font-size: 10px;">  (required)</span></label>
                    <input name="Subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Contact Number</label>
                    <input name="ContactNumber" class="form-control" type="text" placeholder="Enter Contact Number">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message:</label>
                <textarea name="Message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <!-- <input name="form_botcheck" class="form-control" type="hidden" value="" /> -->
		  <input type="submit" name="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" value="Send Your Message">
                <!-- <button type="submit" name="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button> 
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>-->
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
            /*  $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              }); */
            </script>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">OFFICE ADDRESS</strong>
                    <p class="text-white">7/A, Block-B, Unit No 10, Latifabad, Hyderabadd, Sindh, Pakistan</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">CONTACT NUMBERS</strong>
                    <p>Phone: +92 22 6125000</p>
		    <p>Mobile: +92 333 2761451</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">CONTACT EMAIL</strong>
                    <p>info@eliteenterprises.pk</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->  
  <!-- Footer -->
 <?php include('includes/footer.php'); ?>
</div>
<!-- end wrapper --> 