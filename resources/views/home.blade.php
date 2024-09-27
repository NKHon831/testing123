<div>
    Hello
</div>
<div>User Details</div>
@if (is_null($users))
    <span><small>No user data </small></span>
@else
<div>
    @foreach($users as $index => $user)
        User {{$index+1}} : {{$user->name}}<br>
    @endforeach
</div>
@endif
