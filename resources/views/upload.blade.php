@extends('layouts.main')

@section('content')

@foreach ($uploads as $upload)

<p>Name: {{$uploads ->name }} <p>

@endforeach

@endsection