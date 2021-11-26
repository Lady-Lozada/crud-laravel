@extends('dashboard.master')
@section('content')
     <h1>Editar Publicación</h1>
     <form action="{{ route('post.update') }}" method="post"></form>
@endsection
