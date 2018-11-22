<?php $this->load->view("header"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Saham Filter</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	  
    
	  <div class="row">
			<div class="col-lg-12 col-12">
			      <!-- SELECT2 EXAMPLE -->
						<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Find the best Stocks for you</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row margin">
            <div class="col-md-4 col-12">
              <div class="form-group">
								<label>Filter by Number</label>
								<input class="slider1" type="text" value="" 
									data-slider-min="1" data-slider-max="45" data-slider-step="1" data-slider-value="5"
									data-slider-orientation="horizontal" data-slider-id="red"
									/> 
									<span id="slider1Label">Current Number: <span id="slider1Val">5</span></span>
              </div>
						</div>
						<div class="col-md-4 col-12">
							<div class="form-group">
								<label>Filter by Price</label>
									<input class="slider2" type="text" value="" 
									data-slider-min="10" data-slider-max="1000" data-slider-step="1" data-slider-value="[10,1000]"
									data-slider-orientation="horizontal" data-slider-id="blue"
									/> 
									<span id="slider2Label">Rp<span id="slider2Val">1</span></span>
									<span id="slider2Label2" class="pull-right">Rp<span id="slider2Val2">1000</span></span>
							</div>
						</div>
						<div class="col-md-4 col-12">
							<input type="checkbox" id="dividend_chk" class="filled-in" checked />
							<label for="dividend_chk">Dividends</label>
						</div>
						<div class="col-md-12 col-12" >
							<button id="checkResults" type="submit" class="btn btn-info pull-right">Submit</button>
						</div>
              
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
		</div>

		<div class="col-lg-12 col-12">
			<!-- SELECT2 EXAMPLE -->
			<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Results</h3>
        </div>
      </div>
		</div>

		<div class="col-lg-4 col-12">
			<!-- Doughnut CHART -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">List Saham</h4>

					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
					<ul class="list-inline text-right">
						<li>
							<h5><i class="fa fa-circle mr-5 text-info"></i>Inquery</h5>
						</li>
						<li>
							<h5><i class="fa fa-circle mr-5 text-danger"></i>Conform</h5>
						</li>
					</ul>
				  <div class="chart" id="bar-chart" style="height: 300px;"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
		</div>

		<div class="col-lg-4 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">List Saham</h4>

                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body chart-responsive">
					<ul class="list-inline text-right">
						<li>
							<h5><i class="fa fa-circle mr-5 text-info"></i>Commercial</h5>
						</li>
						<li>
							<h5><i class="fa fa-circle mr-5 text-success"></i>Residential</h5>
						</li>
					</ul>
              <div class="chart" id="revenue-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
	  </div>
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view("footer"); ?>
<!-- Lion_admin dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('resource/') ?>js/pages/dashboard.js"></script>

<!-- Bootstrap slider -->
<script type="text/javascript" src="<?php echo base_url('resource/') ?>assets/vendor_plugins/bootstrap-slider/bootstrap-slider.js"></script>
	<script>
		/*Custom Javascript */
		
		var slider1 = new Slider('.slider1');
		slider1.on("slide", function(sliderValue) {
			document.getElementById("slider1Val").textContent = sliderValue;
		});
		var slider2 = new Slider('.slider2');
			slider2.on("slide", function(sliderValue) {
				document.getElementById("slider2Val").textContent = sliderValue[0];
				document.getElementById("slider2Val2").textContent = sliderValue[1];
		});
	</script>
	
</body>

</html>
