@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear medicamento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'medicamento.store','class'=>'form-inline']) !!}

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre del medicamento') !!}
                            {!! Form::text('nombre',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('presentacion', 'Presentacion') !!}
                            {!! Form::select('presentacion', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('composicion', 'Composicion') !!}
                            {!! Form::select('composicion', null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('enlace', 'Enlace') !!}
                            {!! Form::select('enlace', null, ['class' => 'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
