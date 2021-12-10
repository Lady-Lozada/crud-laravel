@extends('dashboard.master')
@section('content')
     <h1>Editar Publicación</h1>
     <form action="{{ route('post.update', $post->id) }}" method="PUT">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
@endsection
