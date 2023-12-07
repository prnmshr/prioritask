@extends('layouts.home')

@section('header', 'Create Task')

@section('content')

    <div id="quadran-cards" class="grid">
        <div class="card quadran q-1" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <ul class="task-list">
                    <li class="card-text">Lorem ipsum</li>
                    <li class="card-text">Ipsum Lorem</li>
                    <li class="card-text">Hiyaa apa ayo</li>
                </ul>
                <div class="task-menu">
                    <a href="#" class="card-link icon"><img class="card-icon" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" src="{{ Vite::asset('resources/images/icons/add.png') }}"></a>
                    <a href="{{ route('quadone') }}" class="card-link icon"><img class="card-icon"
                            src="{{ Vite::asset('resources/images/icons/menu.png') }}"></a>
                </div>
            </div>
        </div>
        <div class="card quadran q-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <ul class="task-list">
                    <li class="card-text">Lorem ipsum</li>
                    <li class="card-text">Ipsum Lorem</li>
                    <li class="card-text">Hiyaa apa ayo</li>
                </ul>
                <div class="task-menu">
                    <a href="#" class="card-link icon"><img class="card-icon" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" src="{{ Vite::asset('resources/images/icons/add.png') }}"></a>
                    <a href="{{ route('quadtwo') }}" class="card-link icon"><img class="card-icon"
                            src="{{ Vite::asset('resources/images/icons/menu.png') }}"></a>
                </div>
            </div>
        </div>
        <div class="card quadran q-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <ul class="task-list">
                    <li class="card-text">Lorem ipsum</li>
                    <li class="card-text">Ipsum Lorem</li>
                    <li class="card-text">Hiyaa apa ayo</li>
                </ul>
                <div class="task-menu">
                    <a href="#" class="card-link icon"><img class="card-icon" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" src="{{ Vite::asset('resources/images/icons/add.png') }}"></a>
                    <a href="{{ route('quadthree') }}" class="card-link icon"><img class="card-icon"
                            src="{{ Vite::asset('resources/images/icons/menu.png') }}"></a>
                </div>
            </div>
        </div>
        <div class="card quadran q-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <ul class="task-list">
                    <li class="card-text">Lorem ipsum</li>
                    <li class="card-text">Ipsum Lorem</li>
                    <li class="card-text">Hiyaa apa ayo</li>
                </ul>
                <div class="task-menu">
                    <a href="#" class="card-link icon"><img class="card-icon" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" src="{{ Vite::asset('resources/images/icons/add.png') }}"></a>
                    <a href="{{ route('quadfour') }}" class="card-link icon"><img class="card-icon"
                            src="{{ Vite::asset('resources/images/icons/menu.png') }}"></a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('modal')
    @include('layouts.partials.modal')
@endsection
