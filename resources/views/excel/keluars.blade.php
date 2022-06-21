<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Ukuran</th>
            <th>Tanggal Keluar</th>
            <th>Jumlah Keluar</th>
            <th>PJ</th>
            <th>Tujuan</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data -> solution -> ukuran}}</td>
            <td>{{ $data -> created_at}}</td>
            <td>{{ $data -> jumlah_keluar }}</td>
            <td>{{ $data -> pj }}</td>
            <td>{{ $data -> tujuan -> toko }}</td>
        </tr>
    @endforeach
    </tbody>
</table>