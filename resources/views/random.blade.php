@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1>MODELO 3 DE COLECCIÓN DE DATOS</h1>
        <hr>
        <form role="form" method="post" action="/random">
            {{ csrf_field() }}
            
            <div class="card card-info card-inverse">
                <div class="card-header card-info">
                    Generar datos
                </div>
                <div class="card-block bg-white">
                    <fieldset class="form-group">
                        <label>Cantidad de muestra</label>
                        <input name="cantidad" class="form-control">
                    </fieldset>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Generar</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>

    </div>
</div>
<!-- /.row -->
@endsection