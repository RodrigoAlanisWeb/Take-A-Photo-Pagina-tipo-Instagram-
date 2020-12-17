{{-- Cargar Plantilla --}}
@extends('layout.plantilla')

{{-- Setear Contenido --}}
@section('content')
    <div class="main__post">
        <div class="main__post-img">
            <img src="{{ url('storage' . $data->Image->path) }}" alt="Imagen-post">
        </div>
        <div class="main__post-content">
            <header class="main__post-header">
                <h2 class="main__post-title">
                    {{ $data->title }}
                </h2>
                <a href="#" class="main__post-user">
                    Creado Por: {{ $data->User->name }}
                </a>
            </header>

            <p class="main__post-description">
                {{ $data->description }}
            </p>
            <div class="main__post-extras">
                <span class="main__post-categorie">
                    Categoria: {{ $data->Categorie->name }}
                </span>
                <span class="main__post-date">
                    Creado: {{ $data->created_at }}
                </span>
            </div>      
        </div>
    </div>
    
@endsection