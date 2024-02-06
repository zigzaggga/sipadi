
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
                        <!--     <th>Kode Basis Pengetahuan</th> -->
                            <th>Nama Hama Dan Penyakit</th>
                             <th>Gejala</th>
                              <th>MB</th>
                               <th>MD</th>
                                <th>Bobot</th>

                              
                                <th>Aksi</th>             
                        </tr>
                    </thead>
                    <tbody>                    
                       
                        <?php $no = 0; foreach($opr as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                       <!--      <td><?php echo $row->kd_bsp; ?></td> -->
                            <td><?php echo $row->nama_hmp; ?></td>
                            <td><?php echo $row->nama_gejala; ?></td>
                            <td><?php echo $row->mb; ?></td>
                            <td><?php echo $row->md; ?></td>
                            <td><?php echo $row->bobot; ?></td>
                             
                          <td>
                            <a href="<?php echo base_url('basis_pengetahuan/hapus'); ?>/<?php echo $row->kd_bsp; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="hapus" onclick="return confirm('Yakin mau menghapus ini ?')" ><i class="fa fa-window-close"></i></a>
                             <a href="" data-toggle="modal" data-target="#modal_edit<?php echo $row->kd_bsp;?>" class="btn btn-success"><i class="fa fa-edit"></i></a>          
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('basis_pengetahuan'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                         <label>Kode Hama Dan Penyakit</label>
                        <input type="text" required="" class="form-control"  name="penyakit_id" placeholder="Kode Hama Dan Penyakit">
                    </div>
                     
                   <div class="form-group">
                       <label>Kode Gejala</label>
                        <input type="text" class="form-control"  name="gejala_id" placeholder="Nama Hama Dan Penyakit">
                    </div>
                     <div class="form-group">
                       <label>MB</label>
                        <input type="text" class="form-control"  name="mb" placeholder="MB">
                    </div>
                     <div class="form-group">
                       <label>MD</label>
                        <input type="text" class="form-control"  name="md" placeholder="MD">
                    </div>
                 <div class="form-group">
                       <label>Bobot</label>
                        <input type="text" class="form-control"  name="bobot" placeholder="Bobot">
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
            $penyakit_id=$i['penyakit_id'];
            $kd_bsp=$i['kd_bsp'];
             $gejala_id=$i['gejala_id'];
              $mb=$i['mb'];
               $md=$i['md'];
                $bobot=$i['bobot'];
           
         
        ?>
        <div class="modal fade" id="modal_edit<?php echo $kd_bsp;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
               
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('basis_pengetahuan/edit'); ?>">
                <div class="modal-body">

                     <div class="form-group">
                         <label>Kode Hama Dan Penyakit</label>
                        <input type="text" required="" class="form-control"  name="penyakit_id" value="<?php echo $penyakit_id;?>">
                        <input type="hidden" required="" class="form-control"  name="kd_bsp" value="<?php echo $kd_bsp;?>">
                    </div>
                     
                    <div class="form-group">
                       <label>Kode Gejala</label>
                        <input type="text" class="form-control"  name="gejala_id" value="<?php echo $gejala_id;?>">
                    </div>
                     <div class="form-group">
                       <label>MB</label>
                        <input type="text" class="form-control"  name="mb" value="<?php echo $mb;?>">
                    </div>
                     <div class="form-group">
                       <label>MD</label>
                        <input type="text" class="form-control"  name="md" value="<?php echo $md;?>">
                    </div>
                 <div class="form-group">
                       <label>Bobot</label>
                        <input type="text" class="form-control"  name="bobot" value="<?php echo $bobot;?>">
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
 <?php endforeach;?>
