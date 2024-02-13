@extends('layouts.blog.template')
@section('title', 'Blog Café pra DEV | Página inicial')
@section('content')
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://alkasoft.com.br/wp-content/uploads/2017/09/imagem125_2-700x321.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://alkasoft.com.br/wp-content/uploads/2017/09/imagem125_2-700x321.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://alkasoft.com.br/wp-content/uploads/2017/09/imagem125_2-700x321.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="row mt-4">
    <div class="col-12">
        <h1>DESTAQUES</h1>
    </div>
  </div>

  <div class="row">
    @foreach ($articles as $a)
    <div class="col col-sm-12 col-md-4">   
        <div class="card">
            <img src="https://alkasoft.com.br/wp-content/uploads/2017/09/imagem125_2-700x321.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$a->title}}</h5>
            <p class="card-text">{{$a->preview}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
  </div>
@endsection