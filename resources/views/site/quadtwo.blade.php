@extends('layouts.home')

@section('header', 'Create Task')

@section('back')
    <img src="{{ Vite::asset('resources/images/icons/left.png') }}" alt="Icon 4">
@endsection

@section('content')

    <div id="quadran-cards" class="grid-quad">
        <div class="card quadran q-2 q-start" style="width: 18rem;">
            <table class="card-body">
                <tr>
                    <h5 class="card-title">Important & Urgent</h5>
                </tr>

                <tr>
                    <ul>
                        <li class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ipsa quam dicta, culpa
                                aut iste eius harum! Odio nam modi,
                            </label>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </li>
                        <li class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Checked checkbox
                            </label>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </li>
                        <li class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ipsa quam dicta, culpa
                                aut iste eius harum! Odio nam modi,
                            </label>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </li>
                    </ul>

                </tr>
            </table>
            <div class="q-task-menu">
                <a href="#" class="card-link icon"><img class="card-icon" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" src="{{ Vite::asset('resources/images/icons/add.png') }}"></a>
            </div>
        </div>

        <div class="card quadran q-2 q-end" style="width: 18rem;">
            <table class="card-body">
                <tr>
                    <h5 class="card-title">Completed</h5>
                </tr>

                <tr>
                    <ul>
                        <li class="card-text">Lorem ipsum si</li>
                        <li class="card-text">lorem ipsum lagi</li>
                        <li class="card-text">iya ni masi lorem ipsum</li>
                        <li class="card-text">gmn ya, bingung, lorem aja dh</li>
                    </ul>
                </tr>


            </table>
        </div>
    </div>

@endsection

@section('modal')
    @include('layouts.partials.modal')
@endsection
