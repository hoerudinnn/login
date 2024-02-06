<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4><?= $title ?></h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
					</div>
				</div>
			</div>
				<br>
				<br>
			</div>
			<!-- Input Validation End -->

			<!-- Simple Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Data Rekapan</h4>
					<!-- <p class="mb-0">you can find more options <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a></p> -->
				</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">No</th>
								<th>Nama Dokumen</th>
								<th>Link Dokumen</th>
								<th>Tanggal</th>
							</tr>
						</thead>
						<tbody>
							<?php $j = 1;
							foreach ($combined_data as $key => $minst) {
							?>
								<tr>
									<td class="table-plus"><?= $j++ ?>
									<td><?= $minst->link ?></td>
									<td><?= $minst->nama_paket ?></td>
									<td><?= $minst->nama_link ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
<!-- Simple Datatable End -->
<?= $this->endSection(); ?>