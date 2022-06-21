<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Faktur</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Frame</th>
            <th>Lensa</th>
            <th>Ukuran</th>
            <th>Stock/Gosok</th>
            <th>Harga</th>
            <th>Sisa</th>
            <th>PJ</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td> {{$data -> faktur}} </td>
            <td> {{$data -> hari}} </td>
            <td> {{$data -> updated_at}} </td>
            <td> {{$data -> frame}} </td>
            <td> {{$data -> lensa}} </td>
            <td> {{$data -> ukuran}} </td>
            <td> {{$data -> stokgosok}} </td>
            <td> {{$data -> harga}} </td>
            <td> {{$data -> sisa}} </td>
            <td> {{$data -> pj}} </td>
        </tr>
    @endforeach
    </tbody>
</table>