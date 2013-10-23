@if(Auth::check())
<h1>Welcome "{{ Auth::user()->username }}"</h1>
@else
<h1>Welcome</h1>
@endif