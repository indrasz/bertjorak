<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Subscribed on</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row[0] }}</td>
                <td>{{ $row[1] }}</td>
                <td>{{ $row[2] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
