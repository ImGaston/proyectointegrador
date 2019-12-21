@extends('layout')

@section('title')
Listado de Categorias
@endsection

@section('main')


<div class="container">

      <h1 class="mt-2 mb-2 text-uppercase">Categorías</h1>
      <ul class="list-group list-group-horizontal">
        @foreach ($categories as $category)
        <li class="list-group-item flex-fill">
          <a  href="{{ route('category', ['categorySlug' => $category->slug]) }}">
            {{ $category->name }}
          </a>
        </li>
        @endforeach
      </ul>


    

  <br>
<a href="/productos-todos">
  <button type="submit" class="btn btn-primary">Ver todo</button>
</a>
</div>
@endsection
