<div style = 'background-color: Yellow;'>

<center>

<h1 style = 'color: red;' > Listado mascotas</h1>

</center>

</div>

    <table class = "table table-bordered table-responsive-lg">

        <tr>
            <th>id</th></th>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>

        @foreach ($pets as $pet)
            <tr>

                <td> {!! $pet->id !!}  </td>
                <td> {!! $pet->name !!}  </td>
                <td> {!! $pet->age !!}  </td>

            </tr>
            @endforeach



    </table>

