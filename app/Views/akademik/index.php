<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10 ml-3">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4><?= $title ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Dokumen</h4>
                    <p class="mb-4"><a class="text-primary" href="<?= base_url('') ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Dokumen</button></a></p>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">No</th>
                                <th>Nama Document</th>
								<!-- <th>Deskripsi</th> -->
                                <th>Link Document</th>
                                <th>Tanggal</th>
                                <th class="datatable-nosort text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $i = 1; ?>
                            <?php foreach ($dokumen as $index) : ?>
                                <tr>
									<th scope="row"><?= $i++; ?></th>
									<td><?= $index['nama_dokumen'] ?></td>
									<!-- <td><?= $index['deskripsi_dokumen'] ?></td> -->
                                    <td><a href="<?= $index['link_dokumen'] ?>" target="_blank"><?= $index['link_dokumen'] ?></a></td>
									<td><?= $index['tanggal'] ?></td>
                                    <td>
										<div class="text-center">
											<a href="<?= base_url('dokumen/detail/' . $index['id']) ?>" class="btn btn-info">Detail</a>
											<a href="<?= base_url('dokumen/edit/' . $index['id']) ?>" class="btn btn-warning">Edit</a>
											<a href="<?= base_url('dokumen/delete/' . $index['id']) ?>" class="btn btn-danger">Delete</a>
										</div>
									</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
