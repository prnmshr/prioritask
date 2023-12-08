@extends('layouts.home')

@section('header', 'Evaluate Task')

@section('back')
    <img src="{{ Vite::asset('resources/images/icons/left.png') }}" alt="Icon 4">
@endsection

@section('content')
    <div class="card quadran p-ev">
        <div class="card-body">
            <div class="modal-footer modal-right">
                <div class="ev-icon"><img src="{{ Vite::asset('resources/images/icons/result.png') }}" alt=""></div>
                <h5 class="card-title">
                    STATISTICS
                </h5>
            </div>


        </div>
    </div>
@endsection
