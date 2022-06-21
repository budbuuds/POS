<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Ukuran</th>
            <th>Tanggal Masuk</th>
            <th>Jumlah Masuk</th>
            <th>PJ</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data -> lensa_flexi -> ukuran}}</td>
            <td>{{ $data -> created_at}}</td>
            <td>{{ $data -> jumlah_masuk }}</td>
            <td>{{ $data -> pj }}</td>
        </tr>
    @endforeach
    </tbody>
</table>