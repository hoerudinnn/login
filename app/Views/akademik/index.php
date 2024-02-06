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
								<li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
							</ol>
						</nav>
					</div>
 				
	
 				</div>
			</div>
			<!-- Simple Datatable start -->
			<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Mahasiswa Lulus</h4>
					<p class="mb-0"><a class="text-primary" href="<?= base_url('') ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Mahasiswa Lulus</button></a></p>
				</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">No</th>
								<th>Nama_link</th>
								<th>Nama</th>
								<th>Tanggal</th>
								<th class="datatable-nosort">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
$no = 1;
foreach ($barang as $key => $value) {
    // Tampilkan semua baris tanpa memperhatikan nilai "status"
    $link = (strpos($value->link, 'http') === 0) ? $value->link : 'http://' . $value->link;
?>
    <tr>
        <td class="table-plus"><?= $no++ ?></td>
		<td><a href="<?= $link ?>" target="_blank"><?= $value->nama_link ?></a></td>
        <td><?= $value->nama ?></td>
		<td><?= $value->tanggal ?></td>
        <td>
            <div class="dropdown">
                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <i class="dw dw-more"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="<?= base_url('barang/delete_minimal/' . $value->id_pokja) ?>"><i class="dw dw-delete-3"></i> Delete</a>
                </div>
            </div>
        </td>
    </tr>
<?php
}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>


					</table>
				</div>
			</div>
			<!-- Simple Datatable End -->
			<script>
    $(document).ready(function () {
        $('.data-table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf'
            ]
        });
    });
</script>
</tbody>
