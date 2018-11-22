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
					<form id="frmSubmit" action="<?= site_url(); ?>/Welcome/search" method="post">
          <div class="row margin">
            <div class="col-md-3 col-12">
              <div class="form-group">
								<label>Filter by Number Top Stocks</label>
								<input class="slider1" type="text" value="" 
									data-slider-min="1" data-slider-max="45" data-slider-step="1" data-slider-value="5"
									data-slider-orientation="horizontal" data-slider-id="red"
									/> 
									<span id="slider1Label">Current Number: <span id="slider1Val">5</span></span>
              </div>
						</div>
						<div class="col-md-3 col-12">
							<div class="form-group">
								<label>Filter by Price</label>
									<input class="slider2" type="text" value="" 
									data-slider-min="<?= $firstPrice; ?>" data-slider-max="<?= $lastPrice; ?>" data-slider-step="1" data-slider-value="[<?= $firstPrice; ?>,<?= $lastPrice; ?>]"
									data-slider-orientation="horizontal" data-slider-id="blue"
									/> 
									<span id="slider2Label">Rp<span id="slider2Val"><?= $firstPrice; ?></span></span>
									<span id="slider2Label2" class="pull-right">Rp<span id="slider2Val2"><?= $lastPrice; ?></span></span>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<div class="form-group">
								<label>Filter by Increase Percetage</label>
									<input class="slider3" type="text" value="" 
									data-slider-min="<?= $firstPercent; ?>" data-slider-max="<?= $lastPercent; ?>" data-slider-step="10" data-slider-value="[<?= $firstPercent; ?>,<?= $lastPercent; ?>]"
									data-slider-orientation="horizontal" data-slider-id="blue"
									/> 
									<span id="slider3Label">Low <span id="slider3Val"><?= $firstPercent; ?></span>%</span>
									<span id="slider3Label2" class="pull-right">High <span id="slider3Val2"><?= $lastPercent; ?></span>%</span>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<input type="checkbox" id="dividend_chk" class="filled-in" checked />
							<label for="dividend_chk">Dividends</label> (Every Year)
						</div>
						<div class="col-md-12 col-12" >
							<button id="checkResults" type="button" class="btn btn-info pull-right">Submit</button>
						</div>
					</div>
					</form>
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
				<div class="box-body no-padding">
					<div class="table-responsive">
						<table id="dataResult" class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Symbol</th>
									<th>FirstOffer</th>
									<th>LastCloseOffer</th>
									<th>Percentage Increase</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<!-- new data -->
							</tbody>
						</table>
					</div>
         </div>
      </div>
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
		var slider3 = new Slider('.slider3');
			slider3.on("slide", function(sliderValue) {
				document.getElementById("slider3Val").textContent = sliderValue[0];
				document.getElementById("slider3Val2").textContent = sliderValue[1];
		});

		var frm = $('#frmSubmit');
		var btn = $('#checkResults');
    btn.click(function (e) {
   			var numValue = document.getElementById('slider1Val').textContent;
				var Price1 = document.getElementById('slider2Val').textContent;
				var Price2 = document.getElementById('slider2Val2').textContent;
				var Dividend = document.getElementById('dividend_chk').checked;
				var Percentage = document.getElementById('slider3Val').textContent;

				//e.preventDefault();
				$("#dataResult tbody").empty();				
        $.ajax({
						type: frm.attr('method'),
            url: frm.attr('action'),
            data: {num:numValue, price1: Price1, price2: Price2, dividend: Dividend, percentage:Percentage},
            success: function (data) {
								console.log('Submission was successful.');
								var json = $.parseJSON(data);
								for(var i=0;i<json.length;i++){
									//console.log(json[i]['nama_perusahaan']);
									$("#dataResult").append("<tr><td>" 
											+ (i+1) + "</td><td>"
											+ json[i]['nama_perusahaan'] + "</td><td>"
											+ json[i]['table_name'] + "</td><td>"
											+ json[i]['firstClose'] + "</td><td>"
											+ json[i]['lastClose'] + "</td><td>"
											+ json[i]['percentage'] + "</td><tr>");
								}
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
		});
	</script>
	
</body>

</html>
