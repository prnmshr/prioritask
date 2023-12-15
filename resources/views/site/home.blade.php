@extends('layouts.home')


@section('header', 'Create Task')

@section('content')

    @if ($message = Session::get('success'))
        <div id="alert" class="alert alert-secondary alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <script>
            setTimeout(function() {
                document.getElementById('alert').style.display = 'none';
            }, 2000);
        </script>
    @endif


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
                            ->where('status_id', '!=', 1)
                            ->sortBy('date');
                        $late = $task
                            ->where('quadrant', 'Important & urgent')
                            ->where('status_id', '!=', 1)
                            ->where('date', '<', now());
                    @endphp
                
                    @forelse ($tasks as $ts)
                        @if ($count < 3 && ($now->lte($ts->date) || $now->isSameDay($ts->date)))
                            <li class="card-text mx-5">
                                {{ $ts->keyword }}
                            </li>
                            @php
                                $count++;
                            @endphp
                        @endif
                    @empty
                        <li class="card-text mx-5">Belum ada tugas yang dibuat.</li>
                    @endforelse
                
                    @foreach ($late as $lt)
                        @if ($count < 3)
                            <li class="card-text mx-5">{{ $lt->keyword }}<small class="badge text-bg-danger mx-4">Late</small></li>
                            
                            @php
                                $count++;
                            @endphp
                        @endif
                    @endforeach
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
                        ->where('status_id', '!=', 1)
                        ->sortBy('date');
                    $late2 = $task
                        ->where('quadrant', 'Important less urgent')
                        ->where('status_id', '!=', 1)
                        ->where('date', '<', now());
                @endphp
            
                @forelse ($tasks as $ts)
                    @if ($count < 3 && ($now->lte($ts->date) || $now->isSameDay($ts->date)))
                        <li class="card-text mx-5">
                            {{ $ts->keyword }}
                        </li>
                        @php
                            $count++;
                        @endphp
                    @endif
                @empty
                    <li class="card-text mx-5">Belum ada tugas yang dibuat.</li>
                @endforelse
            
                @foreach ($late2 as $lt)
                    @if ($count < 3)
                        <li class="card-text mx-5">
                            {{ $lt->keyword }}
                            <small class="badge text-bg-danger mx-4">Late</small>
                        </li>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach
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
                    ->where('status_id', '!=', 1)
                    ->sortBy('date');
                $late3 = $task
                    ->where('quadrant', 'Urgent less important')
                    ->where('status_id', '!=', 1)
                    ->where('date', '<', now());
            @endphp
        
            @forelse ($tasks as $ts)
                @if ($count < 3 && ($now->lte($ts->date) || $now->isSameDay($ts->date)))
                    <li class="card-text mx-5">
                        {{ $ts->keyword }}
                    </li>
                    @php
                        $count++;
                    @endphp
                @endif
            @empty
                <li class="card-text mx-5">Belum ada tugas yang dibuat.</li>
            @endforelse
        
            @foreach ($late3 as $lt)
                @if ($count < 3)
                    <li class="card-text mx-5">
                        {{ $lt->keyword }}
                        <small class="badge text-bg-danger mx-4">Late</small>
                    </li>
                    @php
                        $count++;
                    @endphp
                @endif
            @endforeach
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
                ->where('status_id', '!=', 1)
                ->sortBy('date');
            $late4 = $task
                ->where('quadrant', 'Not important nor urgent')
                ->where('status_id', '!=', 1)
                ->where('date', '<', now());
        @endphp
    
        @forelse ($tasks as $ts)
            @if ($count < 3 && ($now->lte($ts->date) || $now->isSameDay($ts->date)))
                <li class="card-text mx-5">
                    {{ $ts->keyword }}
                </li>
                @php
                    $count++;
                @endphp
            @endif
        @empty
            <li class="card-text mx-5">Belum ada tugas yang dibuat.</li>
        @endforelse
    
        @foreach ($late4 as $lt)
            @if ($count < 3)
                <li class="card-text mx-5">
                    {{ $lt->keyword }}
                    <small class="badge text-bg-danger mx-4">Late</small>
                </li>
                @php
                    $count++;
                @endphp
            @endif
        @endforeach
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
