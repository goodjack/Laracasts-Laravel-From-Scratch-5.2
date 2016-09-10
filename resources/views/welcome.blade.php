@extends('layout')

@section('content')
    {{--
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
        </div>
    </div>
    --}}

    {{--
    @if (empty($people))
        There are no people.
    @else
        Something else here.
    @endif
    --}}

    {{-- unless == not if --}}
    @unless (empty($people))
        There are some people.
    @endunless

    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach

@stop