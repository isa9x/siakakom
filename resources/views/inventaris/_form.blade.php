<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	{!! Form::label('nama', 'Nama', ['class'=>'col-md-2 control-label']) !!}
	
	<div class="col-md-4">
		{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('id_jenis_barang') ? 'has-error' : ''}}">
	{!! Form::label('id_jenis', 'Jenis Barang', ['class'=>'col-md-2 control-label']) !!}
	
	<div class="col-md-4">
		{!! Form::select('id_jenis_barang', App\JenisBarang::pluck('nama','id'),null,['class'=>'form-control js-selectize'])!!}
		{!! $errors->first('id_jenis_barang', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('modal') ? ' has-error' : '' }}">
	{!! Form::label('modal', 'Harga Modal', ['class'=>'col-md-2 control-label']) !!}
	
	<div class="col-md-4">
		{!! Form::text('modal', null, ['class'=>'form-control']) !!}
		{!! $errors->first('modal', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('jual') ? ' has-error' : '' }}">
	{!! Form::label('jual', 'Harga Jual', ['class'=>'col-md-2 control-label']) !!}
	
	<div class="col-md-4">
		{!! Form::text('jual', null, ['class'=>'form-control']) !!}
		{!! $errors->first('jual', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('stok') ? ' has-error' : '' }}">
	{!! Form::label('stok', 'Stok', ['class'=>'col-md-2 control-label']) !!}
	
	<div class="col-md-4">
		{!! Form::text('stok', null, ['class'=>'form-control']) !!}
		{!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
