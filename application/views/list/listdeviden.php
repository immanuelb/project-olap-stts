<?php $this->load->view("header"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Deviden
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>List</a></li>
        <li class="breadcrumb-item active">List Deviden</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Deviden Saham</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
				<div class="table-responsive">
				  <table class="table table-hover">
					<tr>
					  <th>ID</th>
					  <th>Name</th>
					  <th>Minimal</th>
					  <th>Average</th>
					  <th>Maximal</th>
                      <th>Dividend</th>
                    </tr>
                    <?php $data = json_decode($data); ?>
                    <?php foreach($data as $key => $value){ ?>
                       <tr>
                        <td><a href="javascript:void(0)"><?= $value->id_perusahaan; ?></a></td>
                        <td><a href="<?= site_url("lists/detaildevided/$value->table_name") ?>"><?= $value->name_perusahaan; ?></a></td>
                        <td><?= number_format($value->min_div,2,",","."); ?></td>
                        <td><?= number_format($value->avg_div,2,",","."); ?></td>
                        <td><?= number_format($value->max_div,2,",","."); ?></td>
                        <td><?php if($value->dividend == 1){ ?>
                            <span class="label label-success">Yes</span>
                            <?php }else{ ?>
                            <span class="label label-danger">No</span>
                            <?php }; ?>
                        </td>
                        </tr>
                    <?php } ?>
				  </table>
				</div>
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

</body>

</html>
