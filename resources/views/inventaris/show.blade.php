@extends('layouts.app')
@section('content')

<div class="col-md-12">
	<table class="table table-striped table-bordered">
		<tr>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>Harga Modal</th>
			<th>Harga Jual</th>
			<th>Terjual</th>
			<th>Sisa Stok</th>
		</tr>
		<tr>
			<td rowspan='{{$span}}'>{{$barang->nama}}</td>
			<td rowspan='{{$span}}'>{{$barang->jenisBarang->jenis_barang}}</td>
		</tr>
				@foreach($barang->hargaStok as $hargaStok)
					<tr> <td rowspan='{{$span}}'> {{$hargaStok->modal}} </td> </tr>
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