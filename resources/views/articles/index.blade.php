@extends('layouts.app')

@section('content')
  <div class="container">
    @foreach($articles as $article)
      @include('card')
    @endforeach
    {{ $articles->links() }}
  </div>
@endsection