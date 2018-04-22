@extends('layouts.app')

@section('content')
@guest
<div class="container-fluid" id="title-guest">
    <div class="row">
        <h1 class="text-white col">Welcome to DevDesk !</h1>
    </div>
</div>

@else

<div class="container-fluid">
    <ul>
        @foreach ($snippets as $snippet)
        <li>{{ $snippet->title }} || {{ $snippet->user }}</li>
        @endforeach
    </ul>
</div>

@endguest
@endsection
