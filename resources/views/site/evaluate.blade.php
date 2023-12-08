@extends('layouts.home')

@section('header', 'Evaluate Task')

@section('back')
    <img src="{{ Vite::asset('resources/images/icons/left.png') }}" alt="Icon 4">
@endsection

@section('content')
    <div class="grid">
        <div class="card quadran ev-grid" style="width: 18rem;">
            <div class="d-flex justify-content-center ev-img">
                <img src="{{ Vite::asset('resources/images/icons/checklist (1).png') }}" alt="...">
            </div>
            <div class="card-body">
                <a href="{{ route('achieved') }}" class="ev-title"><h5 class="card-title">Target Achieved</h5></a>
            </div>
        </div>
        <div class="card quadran ev-grid" style="width: 18rem;">
            <div class="d-flex justify-content-center ev-img">
                <img src="{{ Vite::asset('resources/images/icons/assessment.png') }}" alt="...">
            </div>
            <div class="card-body">
                <a href="{{ route('unachieved') }}" class="ev-title"><h5 class="card-title">Target Not Achieved</h5></a>
            </div>
        </div>
        <div class="card quadran ev-grid" style="width: 18rem;">
            <div class="d-flex justify-content-center ev-img">
                <img src="{{ Vite::asset('resources/images/icons/analyzing.png') }}" alt="...">
            </div>
            <div class="card-body">
                <a href="{{ route('insights') }}" class="ev-title"><h5 class="card-title">Insights</h5></a>
            </div>
        </div>
        <div class="card quadran ev-grid" style="width: 18rem;">
            <div class="d-flex justify-content-center ev-img">
                <img src="{{ Vite::asset('resources/images/icons/result.png') }}" alt="...">
            </div>
            <div class="card-body">
                <a href="{{ route('statistics') }}" class="ev-title"><h5 class="card-title">Statistics</h5></a>
            </div>
        </div>
    </div>
@endsection
