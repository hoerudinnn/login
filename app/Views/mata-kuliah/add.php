<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

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
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
					</div>
				</div>
			</div>

			<!-- Default Basic Forms Start -->
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Tambah Data Mahasiswa Lulus</h4>
					</div>
				</div>
				<?php
				//notifikasi form kosong
				echo validation_errors('<div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

				echo form_open('barang/add_minimal') ?>

			
				<div id="formContainer"></div>
				<div class="form-group row">
            <button type="button" class="btn btn-primary" id="tambahBaris">Tambah Baris</button>
        </div>
				</div>
			
				<div class="form-group row">
					<button type="submit" class="btn btn-success">Tambah Data Mahasiswa Lulus</button>&nbsp;
					<a href="<?= base_url('barang') ?>" class="btn btn-warning">Kembali</a>
				</div>
				</form>
			</div>
			<!-- Default Basic Forms End -->
<!-- Tambahkan ini sebelum tag </body> -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        var formCount = 1; // Inisialisasi nomor form

        // Fungsi untuk menambahkan baris formulir
        $("#tambahBaris").click(function () {
            var newRow = '<div class="form-group row">' +
                '<label class="col-sm-12 col-md-2 col-form-label">NAMA DOCUMENT ' + formCount + '</label>' +
                '<div class="col-sm-12 col-md-10">' +
                '<input class="form-control" name="nama[]" placeholder="Nama" type="text">' +
                '</div>' +
                '<label class="col-sm-12 col-md-2 col-form-label">NAMA LINK</label>' +
                '<div class="col-md-10 col-sm-12">' +
                '<input class="form-control" name="nama_link[]" placeholder="NAMA LINK" type="text">' +
                '</div>' +
                '<label class="col-sm-12 col-md-2 col-form-label">LINK</label>' +
                '<div class="col-md-10 col-sm-12">' +
                '<input class="form-control" name="link[]" placeholder="Link" type="text">' +
                '</div>' +
        
                // Tambahkan baris formulir lainnya di sini sesuai kebutuhan
                '</div>';

            $("#formContainer").append(newRow);
            
            formCount++; // Increment nomor form
        });
    });
</script>

<?= $this->endSection(); ?>