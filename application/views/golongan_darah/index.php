<style>
.panel-heading h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: normal;
    width: 75%;
    padding-top: 4px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
<<<<<<< HEAD
            <li class="active"><a href="#">Golongan Darah</a></li>
=======
            <li class="active"><a href="#">Data Golongan Darah</a></li>
>>>>>>> 62caf12253c476ba815acfe16fa562b77fca6179
            </ol>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">
<<<<<<< HEAD
                    Golongan Darah
                    </h3>
                    <a href="<?php echo site_url('golongan_darah/add')?>" class="btn btn-default btn-sm pull-right"><i class="glyphicon glyphicon-user"></i> Tambah Grup</a>
=======
                   Golongan Darah
                    </h3>
                    <a href="<?php echo site_url('golongan_darah/add')?>" class="btn btn-default btn-sm pull-right"><i class="glyphicon glyphicon-user"></i> Tambah Golongan Darah</a>
>>>>>>> 62caf12253c476ba815acfe16fa562b77fca6179
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <?php $this->load->view('layouts/alert')?>
                    <br><br>
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
<<<<<<< HEAD
                            <th>Golongan Darah</th>
=======
                            <th>Jenis Golongan Darah</th>
>>>>>>> 62caf12253c476ba815acfe16fa562b77fca6179
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
<<<<<<< HEAD
                        <?php foreach($golongan_darah as $row) {?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->name ?></td>
=======
                        <?php foreach($gol_darah as $row) {?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->nama ?></td>
>>>>>>> 62caf12253c476ba815acfe16fa562b77fca6179
                            <td>
                                <a href="<?php echo site_url('golongan_darah/edit')?>/<?php echo $row->id ?>" class="label label-warning"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                <a href="<?php echo site_url('golongan_darah/delete')?>/<?php echo $row->id ?>" class="label label-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    var table = $('#example').DataTable();
    var tt = new $.fn.dataTable.TableTools( table );
 
    $( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
} );
</script>