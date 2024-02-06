
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
 <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>          
            <div class="table-responsive">
               <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></a>
</div>       
</div>        


        <div class="card-body">  

            <div class="table-responsive">

                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Solusi</th>
                            <th>Solusi</th>
                                <th>Aksi</th>             
                        </tr>
                    </thead>
                    <tbody>                    
                       
                        <?php $no = 0; foreach($opr as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $row->kd_solusi; ?></td>
                            <td><?php echo $row->solusi; ?></td>
                          <td>
                            <a href="<?php echo base_url('solusi/hapus'); ?>/<?php echo $row->kd_solusi; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="hapus" onclick="return confirm('Yakin mau menghapus ini ?')" ><i class="fa fa-window-close"></i></a>
                             <a href="" data-toggle="modal" data-target="#modal_edit<?php echo $row->kd_solusi;?>" class="btn btn-success"><i class="fa fa-edit"></i></a>          
</td>
                        
                        </tr>
                        <?php endforeach; ?>
                      
                       
                    </tbody>
                </table>                
            </div>
        </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('solusi'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                         <label>Kode Solusi</label>
                        <input type="text" required="" class="form-control"  name="kd_solusi" placeholder="Kode Solusi">
                    </div>
                     
                   <div class="form-group">
                       <label>Solusi</label>
                        <input type="text" class="form-control"  name="solusi" placeholder="Solusi">
                    </div>
                    
              
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" id="btnSubmit" name="btnlogin" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


 <?php 
        foreach($edit->result_array() as $i):
            $kd_solusi=$i['kd_solusi'];
            $solusi=$i['solusi'];
         
        ?>
        <div class="modal fade" id="modal_edit<?php echo $kd_solusi;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
               
            </div>
            <form class="form-horizontal" method="post" action="<?= base_url('solusi/edit'); ?>">
                <div class="modal-body">

                    <div class="form-group">
                         <label>Kode Solusi</label>
                        <input type="text"   class="form-control"   name="kd_solusi" value="<?php echo $kd_solusi;?>" readonly>
                    </div>

                      <div class="form-group">
                         <label>Solusi</label>
                        <input type="text"  class="form-control"  required="" name="solusi" value="<?php echo $solusi;?>" placeholder="Solusi">
                    
                </div>
</div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                  <button type="submit" id="btnSubmit" class="btn btn-primary"> Simpan </button>
                </div>
            </form>
            </div>
            </div>
        </div>
 <?php endforeach;?>
