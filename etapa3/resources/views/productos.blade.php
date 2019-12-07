@extends('layout')

@section('title')
Listado de Productos
@endsection

@section('main')


<div class="container">

      <h1 class="my-4">Categorías</h1>
      <ul>
        @foreach ($categories as $category)
        <li>
          <a href="{{ route('category', ['categorySlug' => $category->slug]) }}">
            {{ $category->name }}
          </a>
        </li>
        @endforeach
      </ul>

    

  <br>
<a href="/productos-todos">
  <button type="submit" class="btn btn-primary">Ver Todo</button>
</a>
</div>
@endsection
