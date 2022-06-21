<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengiriman Optik Emeral</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pengiriman Optik Emeral</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th> No. </th>
                <th> Invoice </th>
                <th> Tanggal </th>
                <th> PJ </th>
                <th> Nama Distributor </th>
			</tr>
		</thead>
		<tbody>
			@php $no=1 @endphp
			@foreach ($data_laporan as $laporan)

             <tr>
               <td> {{ $no++ }} </td>
			   {{-- <td> <img src="{{asset('images/'.$laporan -> invoice)}}" height="75px"> </td> --}}
			   <td> <img src="{{ public_path().'/images/'.$laporan -> invoice }}" height="75px"> </td>
               <td> {{$laporan -> created_at}} </td>
               <td> {{$laporan -> pj}} </td>
               <td> {{$laporan -> nama_dis}} </td>
             </tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>