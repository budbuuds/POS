<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Merek</th>
            <th>Warna</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>PJ</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td> {{ $data -> frame -> merek}} </td>
            <td> {{ $data -> warna}} </td>
            <td> {{ $data -> jumlah}} </td>
            <td> {{ $data -> created_at}} </td>
            <td> {{ $data -> pj}} </td>
        </tr>
    @endforeach
    </tbody>
</table>