
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
                            <th>Kode Hama Dan Penyakit</th>
                            <th>Nama Hama Dan Penyakit</th>
                              <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Jenis</th>
                                <th>Aksi</th>             
                        </tr>
                    </thead>
                    <tbody>                    
                       
                        <?php $no = 0; foreach($opr as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $row->kd_hmp; ?></td>
                            <td><?php echo $row->nama_hmp; ?></td>
                              <td><?php echo $row->deskripsi; ?></td>
                              <!--   <td><img src="gambar/<?php echo $row->gambar;?>"  width="50%" height="20%"> -->
                                 <td><a href="<?php echo base_url('/gambar/'.$row->gambar) ?> "  target="_blank" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="lihat">Lihat</a></td>
                                   </td>
                                  <td><?php echo $row->jenis; ?></td>
                          <td>
                            <a href="<?php echo base_url('hama_penyakit/hapus'); ?>/<?php echo $row->kd_hmp; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="hapus" onclick="return confirm('Yakin mau menghapus ini ?')" ><i class="fa fa-window-close"></i></a>
                             <a href="" data-toggle="modal" data-target="#modal_edit<?php echo $row->kd_hmp;?>" class="btn btn-success"><i class="fa fa-edit"></i></a>          
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
            <form action="<?= base_url('hama_penyakit'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                         <label>Kode Hama Dan Penyakit</label>
                        <input type="text" required="" class="form-control"  name="kd_hmp" placeholder="Kode Hama Dan Penyakit">
                    </div>
                     
                   <div class="form-group">
                       <label>Nama Hama Dan Penyakit</label>
                        <input type="text" class="form-control"  name="nama_hmp" placeholder="Nama Hama Dan Penyakit">
                    </div>
                     <div class="form-group">
                       <label>Deskripsi</label>
                        <input type="text" class="form-control"  name="deskripsi" placeholder="Deskripsi">
                    </div>
                     <div class="form-group">
                       <label>Gambar</label>
                        <input type="file" class="form-control"  name="gambar" placeholder="Gambar">
                    </div>
                     <div class="form-group">
                       <label>Jenis</label>
                        <input type="text" class="form-control"  name="jenis" placeholder="Jenis">
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
            $kd_hmp=$i['kd_hmp'];
            $nama_hmp=$i['nama_hmp'];
             $deskripsi=$i['deskripsi'];
              $jenis=$i['jenis'];
               $gambar=$i['gambar'];
         
        ?>
        <div class="modal fade" id="modal_edit<?php echo $kd_hmp;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
               
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('hama_penyakit/edit'); ?>">
                <div class="modal-body">

                    <div class="form-group">
                         <label>Kode Hama Dan Penyakit</label>
                        <input type="text"   class="form-control"   name="kd_hmp" value="<?php echo $kd_hmp;?>" placeholder="Kode Hama Dan Penyakit">
                    </div>

                      <div class="form-group">
                         <label>Nama Hama Dan Penyakit</label>
                        <input type="text"  class="form-control"  required="" name="nama_hmp" value="<?php echo $nama_hmp;?>" placeholder="Hama Dan Penyakit">
                    
                </div>
             <div class="form-group">
                       <label>Deskripsi</label>
                        <input type="text" class="form-control"  name="deskripsi" placeholder="Deskripsi"  value="<?php echo $deskripsi;?>">
                    </div>
                     <div class="form-group">
                       <label>Gambar</label>
                        <input type="file" class="form-control"  name="gambar" placeholder="Gambar" >
                    </div>
                     <div class="form-group">
                       <label>Jenis</label>
                        <input type="text" class="form-control"  name="jenis" value="<?php echo $jenis;?>">
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
