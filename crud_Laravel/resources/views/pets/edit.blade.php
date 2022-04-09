@extends('layouts.app')

@section('content')


        <div style = "background-color: #2c4251">
                <h2 style = "color: #b6c649; text-align:center"
                        class="animate__animated animate__rubberBand">Agregar una nueva Mascota</h2>
                        <br>
        </div>

    <div class = "row">
        <div class = "col-lg-12 margin-tb">
            <div class = "pull-left">
                <h2>Editar datos de la Mascota</h2>
            </div>

            <div class = "pull-right">
                <a   class = "btn btn-danger btn-close" href = "{{ URL::to ('pet/') }}" title = "Volver"><i class = "fas fa-backward"></i></a>
            </div>
        </div>
    </div>

    <form action="{{ route ('pets.update' , $pet->id) }}" method = "POST" >
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-body">

                <div class = "row animate__animated animate__backInLeft">
                    <div class = "col-xs-12 col-sm-12 col-md-12">
                        <div class = "form-group">

                           <strong style = "color:#b6c649;">Nombre:</strong><br>
                            <div class="form-floating mb-3 animate__animated animate__backInLeft">
                                <input type="text" name = "nombre"  value = " {{ $pets->nombre }} " class="form-control" id="floatingName" placeholder="Nombre">
                                    <label for="floatingName">Nombre de la Mascota</label>
                            </div>

                            <strong style = "color:#b6c649;">Edad:</strong>
                            <div class="form-floating">
                                <input type="text" name = "edad" value = " {{ $pets->edad }} " class="form-control" id="floatingAge" placeholder="Edad">
                                    <label for="floatingAge">Edad de la Mascota</label>
                            </div>
                        </div>
                        <br>
                    <div class = "col-xs-12 col-sm-12 col-md-12 text-center">
                        <button style = "background-color: #b6c649; color: white" type = "submit" class = "btn" >Actualizar</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

@endsection
