@extends('layouts.abb')

@section('content')
<div class="w3-container" id="contact">
    <h1 class="w3-xxxlarge w3-text-red"><b>Usuarios.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

    <table class="w3-table-all w3-card-4">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciónes</th>

        </tr>
        <tr>
            @foreach($User as $userr)
        <tr>
            <th scope="row">{{$userr->id}} </th>
            <td>{{$userr->name}} </td>
            <td>{{$userr->email}} </td>
            <td>{{$userr->created_at}} </td>
            <td>
                <div class="btn-group dropdown">
                    <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Acción <span class="caret"></span></button>
                    <ul class="dropdown-menu context pull-right">
                        <li><a>Editar</a></li>
                        <li> elliminar </li>

                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </table>


    @endsection