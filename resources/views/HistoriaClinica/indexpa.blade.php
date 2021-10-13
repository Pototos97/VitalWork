@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{!! asset('css/Tablas1.css') !!}">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading">
                    Usuarios
                    @can('historiac.create')
                    <a class="btn btn-sm btn-primary pull-right" href="{{route('historiac.create')}}">
                        Crear Historia
                    </a>
                    @endcan

                </div>
                <div class="panel-body">
                    <table  id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                Edad
                                </th>
                                <th>
                                  Antecedentes
                                </th>
                                 <th>
                                  Peso
                                </th>
                                <th>
                                  Altura
                                </th>
                                <th>
                                  Presion Arterial
                                </th>
                                <th>
                                   Genero
                                </th>
                                 <th>
                                    Fumador
                                </th>
                                 <th>
                                    Alcohol
                                </th>
                                <th>
                                    Ejercicio
                                </th>
                                <th>
                                    Cedula
                                </th>
                                 
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($historiac as $historia)
                            <tr>
                               
                                <td>
                                    {{$historia->Edad}} 

                                </td>
                                <td>
                                    {{$historia->Antecedentes}}

                                </td>

                                 <td>
                                    {{$historia->Peso}}
                                </td>
                                
                                 <td>
                                    {{$historia->Altura}}
                                </td>
                                  <td>
                                    {{$historia->PresionA}}
                                </td>
                                     <td>
                                    {{$historia->Genero}}
                                </td>
                                   <td>
                                    {{$historia->Fumador}}
                                </td>
                                <td>
                                    {{$historia->Alcohol}}
                                </td>
                                <td>
                                    {{$historia->Ejercicio}}
                                </td>
                                <td>
                                    {{$historia->consultar['Cedula']}}
                                </td> 
                           
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
