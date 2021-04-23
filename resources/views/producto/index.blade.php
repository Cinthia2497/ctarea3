@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Nuevo Producto</h3>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-7">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Codigo de Producto</label>
                        <input type="Escribir" class="form-control" id="exampleInputEmail1" placeholder="Escribir">
                    </div>
                  
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Producto</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Escribir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Cantidad</label>
                        <input type="Escribir" class="form-control" id="exampleInputPassword1" placeholder=Escribir>
                    </div>
                </div>
               
                    <div class="form-group">
                        <label for="exampleInputPassword1">Referencia</label>
                        <input type="Escribir" class="form-control" id="exampleInputPassword1" placeholder=Escribir>
                    
                    </div>
                </div>
            </div>
            
        </div>
        <div class="card-footer">
            <label>Descripcion del producto</label>
            <textarea class="form-control" rows="3" placeholder="Escribir ..."></textarea>
        </div>
    </form>
</div>
<div class="card card-primary">
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Impuesto</label>
                        <div class="form-group">
                        <input type="Escribir" class="form-control" id="exampleInputPassword1" placeholder=Escribir>
                                
                            </select>
                        </div>                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descuento</label>
                        <input type="" class="form-control" id="exampleInputEmail1" placeholder="Escribir">
                    </div>
                    
                </div>
            </div>
        </div>
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