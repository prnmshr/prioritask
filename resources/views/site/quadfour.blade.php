@extends('layouts.home')

@section('header', 'Create Task')

@section('back')
    <img src="{{ Vite::asset('resources/images/icons/left.png') }}" alt="Icon 4">
@endsection

@section('content')

<div id="quadran-cards" class="grid-quad">
    <div class="card quadran q-4 q-start" style="width: 18rem; height:auto !important;">
        <table class="card-body">
            <tr>
                <h5 class="card-title">Not Important Nor Urgent</h5>
            </tr>

            <tr>
                <ul>
                    @php
                        $count = 0;
                        $now = now();
                        $tasks = $task
                            ->where('quadrant', 'Not important nor urgent')
                            ->where('status_id', '!=', 1)
                            ->sortBy('date');
                    @endphp
                
                    @forelse ($tasks as $ts)
                        @if ($now->lte($ts->date) || $now->isSameDay($ts->date))
                            @if ($count < 7)
                                <li class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $ts->id }}"
                                        id="flexCheck{{ $ts->id }}" onchange="completeTask(this)" onclick="refreshPage()">
                                    <label class="form-check-label" for="flexCheck{{ $ts->id }}">
                                        {{ $ts->detail }}
                                    </label>
                                    <div class="d-flex justify-content-between align-item-center me-5">
                                        <small class="text-body-secondary">{{ $ts->keyword }}</small>
                                        <small
                                            class="text-body-secondary">{{ \Carbon\Carbon::parse($ts->date)->format('d M Y') }}</small>
                                    </div>
                                </li>
                                @php
                                    $count++;
                                @endphp
                            @else
                                @break
                            @endif
                        @endif
                    @empty
                        <li class="form-check">
                            <span>Belum ada tugas yang dibuat.</span>
                        </li>
                    @endforelse
                </ul>
                
                
            </tr>
        </table>
        <div class="q-task-menu">
            <a href="#" class="card-link icon"><img class="card-icon" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" src="{{ Vite::asset('resources/images/icons/add.png') }}"></a>
        </div>
    </div>

    <div class="card quadran q-4 q-end pb-4" style="width: 18rem; height:auto !important;">
        <table class="card-body">
            <tr>
                <h5 class="card-title">Completed</h5>
            </tr>

            <tr>
                <ul>
                    @php
                        $tasks = $task
                            ->where('quadrant', 'Not important nor urgent')
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
