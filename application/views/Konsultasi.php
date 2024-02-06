   <section id="konsultasi" class="d-flex align-items-center">
    <div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
      <div>
              <div class="text-error input-prepend pull-left">
                  <h4>Pilih Gejala Apa Saja Yang Ada Pada Padi</h4>
                </div>
                <div class="input-prepend pull-right">
                  <a href="<?php echo base_url(''); ?>"><button class="btn btn-danger btn-medium" title="Keluar dan konsultasi sebagai User yang lain"><span class="icon-off icon-white"></span> Kembali</button></a>
                </div>
                <div style="margin-top:10px">
                    <form name="form1" method="post" action="">
						<input type="hidden" name="id_user" value="<?php echo $idBiodata; ?>">
                        <table class="table table-condensed table-hover">
                            <?php $no = 0; foreach($opr as $row): ?>
                                    <tr>
                                        <td class='text-center' width='2%'> <input type="checkbox" name="gejala[]"  value='<?php echo $row->id; ?>'></td>
                                        <td class='text-left text-error' width='98%'><?php echo $row->kd_gejala; ?> - <?php echo $row->nama_gejala; ?></td>    
                                    </tr>
                                <?php endforeach; ?>
                        </table>
                        <div>
                           <button type="submit" name="submit" class="btn main-btn" style="background-color: #41C1FF;  border-radius: 0px;">Proses</button>
                        </div>
                            
                       
                    </form>
        </div>
      </div>
    </div>
</div>
  </section>

