<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Member 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('promos.create') }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  		<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $promos->nama }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">E-Mail</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $promos->email }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Password</label>	
			  			<input type="text" name="password" class="form-control" value="{{ $promos->password }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $promos->alamat }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="mobil_id" class="form-control" value="{{ $promos->Mobil->nama }}"  readonly>
			  		</div>    
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection