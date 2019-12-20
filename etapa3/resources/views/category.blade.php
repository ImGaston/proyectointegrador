@extends('layout')

@section('title')
  {{ $category->name }} - Pitagoras
@endsection

@section('main')

<div class="container">
  <h1 class="mt-2 mb-2 text-uppercase">{{ $category->name }}</h1>
    <div class="row justify-content-center">
      @foreach ($products as $product)
        <a href="/productos/{{ $product->id }}" class="col-12 col-md-4 col-lg-3 mb-4">
          <div class="card">
            <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
              <img src="/storage/{{$product->image_url}}" class="card-img-top">
            <div class="card-body">
              <p class="card-text">{{ $product->name }}</p>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endsection
