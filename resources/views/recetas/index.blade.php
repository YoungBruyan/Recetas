@extends('layouts.app ')

@section('botones')

<a href="{{ route('recetas.create')}}" class="btn btn-primary">Crear nueva receta</a>
    
@endsection

@section('content')

    <h2>Administrar Recetas</h2>

    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">

            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Titulo</th>
                    <th scole="col">Categoria</th>
                    <th scole="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Hamburgesa</td>
                    <td>Hamburgesas</td>
                    <td>


                    </td>
                </tr>
            </tbody>

        </table>
    </div>
    
@endsection