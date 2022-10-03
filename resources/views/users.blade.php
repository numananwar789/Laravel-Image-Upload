{{-- <h1> Users List </h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>
    @foreach ($collection as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['first_name']}}</td>
            <td>{{$user['email']}}</td>
            <td><img src={{$user['avatar']}} height="70px" width="90px" alt=""></td>
        </tr>
    @endforeach
</table> --}}


<h1> User Login </h1>
<form action="users" method="POST">
    @csrf
    {{@method_field('DELETE')}}
    <input type="text" name="username" placeholder="Enter user id"/>
    <br><br>
    <input type="password" name="password" placeholder="Enter password"/>
    <br><br>
    <button type="submit"> Login </button>
</form>