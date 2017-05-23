@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data wajibpajak </strong>
		<a href="{{url('wajibpajak/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> kendaraan </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama </th>
				<th> Jenis kelamin </th>
				<th> Alamat </th>
				<th> Telepon </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=(1+($data->CurrentPage()-1)*10);?>

			@foreach ($data as $wajibpajak)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $wajibpajak->nama or 'nama kosong' }}</td>
					<td>{{ $wajibpajak->jekel or 'jenis kelamin kosong' }}</td>
					<td>{{ $wajibpajak->alamat or 'alamat kosong' }}</td>
					<td>{{ $wajibpajak->telepon or 'telepon kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('wajibpajak/edit/'.$wajibpajak->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('wajibpajak/'.$wajibpajak->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('wajibpajak/hapus/'.$wajibpajak->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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