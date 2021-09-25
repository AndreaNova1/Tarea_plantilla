@extends('layouts.plantilla')

    @section('content')

        <div  class="p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if(\Session::has('warning'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('warning') !!}</li>
                    </ul>
                </div>
            @endif


            <form  action="#" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Ingrese tu nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre"  >
                        </div>
                    </div>
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Ingrese tu apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Ingresa tu apellido"  >
                        </div>
                    </div>
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Ingrese tu numero de celular</label>
                            <input type="text" name="cel" class="form-control" placeholder="Ingresa tu numero"  >
                        </div>
                    </div>
                </div>

                <div class="modal-footer" >

                    <button type="submit" name="btnEnviar" class="btn btn-success">Enviar</button>
                </div> 
            </form>
        </div>
</div>
<div></div>
<div></div>
<div></div>

<div></div>




@endsection

