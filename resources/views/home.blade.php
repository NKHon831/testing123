<div>
    Hello
</div>
<div>User Details</div>
@if ($error)
    <span><small>Not updated</small></span>
@endif
<div>
    @foreach($users as $index => $user)
        User {{$index+1}} : {{$user->name}}
    @endforeach
</div>
