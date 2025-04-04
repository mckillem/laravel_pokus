@extends('layouts.app')

@section('sidebar')
@@parent
<p>This is appended to the master sidebar.</p>
@endsection

@section('content')
@@parent
<p>This is my body content.</p>
@endsection

<a href="/kontakt">Kontakt</a>

@forelse ($services as $service)

<ul>
    <li>
        <a href="detail/{{ $service->url }}">{{ $service->title }}</a>
    </li>
</ul>

@empty

<p>Žádné služby</p>

@endforelse
