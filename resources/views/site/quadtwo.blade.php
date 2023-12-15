@extends('layouts.home')

@section('header', 'Create Task')

@section('back')
    <img src="{{ Vite::asset('resources/images/icons/left.png') }}" alt="Icon 4">
@endsection

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


    <div id="quadran-cards" class="grid-quad">
        <div class="card quadran q-2 q-start" style="width: 18rem; height:auto !important;">
            <table class="card-body">
                <tr>
                    <h5 class="card-title">Important Less Urgent</h5>
                </tr>

                <tr>
                    <ul>
                        @php
                            $count = 0;
                            $now = now();
                            $tasks = $task
                                ->where('quadrant', 'Important less urgent')
                                ->where('status_id', '!=', 1)
                                ->sortBy('date');
                            $late = $task
                                ->where('quadrant', 'Important less urgent')
                                ->where('status_id', '!=', 1)
                                ->where('date', '<', now());
                        @endphp
                    
                        @forelse ($tasks as $ts)
                            @if ($count < 5 && ($now->lte($ts->date) || $now->isSameDay($ts->date)))
                                <li class="form-check">
                                    <input onclick="refreshPage()" class="form-check-input" type="checkbox" value="{{ $ts->id }}"
                                        id="flexCheck{{ $ts->id }}" onchange="completeTask(this)">
                                    <label class="form-check-label" for="flexCheck{{ $ts->id }}">
                                        {{ $ts->detail }}
                                    </label>
                                    <div class="d-flex justify-content-between align-item-center me-5">
                                        <small class="text-body-secondary">{{ $ts->keyword }}</small>
                                        <small class="text-body-secondary">{{ \Carbon\Carbon::parse($ts->date)->format('d M Y') }}</small>
                                    </div>
                                </li>
                                @php
                                    $count++;
                                @endphp
                            @endif
                        @empty
                            <li class="card-text mx-5">Belum ada tugas yang dibuat.</li>
                        @endforelse
                    
                        @foreach ($late as $lt)
                            @if ($count < 5)
                                <li class="card-text mx-4">
                                    {{ $lt->keyword }}
                                    <small class="badge text-bg-danger mx-4">Late</small>
                                </li>
                                @php
                                    $count++;
                                @endphp
                            @endif
                        @endforeach
                    </ul>
            </tr>
        </table>
        <div class="q-task-menu">
            <a href="#" class="card-link icon"><img class="card-icon" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" src="{{ Vite::asset('resources/images/icons/add.png') }}"></a>
        </div>
    </div>

    <div class="card quadran q-2 q-end pb-4" style="width: 18rem; height:auto !important;">
        <table class="card-body">
            <tr>
                <h5 class="card-title">Completed</h5>
            </tr>

            <tr>
                <ul>
                    @php
                        $tasks = $task
                            ->where('quadrant', 'Important less urgent')
                            ->where('status_id', 1)
                            ->sortBy('date');
                    @endphp

                    @forelse ($tasks as $ts)
                        <li class="card-text">{{ $ts->detail }}</li>
                    @empty
                        <li class="card-text">Tidak ada tugas yang diselesaikan.</li>
                    @endforelse
                </ul>


            </tr>


        </table>
    </div>
</div>

<script>
    function refreshPage() {
        location.reload(true);
    }
</script>

@endsection

@section('modal')
@include('layouts.partials.modal')
@endsection

@section('script')
<script>
    function completeTask(checkbox) {
        const taskId = checkbox.value;

        fetch(`/tasks/${taskId}/complete`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token if needed
                },
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log(data.message);
                // Handle success, e.g., update UI
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error, e.g., show an alert to the user
            });
    }
</script>

@endsection
