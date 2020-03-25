@extends('layouts.app')
@section('title')
    Hotels Home Page
    @endsection

@section('content')
    <h2>Hotels Home Page</h2>
    <table class="table table-bordered table-hover">
        <tr class="btn-danger">
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Rating</td>
            <td>Aviliability</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Etab</td>
            <td>aswan el korniesh</td>
            <td>*******</td>
            <td>aviliable</td>
        </tr>
    </table>
    @endsection
