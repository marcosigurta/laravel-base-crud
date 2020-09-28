@extends('layouts.main-layout')

@section('content')

<ul>
    @foreach ($var as $item)
        <li>
            {{$item -> name}}, {{$item -> lastname}}
        </li>
    @endforeach
</ul>
 

    
@endsection