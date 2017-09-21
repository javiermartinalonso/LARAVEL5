@extends('master')
@section('title', 'Ver un ticket')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $ticket->title !!}</h2>
                    <p> <strong>Status</strong>: {!! $ticket->status ? 'Pendiente' : 'Respondido' !!}</p>
                    <p> {!! $ticket->content !!} </p>
                </div>
                <a href="#" class="btn btn-info">Editar</a>
                <a href="#" class="btn btn-info">Borrar</a>
            </div>
    </div>

@endsection