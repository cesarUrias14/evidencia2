@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.update', $user->id) }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row py-2">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
                                </div>
                            </div>
                            <div class="row py-2">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email"  value="{{ $user->email }}" autofocus>
                                </div>
                            </div>
                            <div class="row py-2">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-7">
                                    <input type="radio" id="active">
                                    <label for="active">Activo</label>
                                    <input type="radio" id="inactive">
                                    <label for="inactive">Inactivo</label>
                                </div>
                            </div>
                            <div class="row py-2">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password"  placeholder="Ingrese contraseña sólo en caso de modificarla" autofocus>
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