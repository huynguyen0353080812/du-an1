<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
        </tr>
    </thead>

    <tbody>
        @foreach($laptops as $lap)
        <tr>
            <td>{{ $lap->id }}</td>
            <td>{{ $lap->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>