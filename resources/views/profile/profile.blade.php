@extends('layout.app')

@section('content')
<div class="container d-flex justify-content-center" >
  <div class="row ">
      <div class="col">
        <div class="card mb-3">
          <img src="{{ asset("img/profile.jpeg") }}" class="card-img-top" style="width: 300px">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection