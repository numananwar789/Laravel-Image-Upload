<h1>Add New User</h1>
@if(session('user'))
<h3>Data Saved for {{session('user')}}</h3>    
@endif
<form action="/storecontroller" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter user name"> <br> <br>
    <input type="password" name="password" placeholder="enter user pasword"> <br> <br>
    <input type="email" name="email" placeholder="enter user email"> <br> <br>
    <button type="submit"> Add User </button>
</form>