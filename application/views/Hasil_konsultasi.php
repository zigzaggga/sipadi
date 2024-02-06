
<?php

if ($this->session->flashdata('sukses')) {
    ?>
    <div class="col-md-12">
    <div class="bg-success pesan">
        <?php echo $this->session->flashdata('sukses'); ?>
    </div>
     </div>
    <?php
}



?>

<div class="col-md-12">
    <div class="card">
<?php echo $this->session->flashdata('msg'); ?>
        <div class="card-header bg-primary">
          <b><?= $pageTitle; ?></b>
        </div>


        <div class="card-body">  

            <div class="table-responsive">

                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                           
                            <th>ID User</th>
                           
                            <th>Kode CF</th>
                            <th>Kode CBR</th>
                            <th>Nilai CF</th>
                              <th>Nilai CBR</th>
                          
                           
                          
                            <th>Aksi</th>             
                        </tr>
                    </thead>
                    <tbody>                    
                       
                        <?php $no = 0; foreach($opr as $row): ?>
                        <tr>
                            <td><?php echo $row->id_user; ?></td>
                             
                            <td><?php echo $row->kode_cf; ?></td>
                             <td><?php echo $row->kode_cbr; ?></td>
                                <td><?php echo $row->cf; ?></td>
                                 <td><?php echo $row->cbr; ?></td>
                                






                           <td>
                            <a href="<?php echo base_url('hasil_konsultasi/hapus'); ?>/<?php echo $row->id; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="hapus" onclick="return confirm('Yakin mau menghapus ini ?')" ><i class="fa fa-window-close"></i></a>
                                 
</td>
        
                        </tr>
                        <?php endforeach; ?>
                      
                       
                    </tbody>
                </table>                
            </div>
        </div>


