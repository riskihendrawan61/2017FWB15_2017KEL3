@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data kendaraan </strong>
		<a href="{{url('kendaraan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> kendaraan </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Jenis </th>
				<th> Merk</th>
				<th> ID Wajib Pajak</th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=(1+($data->CurrentPage()-1)*10);?>

			@foreach ($data as $kendaraan)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $kendaraan->Jenis or 'kosong' }}</td>
					<td>{{ $kendaraan->merk or 'kosong' }}</td>
					<td>{{ $kendaraan->wajibpajak->nama or 'nama kosong' }}</td>
					
		
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('kendaraan/edit/'.$kendaraan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<!-- <a href="{{url('kendaraan/'.$kendaraan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a> -->
						<a href="{{url('kendaraan/hapus/'.$kendaraan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>

<div align="center">
		{{ $data->render()}}
	</div>
@stop