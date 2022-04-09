@extends('layouts.app')

@section('content')



        <div style = "background-color: #2c4251">
                <h2 style = "color: #b6c649; text-align:center"
                        class="animate__animated animate__rubberBand">Agregar una nueva Mascota</h2>
                        <br>
        </div>
<br>
    <div class = "row">
        <div class = "col-lg-12 margin-tb">
            <div class = "pull-left">
                <a   class = "btn btn-danger btn-close" href = "{{ URL::to ('pet/') }}" title = "Volver"><i class = "fas fa-backward"></i></a>
            </div>
        </div>
    </div>

    @if ($errors -> any ())

    <div class = "alert alert-danger">
        <strong>Upps!!</strong> There were some problems with your input. <br><br>
        <ul>
            @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
    @endif

    <form action = "{{ URL::to ('pet/') }}" method = "post">
        @csrf
        @include('pet.form')



    </form>

    <!--form action=" {{ route ('pet.store') }} " method = "POST" >
        @csrf
        @include('pet.show')

    <div class="card">
    <div class="card-body">

        <div class = "row animate__animated animate__backInLeft">
            <div class = "col-xs-12 col-sm-12 col-md-12">
                <div class = "form-group">

                    <strong style = "color:#b6c649;">Nombre:</strong><br>
                        <div class="form-floating mb-3 animate__animated animate__backInLeft">
                             <input type="text" name = "name" class="form-control" id="floatingName" placeholder="Nombre">
                                <label for="floatingName">Nombre de la Mascota</label>
                        </div>

                    <strong style = "color:#b6c649;">Edad:</strong>
                        <div class="form-floating">
                            <input type="text" name = "age" class="form-control" id="floatingAge" placeholder="Edad">
                                <label for="floatingAge">Edad de la Mascota</label>
                        </div>
                </div>
                <br>
                    <div class = "col-xs-12 col-sm-12 col-md-12 text-center">
                        <button style = "background-color: #b6c649; color: white" type = "submit" class = "btn" >Crear</button>
                    </div>
            </div>
        </div>
    </div>

    </form-->

@endsection
