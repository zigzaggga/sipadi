
<div class="row">
    <div class="col-md-12">    
        <div class="alert alert-dismissible alert-success">Halo <?php echo $this->session->userdata('nama'); ?>. Selamat Datang Di Sistem Pakar Diagnosa Hama Dan Penyakit Pada Tanaman Padi.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>    
    </div>
     
     <?php if($this->session->userdata('akses') === 'operator'): ?>    
       
    <div class="col-md-6">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                   
                       
                        <span class="font-weight-light">Jumlah Penyakit Yang Tersimpan : <?php echo $penyakit; ?></span>
                    </a>
                </div>
                <div class="h2 text-muted">
                    
                        <i class="fa fa-archive"></i>
                  
                </div>
            </div>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                   
                       
                        <span class="font-weight-light">Jumlah Gejala Yang Tersimpan : <?php echo $gejala; ?></span>
                    </a>
                </div>
                <div class="h2 text-muted">
                    
                        <i class="fa fa-archive"></i>
                  
                </div>
            </div>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                   
                       
                        <span class="font-weight-light">Jumlah Solusi Yang Tersimpan : <?php echo $solusi; ?></span>
                    </a>
                </div>
                <div class="h2 text-muted">
                    
                        <i class="fa fa-archive"></i>
                  
                </div>
            </div>
        </div>
    </div>    
  <div class="col-md-6">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                   
                       
                        <span class="font-weight-light">Jumlah Kasus Yang Tersimpan : <?php echo $kasus; ?></span>
                    </a>
                </div>
                <div class="h2 text-muted">
                    
                        <i class="fa fa-archive"></i>
                  
                </div>
            </div>
        </div>
    </div>    


    
    <?php endif; ?>

   
    