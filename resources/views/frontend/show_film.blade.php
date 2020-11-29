@extends('frontend.layout')
@section('content')
    <the-film :film="{{ $film }}"></the-film>
@endsection
