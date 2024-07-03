@extends('layouts.app')

@section('content')

        <div class="container my-ld-2">
            {{-- @include('includes.message') --}}
            <div class="container-fluid justify-content-center">
                <section class="container min-vh-100 p-lg-5">
                    @auth
                        <div class="col my-1">
                            <h1>Bienvenido, {{ Auth::user()->name }}</h1>
                        </div>
                    @else
                        <div class="bg-dark rounded-5 p-lg-5">
                            <div class="col my-1">
                                <h4 class="text-white fw-light fs-5 text-center">¡Bienvenido Administrador!</h4>
                            </div>
                            <div class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="{{ asset('images/logo-nobg.png') }}" width="180" alt="Logo sistema" />
                            </div>
                            <form method="POST" action="/login">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo: </label>
                                    <input type="email" class="form-control" name="email" id="email" :value="old('email')" />
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" />
                                </div>
                                <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Iniciar sesion">
                            </form>
                        </div>
                    @endauth
                </section>
            </div>
        </div>
@endsection
