            <div class="main-container">
                <div class="sidebar">
                    <nav class="sidebar-nav">
                             <?php if($this->session->userdata('akses') === 'operator'): ?>
                        <ul class="nav">
                            <li class="nav-title">Menu</li>

                            <li class="nav-item">
                                <a href="<?php echo site_url('dashboard'); ?>" class="nav-link">
                                    <i class="icon icon-speedometer"></i>Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo site_url('hama_penyakit'); ?>" class="nav-link">
                                    <i class="icon icon-people"></i>Hama Dan Penyakit
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="<?php echo site_url('gejala'); ?>" class="nav-link">
                                    <i class="icon icon-people"></i>Gejala
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="<?php echo site_url('Solusi'); ?>" class="nav-link">
                                    <i class="icon icon-people"></i>Solusi dan penanganan
                                </a>
                            </li>
                              <li class="nav-item">
                                <a href="<?php echo site_url('basis_pengetahuan'); ?>" class="nav-link">
                                    <i class="icon icon-people"></i>Basis Pengetahuan
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="<?php echo site_url('hasil_konsultasi'); ?>" class="nav-link">
                                    <i class="icon icon-people"></i>Hasil Diagnosa
                                </a>
                            </li>
                               
                                                  
                              <?php endif; ?>   
                            

                        </ul>
                    </nav>
                </div>