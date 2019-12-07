@extends('layout')

@section('title')
  Digital House Market
@endsection

@section('main')
  <h1>Estás en la home</h1>
  <ul>
    @foreach ($categories as $category)
    <li>
      <a href="{{ route('category', ['categorySlug' => $category->slug]) }}">
        {{ $category->name }}
      </a>
    </li>
    @endforeach
  </ul>
@endsection