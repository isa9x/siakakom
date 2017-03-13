@extends('layouts.app')
@section('content')

<div class="col-md-12">
	<table class="table table-striped table-bordered">
		<tr>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>Harga Modal</th>
			<th>Harga Jual</th>
			<th>Stok Awal</th>
			<th>Terjual</th>
			<th>Sisa Stok</th>
		</tr>
		<tr>
			<td rowspan='{{$span}}'>{{$barang->nama}}</td>
			<td rowspan='{{$span}}'>{{$barang->jenisBarang->jenis_barang}}</td>
			@foreach($barang->hargaStok as $hargaStok)
				<td> {{$hargaStok->modal}} </td>
				<td> {{$hargaStok->jual}} </td>
				<td> {{$hargaStok->stok}} </td>
				<td> {{$hargaStok->terjual}} </td>
				<td> {{$hargaStok->stok - $hargaStok->terjual}} </td>
		</tr>
			@endforeach
	</table>
</div>
{{-- {{$barang->nama}}
	<br>
	{{$barang->jenisBarang->jenis_barang}}
	<br>
	@foreach($barang->hargaStok as $hargaStok)
		Modal = {{$hargaStok->modal}}
	@endforeach --}}

@endsection