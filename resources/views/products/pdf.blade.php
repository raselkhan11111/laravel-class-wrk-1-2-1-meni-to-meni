<table border="1">
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
