@extends('layouts.app')

@section('content')


    <div class="card">
    <div class="card-body">

        <div class = "row animate__animated animate__backInLeft">
            <div class = "col-xs-12 col-sm-12 col-md-12">
                <div class = "form-group">

                    <strong style = "color:#b6c649;">Nombre:</strong><br>
                        <div class="form-floating mb-3 animate__animated animate__backInLeft">
                             <input type="text" name = "name" class="form-control" id="floatingName" placeholder="Nombre">
                                <label for="name">Nombre de la Mascota</label>
                        </div>

                    <strong style = "color:#b6c649;">Edad:</strong>
                        <div class="form-floating">
                            <input type="text" name = "age" class="form-control" id="floatingAge" placeholder="Edad">
                                <label for="age">Edad de la Mascota</label>
                        </div>
                </div>
                <br>
                    <div class = "col-xs-12 col-sm-12 col-md-12 text-center">
                        <button style = "background-color: #b6c649; color: white" type = "submit" class = "btn" >Crear</button>
                    </div>
            </div>
        </div>
    </div>

@endsection
