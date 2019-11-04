@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Comentarios</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                        {{session('status')}}
                        </div>
                    @endif

                    <form action="">
                        <div class="form-group">
                            <label for="comentario">Comentario</label>
                            <input type="text" class="form-control" name="comentarios">
                        </div>
                    </form>
                </div>
            </div>
            
                <div class="panel panel-default">
                    <div class="panel-heading">Publicado el 29/10/2019</div>

                    <div class="panel body">
                    <p>Este es el primer comentario</p>
                    </div>
                </div>

        </div>
    </div>
</div>