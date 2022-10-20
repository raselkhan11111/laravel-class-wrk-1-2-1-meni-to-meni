<table border="1">
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($colors as $color)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $color->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
