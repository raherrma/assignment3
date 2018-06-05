@extends ('layouts.master')

@section ('content')
    
<form action="/my-handling-form-page" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="pwd" name="pwd">
    </div>
    <div class="button">
        <button type="submit">Register user</button>
    </div>
</form>

@endsection