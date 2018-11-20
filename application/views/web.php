<?php $this->load->view("header"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	  
    
	  <div class="row">

		<div class="col-lg-4 col-12">
			<!-- Doughnut CHART -->
			  <div class="box">
				<div class="box-header with-border">
				  <h5 class="box-title">Daily Inquery</h5>

					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<div class="box-body">
				  <div class="box-body chart-responsive">
					  <div class="chart" id="daily-inquery" style="height: 310px;"></div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
		</div>

		<div class="col-lg-4 col-12">
			<!-- Doughnut CHART -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Booking Status</h4>

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
              <h4 class="box-title">Revenue Statistics</h4>

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

		<div class="col-lg-6 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Resent Inquery</h4>

                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
				<div class="table-responsive">
				  <table class="table">
					<tbody>
						<tr>
						  <th>#</th>
						  <th>Name</th>
						  <th>Property Type</th>
						  <th>Date</th>
						  <th>Status</th>
						  <th>Contact Number</th>
						</tr>
						<tr>
						  <td>1.</td>
						  <td>Jacob</td>
						  <td>
							<span class="badge bg-danger">Commercial</span>
						  </td>
						  <td>2019-Apr-04</td>
						  <td>
							<span class="badge bg-info">Open</span>
						  </td>
						  <td>124 548 1254</td>
						</tr>
						<tr>
						  <td>2.</td>
						  <td>William</td>
						  <td>
							<span class="badge bg-success">Residential</span>
						  </td>
						  <td>2019-Apr-15</td>
						  <td>
							<span class="badge bg-info">Open</span>
						  </td>
						  <td>845 548 1254</td>
						</tr>
						<tr>
						  <td>3.</td>
						  <td>Jayden</td>
						  <td>
							<span class="badge bg-danger">Commercial</span>
						  </td>
						  <td>2019-Apr-18</td>
						  <td>
							<span class="badge bg-info">Open</span>
						  </td>
						  <td>568 965 1254</td>
						</tr>
						<tr>
						  <td>4.</td>
						  <td>Michael</td>
						  <td>
							<span class="badge bg-danger">Commercial</span>
						  </td>
						  <td>2019-Apr-22</td>
						  <td>
							<span class="badge bg-warning">On Hold</span>
						  </td>
						  <td>965 854 1254</td>
						</tr>
						<tr>
						  <td>5.</td>
						  <td>Alexander</td>
						  <td>
							<span class="badge bg-success">Residential</span>
						  </td>
						  <td>2019-Apr-04</td>
						  <td>
							<span class="badge bg-info">Open</span>
						  </td>
						  <td>632 987 1254</td>
						</tr>
						<tr>
						  <td>6.</td>
						  <td>Anthony</td>
						  <td>
							<span class="badge bg-success">Residential</span>
						  </td>
						  <td>2019-Apr-04</td>
						  <td>
							<span class="badge bg-info">Open</span>
						  </td>
						  <td>321 456 1254</td>
						</tr>
					  </tbody>
					</table>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

		<div class="col-lg-6 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Project Sales</h4>

                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
				<div class="table-responsive">
				  <table class="table">
					<tbody>
						<tr>
						  <th>#</th>
						  <th>Project Name</th>
						  <th>Property Type</th>
						  <th>Sold Unite</th>
						  <th>Unsold Unite</th>
						  <th>Totle Unite</th>
						</tr>
						<tr>
						  <td>1.</td>
						  <td>Ipsum-zlm Tower</td>
						  <td>
							<span class="badge bg-danger">Residential</span>
						  </td>
						  <td>85</td>
						  <td>41</td>
						  <td>126</td>
						</tr>
						<tr>
						  <td>2.</td>
						  <td>Monek-pro Villa</td>
						  <td>
							<span class="badge bg-success">Residential</span>
						  </td>
						  <td>75</td>
						  <td>65</td>
						  <td>140</td>
						</tr>
						<tr>
						  <td>3.</td>
						  <td>Zila-pro Complex</td>
						  <td>
							<span class="badge bg-danger">Commercial</span>
						  </td>
						  <td>98</td>
						  <td>45</td>
						  <td>143</td>
						</tr>
						<tr>
						  <td>4.</td>
						  <td>Akil-xlm Tower</td>
						  <td>
							<span class="badge bg-danger">Residential</span>
						  </td>
						  <td>96</td>
						  <td>45</td>
						  <td>141</td>
						</tr>
						<tr>
						  <td>5.</td>
						  <td>Duler-vista Villa</td>
						  <td>
							<span class="badge bg-success">Residential</span>
						  </td>
						  <td>154</td>
						  <td>85</td>
						  <td>239</td>
						</tr>
						<tr>
						  <td>6.</td>
						  <td>Willsbro Complex</td>
						  <td>
							<span class="badge bg-success">Commercial</span>
						  </td>
						  <td>124</td>
						  <td>58</td>
						  <td>182</td>
						</tr>
					  </tbody>
					</table>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

		<div class="col-12 col-lg-8">

		  <!-- quick email widget -->
          <div class="box">
            <div class="box-header">
              <i class="fa fa-envelope"></i>
              <h4 class="box-title">Quick Email</h4>
              	<ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea b-1 p-10 w-p100" placeholder="Message"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
            </div>
          </div>

        </div>
		<div class="col-12 col-lg-4">

          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Calendar</h4>

              <ul class="box-controls pull-right">
				  <li class="dropdown">
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ti-more-alt rotate-90"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-114px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                      <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                      <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                      <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                    </div>
                  </li>
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body p-0">
              <!-- THE CALENDAR -->
              <div id="calendar" class="dask"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
	  </div>
      <!-- /.row -->
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view("footer"); ?>