<x-app-layout>
@extends('site.layout')
@section('content')
    
    <?php 
        $user = auth()->user();
        if($user->name === "admin"){
    ?>
        <div class="d-flex justify-content-center align-items-center mt-3 list-group">
            <div class="mb-3">
                <a class="nav-link btn btn-dark" href="{{ route('site.home') }}">Home</a>
            </div>

            <div class="mb-2">
                <a class="nav-link btn btn-outline-dark" href="{{ route('contatosmanager.index') }}">Contatos Manager</a>
            </div>

            <div class="mb-2">
                <a class="nav-link btn btn-outline-dark" href="{{ route('artistasmanager.index') }}">Artistas Manager</a>
            </div> 
            
            <div class="mb-2">
                <a class="nav-link btn btn-outline-dark" href="{{ route('locaismanager.index') }}">Locais Manager</a>
            </div>  
            
            <div class="mb-2">
                <a class="nav-link btn btn-outline-dark" href="{{ route('showsmanager.index') }}">Shows Manager</a>
            </div>
        </div>
    <?php } ?>
</x-app-layout>
@endsection