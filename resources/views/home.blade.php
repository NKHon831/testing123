<div>
    Hello
</div>
<div>
    @foreach($users as $index => $user)
        User {{$index+1}} : {{$user->name}}
    @endforeach
</div>
