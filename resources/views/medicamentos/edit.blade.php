@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar medicamento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($medicamento, [ 'route' => ['medicamentos.update',$medicamento->id], 'method'=>'PUT']) !!}

                        <div class="form-group">

                            {!! Form::label('nombre', 'Nombre del medicamento') !!}
                            {!! Form::text('nombre',$medicamento->nombre,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('presentacion', 'Presentacion') !!}
                            {!! Form::select('presentacion', $medicamento->presentacion, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('composicion', 'Composicion') !!}
                            {!! Form::select('composicion', $medicamento->composicion, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('enlace', 'Enclace') !!}
                            {!! Form::select('enlace', $medicamento->enlace, ['class' => 'form-control', 'required']) !!}
                        </div>


                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>