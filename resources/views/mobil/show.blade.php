<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Mobil 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-success" href="{{ route('mobils.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $mobils->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Warna</label>
						<input type="text" name="warna" class="form-control" value="{{ $mobils->warna }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Transmisi</label>
						<input type="text" name="transmisi" class="form-control" value="{{ $mobils->transmisi }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Tahun Keluar</label>
						<input type="date" name="tahun_keluar" class="form-control" value="{{ $mobils->tahun_keluar }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Harga</label>
						<input type="text" name="harga" class="form-control" value="{{ $mobils->harga }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Deskripsi</label>
						<input type="text" name="deskripsi" class="form-control" value="{{ $mobils->deskripsi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tipe Mobil</label>
						<input type="text" name="tipe_id" class="form-control" value="{{ $mobils->Tipe->nama }}"  readonly>
			  		</div>
			  		
					<div class="form-group">
			  			<label class="control-label">Kategori Mobil</label>
						<input type="text" name="kategori_id" class="form-control" value="{{ $mobils->Kategori->nama }}"  readonly>
			  		</div>
  
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection