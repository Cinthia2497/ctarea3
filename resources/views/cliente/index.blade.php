@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cliente</h3>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Codigo de cliente</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnombre">Nombre del cliente
                        <div class="form-group">
                            
                            <input type="nombre" class="form-control" id="exampleInputnombre" placeholder="nombre cliente">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                </div>
            </div>
            
        </div>
        <div class="card-footer">
            <label>Direccion</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>
    </form>
</div>
<div class="card card-primary">
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                       
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop