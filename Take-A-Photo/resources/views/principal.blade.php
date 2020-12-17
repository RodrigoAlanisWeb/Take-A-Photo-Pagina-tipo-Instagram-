{{-- Cargar Plantilla --}}
@extends('layout.plantilla')

{{-- Setear Contenido --}}
@section('content')
    <div class="main__articles">
        @foreach ($data as $item)
        <a href="{{ route('post.show',$item->slug) }}" class="main__article">
            <img src="{{ url('storage/base.jpg') }}" alt="Imagen-Post" class="main__article-img">
            <h2 class="main__article-user">
                Creado Por: {{ $item->User->name }}
            </h2>
        </a>
    @endforeach
    </div>   
@endsection