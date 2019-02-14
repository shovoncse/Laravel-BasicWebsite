@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1>Our Services</h1>
    <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It
        includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
    <p>
        <a class="btn btn-lg btn-primary" href="/services" role="button">View More &raquo;</a>
    </p>
</div>
@endsection

@section('sidebar')
    @parent
    <h2>Hello Sidebar</h2>
@endsection