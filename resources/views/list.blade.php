<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image List</title>
</head>

<body>
    <h1>Image List</h1>
    {{-- <ul>
        @foreach ($products as $item)
            <li>
                {{ $item->id }}<img src="{{ asset('storage/images/' . $item->name) }}" alt="image">
            </li>
        @endforeach
    </ul> --}}

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Image</th>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $item->name) }}" alt="image" width="100px" height="100px">
                        {{-- <img src="{{ asset('storage/Pulmonol.png') }}" alt="image" width="100px" height="100px"> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/upload">
        <button type="button" style="margin-top: 20px; padding: 10px">Add New Image</button>
    </a>
</body>

</html>










{{-- <h1>Members List</h1>

<table border="1">
    <tr>
        <td align="center">ID</td>
        <td align="center">Name</td>
        <td align="center">Email</td>
        <td align="center">Address</td>
        <td align="center">Operation</td>
    </tr>

@foreach ($members as $member)
    <tr>
        <td align="center">{{$member['id']}}</td>
        <td align="center">{{$member['name']}}</td>
        <td align="center">{{$member['email']}}</td>
        <td align="center">{{$member['address']}}</td>
        <td align="center"><a href={{'delete/'.$member['id']}}> Delete </a> 
                           <a href={{'edit/'.$member['id']}}> Edit </a></td>
    </tr>
@endforeach
</table> --}}

{{-- <div>
    {{$members->links()}}
</div>

<style>
    .w-5{
        display: none;
    }
</style> --}}
