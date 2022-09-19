<h1>AEONime</h1>

<p>Welcome {{ $user->name }}</p>

<p>Click the link to verified your account</p>

<p>
    <a href="{{ url('/verification/' . $user->id . '/' . $user->remember_token) }}">Click to verified</a>
</p>
