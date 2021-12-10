@extends('dashboard.master')
@section('content') <!-- Aca se debe poner todo el contenido que se mostrara en la pagina -->
    <h6>Crear Publicación</h6>
    <form action="{{ route('post.store') }}" method="POST">
        @include('dashboard.post._form')
    </form>
@endsection

