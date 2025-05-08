<h1>Your Servers</h1>
<ul>
    @foreach($servers as $server)
        <li>{{ $server->name }}</li>
    @endforeach
</ul>