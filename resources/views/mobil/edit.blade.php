<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Mobil 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-success" href="{{ route('mobils.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('mobils.update',$mobils->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $mobils->nama }}" required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">Warna</label>	
			  			<input type="text" value="{{ $mobils->warna }}" name="warna" class="form-control"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('transmisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Transmisi</label>	
			  			<input type="text" value="{{ $mobils->transmisi }}" name="transmisi" class="form-control"  required>
			  			@if ($errors->has('transmisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('transmisi') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('tahun_keluar') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun Keluar</label>	
			  			<input type="text" value="{{ $mobils->tahun_keluar }}" name="tahun_keluar" class="form-control"  required>
			  			@if ($errors->has('tahun_keluar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_keluar') }}</strong>
                            </span>
                        @endif
			  		</div>  

					<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" value="{{ $mobils->harga }}" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" value="{{ $mobils->deskripsi }}" name="deskripsi" class="form-control"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>  

			  		<div class="form-group {{ $errors->has('tipe_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Tipe Mobil</label>	
			  			<select name="tipe_id" class="form-control">
			  				@foreach($tipes as $data)
			  				<option value="{{ $data->id }}" {{ $selectedtipe == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('tipe_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tipe_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
					  <div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Mobil</label>	
			  			<select name="kategori_id" class="form-control">
			  				@foreach($kategoris as $data)
			  				<option value="{{ $data->id }}" {{ $selectedktg == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection