<style type="text/css">
	table td, table th {
		border: 1px solid black;
		border-radius: 2px;
	}

	th {
		background: #6d7ae0;
		color: white;
		font-weight: bold;
	}

	.tx-center {
		text-align: center;
	}
</style>
<div class="container">
	<br />
	<h4 class="tx-center">Laporan Jahitan</h4>
	<table>
		<tr>
			<th class="tx-center">No</th>
			<th>Nama Jahitan</th>
			<th>Ongkos Jahitan</th>
			<th>Jumlah Jahitan</th>
			<th>Total Harga</th>
			<th>Tanggal Masuk</th>
			<th>Tanggal Keluar</th>
		</tr>
		@foreach ($tailors as $key => $item)
		<tr>
			<td class="tx-center">{{ ++$key }}</td>
			<td>{{ $item->nama_jahitan }}</td>
			<td>{{ $item->ongkos_jahitan }}</td>
			<td>{{ $item->jumlah_jahitan }}</td>
			<td>{{ $item->total_harga }}</td>
			<td>{{ $item->tgl_masuk }}</td>
			<td>{{ $item->tgl_diambil }}</td>
		</tr>
		@endforeach
	</table>
</div>