<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Masuk</th>
            <th>Frame</th>
            <th>Harga</th>
            <th>Keluar</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td> {{ $data -> kode}} </td>
            <td> {{ $data -> masuk}} </td>
            <td> {{ $data -> frame}} </td>
            <td> {{ $data -> harga}} </td>
            <td> {{ $data -> keluar}} </td>
        </tr>
    @endforeach
    </tbody>
</table>