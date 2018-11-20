<?php $this->load->view("header"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Deviden
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Deviden Saham</h3>

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
                        <td><?= $value->name_perusahaan; ?></td>
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