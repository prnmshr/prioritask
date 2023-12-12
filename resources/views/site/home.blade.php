@extends('layouts.home')

@section('header', 'Create Task')

@section('content')

    <div id="quadran-cards" class="grid">
        <div class="card quadran q-1" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Important & urgent</h5>
                <ul class="task-list">
                    @php
                        $count = 0;
                        $now = now();
                        $tasks = $task
                            ->where('quadrant', 'Important & urgent')
                            ->where('status_id','!=', 1)
                            ->sortBy('date');
                    @endphp
                
                    @forelse ($tasks as $ts)
                        @if ($now->lte($ts->date) || $now->isSameDay($ts->date))
                            @if ($count < 3)
                                <li class="card-text mx-5">
                                    {{ $ts->keyword }}
                                </li>
                                @php
                                    $count++;
                                @endphp
                            @else
                                @break
                            @endif
                        @endif
                    @empty
                        <li class="card-text mx-5">
                            Belum ada tugas yang dibuat.
                        </li>
                        <br><br>
                    @endforelse
                </ul>
                <br>
                
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
            <h5 class="card-title">Important Less Urgent</h5>
            <ul class="task-list">
                @php
                    $count = 0;
                    $now = now();
                    $tasks = $task
                        ->where('quadrant', 'Important less urgent')
                        ->where('status_id','!=', 1)
                        ->sortBy('date');
                @endphp
            
                @forelse ($tasks as $ts)
                    @if ($now->lte($ts->date) || $now->isSameDay($ts->date))
                        @if ($count < 3)
                            <li class="card-text mx-5">
                                {{ $ts->keyword }}
                            </li>
                            @php
                                $count++;
                            @endphp
                        @else
                            @break
                        @endif
                    @endif
                @empty
                    <li class="card-text mx-5">
                        Belum ada tugas yang dibuat.
                    </li>
                    <br><br>
                @endforelse
            </ul>
            <br>

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
            <h5 class="card-title">Urgent less important</h5>
            <ul class="task-list">
                @php
                    $count = 0;
                    $now = now();
                    $tasks = $task
                        ->where('quadrant', 'Urgent less important')
                        ->where('status_id','!=', 1)
                        ->sortBy('date');
                @endphp
            
                @forelse ($tasks as $ts)
                    @if ($now->lte($ts->date) || $now->isSameDay($ts->date))
                        @if ($count < 3)
                            <li class="card-text mx-5">
                                {{ $ts->keyword }}
                            </li>
                            @php
                                $count++;
                            @endphp
                        @else
                            @break
                        @endif
                    @endif
                @empty
                    <li class="card-text mx-5">
                        Belum ada tugas yang dibuat.
                    </li>
                    <br><br>
                @endforelse
            </ul>
            <br>

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
            <h5 class="card-title">Not important nor urgent</h5>
            <ul class="task-list">
                @php
                    $count = 0;
                    $now = now();
                    $tasks = $task
                        ->where('quadrant', 'Not important nor urgent')
                        ->where('status_id','!=', 1)
                        ->sortBy('date');
                @endphp
            
                @forelse ($tasks as $ts)
                    @if ($now->lte($ts->date) || $now->isSameDay($ts->date))
                        @if ($count < 3)
                            <li class="card-text mx-5">
                                {{ $ts->keyword }}
                            </li>
                            @php
                                $count++;
                            @endphp
                        @else
                            @break
                        @endif
                    @endif
                @empty
                    <li class="card-text mx-5">
                        Belum ada tugas yang dibuat.
                    </li>
                    <br><br>
                @endforelse
            </ul>
            <br>

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

