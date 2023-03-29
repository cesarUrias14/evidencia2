@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('orders.update', $order->id) }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="card-title">Orden</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row py-2">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="customer_name" value="{{ $order->customer_name }}" autofocus>
                                </div>
                            </div>
                            <div class="row py-2">
                                <label for="email" class="col-sm-2 col-form-label">Dirección</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="address"  value="{{ $order->address }}" autofocus>
                                </div>
                            </div>
                            <div class="row py-2">
                                <label for="password" class="col-sm-2 col-form-label">Notas</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="notes"  placeholder="Ingrese nota sólo en caso de modificarla" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection