@extends('layout.app')

@section('content')
  <div class="container mt-5">
    <h1>Hello,</h1>
    <h1>Im {{ $name }},</h1>
    <h1>Im form {{ $location }}</h1>
    
    <a href="{{ url('/landing/profile')}}" class="btn btn-primary">
      Profile
    </a>
  </div>
@endsection