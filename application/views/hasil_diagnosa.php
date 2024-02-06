<section class="call-to-action-area section-gap "
		 style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important; padding:60px 120px;"
		 id="printTable">
	<!-- <div class="content" style="padding:10px 40px;"> -->
	<center><h2>Hasil Analisis</h2></center>
	<br>
	<div class="box-body table-responsive">
			<table id="tbl-list" class="table table-bordered">
				<tr>
					<th width="50px" style="background: #67CDFF; color: white">Biodata</th>
					<th style="background: #67CDFF; color: white"></th>
				</tr>
				
				<tr>
					<td>Nama</td>
					<td><?php echo $nama;?></td>
				</tr>
				
				<tr>
					<td>Alamat</td>
					<td><?php echo $alamat;?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><?php echo $pekerjaan;?></td>
				</tr>
				
				
				</tr>
			</table>
		</div><!--box body-->
	
	
		<div class="box-body table-responsive">
			<table id="tbl-list" class="table table-bordered">
				<tr>
					<th width="50px" style="background: #67CDFF; color: white">No</th>
					<th style="background: #67CDFF; color: white">Gejala</th>
				</tr>
				<tr>
					<?php $i = 1;
					foreach ($listGejala->result() as $value){ ?>
				<tr>
					<td width="30px"><?php echo $i++ ?></td>
					<td><?php echo $value->kd_gejala . " - " . $value->nama_gejala ?></td>
				</tr>
				<?php } ?>
				
				</tr>
			</table>
		</div><!--box body-->
	
	<div class="box box-success">
		<div class="box-header with-border">
			<h6 class="box-title">Hasil Diagnosa CF</h6>
		</div><!-- /.box-header -->
		<div class="box-body">
			<table id="tbl-list" class="table table-bordered">
				<tr>
					<th width="50px" style="background: #67CDFF; color: white">No</th>
					<th style="background: #67CDFF; color: white">Penyakit / Hama</th>
					<th style="background: #67CDFF; color: white">Nilai CF</th>
				</tr>
				<tr>
					<?php $i = 1;
					foreach ($listPenyakit

					as $value){ ?>
				<tr>
					<td width="30px"><?php echo $i++ ?></td>
					<td><?php echo $value['kd_hmp'] . " - " . $value['nama_hmp'] ?></td>
					<td><?php echo round($value['cf'],3) ?> </td>
				</tr>
				<?php } ?>
				</tr>
			</table>
		</div><!--box body-->
	</div><!--box-->

	<div class="box box-success">
		<div class="box-header with-border">
			<h6 class="box-title">Kesimpulan</h6>
		</div><!-- /.box-header -->
		<div class="box-body">
			<?php if (sizeof($listPenyakit) > 0) { ?>
				<p>
					Berdasarkan gejalanya, tanaman padi di prediksi mengidap 
					<b><?php echo $listPenyakit[0]['kd_hmp']; ?> - <?php echo $listPenyakit[0]['nama_hmp']; ?></b> dengan nilai CF
					<b><?php echo round($listPenyakit[0]['cf'],3); ?> </b><br/>
					<?php echo $listPenyakit[0]['deskripsi']; ?>
			<?php } else { ?>
				<p>
					Penyakit tidak dapat diprediksi karena nilai cf gejala terlalu rendah
				</p>
			<?php } ?>

		
				
		
		</div><!--box body-->

		

	<div class="box box-success">
		<div class="box-header with-border">
			<h6 class="box-title">Hasil Diagnosa CBR</h6>
		</div><!-- /.box-header -->
		<div class="box-body">
			<table id="tbl-list" class="table table-bordered">
				<tr>
					<th width="50px" style="background: #67CDFF; color: white">No</th>
					<th style="background: #67CDFF; color: white">Penyakit</th>
					<th style="background: #67CDFF; color: white">Nilai CBR</th>
				</tr>
				<tr>
					<?php $i = 1;
					$n = 0;
					foreach ($cbr[4] as $value){ ?>
				<tr>
					<td width="30px"><?php echo $i++ ?></td>
					<td><?php echo $value; ?></td>

					<td><?php echo round($cbr[1][$n++], 1); ?> </td>
				</tr>
				<?php } ?>
				</tr>
			</table>
		</div><!--box body-->
	</div><!--box-->


	<div class="box box-success">
		<div class="box-header with-border">
			<h6 class="box-title">Kesimpulan</h6>
		</div><!-- /.box-header -->
		<div class="box-body">
			<?php if (sizeof($cbr[2]) == 1) { ?>
				<p>
					Berdasarkan gejalanya, tanaman padi di prediksi mengidap <b><?php echo $cbr[4][$cbr[2][0]]; ?></b> dengan
					nilai CBR <b><?php echo round($cbr[1][$cbr[2][0]], 3); ?></b><br/>
					<?php echo $cbr[3][$cbr[2][0]]; ?>. <p style="font-style: bold; color: red; font-size: 13px;"></p>
				</p>
			<?php } elseif (sizeof($cbr[2]) > 1) { ?>
					<ol>


				<?php $i = 0;
				foreach ($cbr[2] as $value) { ?>
						<li>


					<p>
						Berdasarkan gejalanya, tanaman padi di prediksi mengidap <b><?php echo $cbr[4][$value]; ?></b>
					dengan nilai CBR <b><?php echo round($cbr[1][$value], 3); ?></b><br/>
					<?php echo $cbr[3][$value]; ?><?php $i++;
					if ($i < sizeof($cbr[2])) { ?>

					<?php } else { ?>. <p style="font-style: bold; color: red; font-size: 13px;"></p>

					<?php } ?>
					</p>
						</li>
				<?php } ?>
					</ol>
			<?php } elseif (sizeof($cbr[2] <= 0)) { ?>
				<p>
					Penyakit tidak dapat diprediksi karena tingkat kepercayaan gejala terlalu rendah
				</p>
			<?php } ?>
		</div><!--box body-->


		<div class="box-footer clearfix">
			<a class="btn btn-sm btn-flat pull-right" style="background: #67CDFF; color: white;"
			   href="<?php echo site_url() ?>konsultasi">Deteksi Ulang</a>
		

		</div>

		
	</div><!--box-->


	</div>
</section>
 
