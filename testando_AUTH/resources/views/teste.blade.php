@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TESTECONTROLLER</div>

                <div class="card-body">
                    Oi, TESTECONTROLLER!
                </div>

                <form action="{{route('post')}}" method="post">
                    @csrf
                    @method('post')
                    <input type="text" name="nome" id="nome">
                    <input type="submit" value="Enviar Post!">
                </form>

                <form action="{{route('put')}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="nome" id="nome">
                    <input type="submit" value="Enviar Put!">
                </form>

                <form action="{{route('patch')}}" method="POST">
                    @csrf
                    @method('patch')
                    <input type="text" name="nome" id="nome">
                    <input type="submit" value="Enviar Patch!">
                </form>

                <form action="{{route('delete')}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="text" name="nome" id="nome">
                    <input type="submit" value="Enviar Delete!">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
