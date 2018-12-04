<?php $this->load->view("header"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          List Saham
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> List</a></li>
        <li class="breadcrumb-item"><a href="#">List Saham</a></li>
        <li class="breadcrumb-item active"><a href="#"><?= $this->uri->segment(3); ?></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-lg-6 col-12">
        <!-- Doughnut CHART -->
        <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Value Saham</h4>

          <ul class="box-controls pull-right">
            <li><a class="box-btn-close" href="#"></a></li>
            <li><a class="box-btn-slide" href="#"></a></li>
            <li><a class="box-btn-fullscreen" href="#"></a></li>
          </ul>
        </div>
        <div class="box-body">
          <ul class="list-inline text-right">
            <li>
              <h5><i class="fa fa-circle mr-5 text-info"></i>Open</h5>
            </li>
            <li>
              <h5><i class="fa fa-circle mr-5 text-danger"></i>Close</h5>
            </li>
          </ul>
          <div class="chart" id="bar-chart-saham" style="height: 300px;"></div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <div class="col-lg-6 col-12">
      <!-- AREA CHART -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Value Saham</h4>

            <ul class="box-controls pull-right">
              <li><a class="box-btn-close" href="#"></a></li>
              <li><a class="box-btn-slide" href="#"></a></li>
              <li><a class="box-btn-fullscreen" href="#"></a></li>
            </ul>
        </div>
        <div class="box-body chart-responsive">
      <ul class="list-inline text-right">
        <li>
          <h5><i class="fa fa-circle mr-5 text-info"></i>Open</h5>
        </li>
        <li>
          <h5><i class="fa fa-circle mr-5 text-success"></i>Close</h5>
        </li>
      </ul>
          <div class="chart" id="area-chart-saham" style="height: 300px;"></div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

 
      <div class="col-lg-12 col-12">
       <!-- table -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Saham</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
      <div class="table-responsive">
        <table class="table table-hover">
        <tr>
          <th>ID</th>
          <th>Tanggal</th>
                    <th>Open</th>
                    <th>High</th>
          <th>Low</th>
          <th>Close</th>
          <th>Adj Close</th>
                    <th>Volume</th>
                  </tr>
                  <?php $data = json_decode($data); ?>
                  <?php $saham = $this->uri->segment(3); $i=0; ?>
                  <?php foreach($data as $key => $value){ $i++; ?>
                      <tr>
                      <td><a href="javascript:void(0)"><?= $value->id ?></a></td>
                      <td><?= date("D,d-M-Y",strtotime($value->Tanggal)); ?></td>
                      <td><?= $value->Buka; ?></td>
                      <td><?= $value->High; ?></td>
                      <td><?= $value->Low; ?></td>
                      <td><?= $value->Tutup; ?></td>
                      <td><?= $value->Adj_Close; ?></td>
                      <td><?= $value->Volume; ?></td>
                      </tr>
                  <?php } ?>
        </table>
      </div>
          </div>
          <!-- /.box-body -->
          <?= $links; ?>
        </div>
        <!-- /.box -->
      </div>
    </div>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view("footer"); ?>
  <script type="text/javascript">
    
    var base_url = "<?= base_url(); ?>";
    var saham = "<?= $saham ?>";
    var results;
    
    $.ajax({
        url:base_url+'index.php/lists/getChartDataSaham',
        method: 'post',
        data: { saham: saham},
        dataType: 'json',
        success: function(response){
            updatechart(response);
        },
        error: function(err){
            console.log(err);
        }
    });
    
    function updatechart(res){

      //Saham BAR CHART
      var bar = new Morris.Bar({
        element: 'bar-chart-saham',
        resize: false,
        data: res,
          barColors: ['#03a9f3', '#fb9678'],
          barSizeRatio: 0.5,
          barGap:0,
          xkey: 'year',
          ykeys: ['open', 'close'],
          labels: ['Opening', 'Closing'],
          hideHover: 'auto',
          xLabelAngle: 60
      });

      // Area CHART
      var area = new Morris.Area({
        element: 'area-chart-saham',
        resize: false,
        data: res,
          xkey: 'year',
          ykeys: ['open', 'close'],
          labels: ['Opening', 'Closing'],
          fillOpacity: 0,
          lineWidth:0.5,
          lineColors: ['#03a9f3', '#00c292'],
          hideHover: 'auto',
          xLabels: 'year',
          xLabelAngle: 60
      });
    }
      

  </script>
</body>

</html>
