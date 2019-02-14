@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h2>All Messages</h2>
    @if (count($messages)> 0)
        @foreach ($messages as $message)
            <ul class="list-group">
                <li class="lsit-group-item">{{$message->name}}</li>
                <li class="lsit-group-item">{{$message->email}}</li>
                <li class="lsit-group-item">{{$message->message}}</li>
            </ul>
        @endforeach
    @endif
</div>
@endsection