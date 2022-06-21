<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Ukuran</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td> {{ $data -> ukuran}} </td>
            <td> {{ $data -> stock}} </td>
        </tr>
    @endforeach
    </tbody>
</table>