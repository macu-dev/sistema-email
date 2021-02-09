@extends('base')
@section('title') Dashboard @endsection
@section('content')
<div class="table-responsive w-100">
    <h2>Dashboard</h2>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th># {{"Id"}}</th>
                <th>{{"Nombre"}}</th>
                <th>{{"Correo Electronico"}}</th>
                <th>{{"Telefono"}}</th>
                <th>{{"Mensaje"}}</th>
            </tr>
        </thead>
        <tbody>
            @if (count($contacts) >=1)
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->message}}</td>
                    </tr>
                @endforeach
            @else
                <tr class="w-100">
                    <td colspan="7" class="text-center p-4">{{"No encontró resultados"}}</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection



