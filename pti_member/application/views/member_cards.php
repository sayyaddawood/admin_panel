<?php $this->load->view('includes/header');?>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <?php $this->load->view('includes/header-nav');?>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
   
       <?php $this->load->view('includes/sidebar');?>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Member Cards</h4>
             
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Personal Info</h4>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >First Name</label
                      >
                      <div class="col-sm-9">
                       <div class="form-group row">
                      <!--<select class="select2 form-select shadow-none"
                        style="width: 100%; height: 36px"
                      >
			  <option>Select</option>  
			   <?php //foreach($MembersRecord as $row) { ?>
                          <option value="<?php // echo $row["id"]; ?>"><?php // echo $row["name"].' '.$row["cnic"]; ?></option>
			  <?php // } ?>
                      </select>-->
			   
		    <input style="width:100%;" type="text" class="form-control" name="BrandName" id="MemberCNIC" autocomplete="off" placeholder="Search By CNIC">
                    
                  </div>
                      </div>
                    </div>
                  
                  </div>
                  <div class="border-top">
		      
                    <div class="card-body">
                      <button type="button" class="btn btn-primary">
                        Show Card
                      </button> <a href="#" class="btn btn-default" id="generate_report"><i class="fa fa-print"></i>&nbsp;Print</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
	  <script>
	    $(function(){

		    $("#MemberCNIC").on("keyup",function () {   
		      //var  txtid      = ($(this).attr('id'));
		      var txtvalue   = $(this).val();
		      $(this).autocomplete({
			source: function(request, response)   {
			$.ajax({
			      url: "<?php echo site_url('MemberCards/AutoCompleteSearch_Member')?>",
			      data: { MemberCNIC:txtvalue},
			      dataType: "json",
			      type: "POST",
			      success: function(data) {
			      response(data);
			      }
			  });
		       },
			  minLength: 2
		      });
		  });
	    });
	   </script>
	  <script>

	    $(function(){
	     $("body").on("click","#generate_report",function(){

	       var MemberId = 1; //$("#PINo").text();
	    //   alert('MemberId');
	       
	       window.open("<?php echo site_url(); ?>MemberCards/PrintMemberCards?MemberId="+MemberId,"","width=1100,height=450,left=150,top=200,toolbar=0,status=0,");
	       });
	     });
	 </script>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          PTI Members @ 2022</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
   
<?php $this->load->view('includes/footer');?>