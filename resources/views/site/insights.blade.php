@extends('layouts.home')

@section('header', 'Evaluate Task')

@section('back')
    <img src="{{ Vite::asset('resources/images/icons/left.png') }}" alt="Icon 4">
@endsection

@section('content')

<div class="card quadran p-ev">
    <div class="card-body">
        <div class="modal-footer modal-right">
            <div class="ev-icon"><img src="{{ Vite::asset('resources/images/icons/analyzing.png') }}" alt=""></div>
            <h5 class="card-title">
                INSIGHTS
            </h5>
        </div><br>

        <div class="card p-target q-1">
            <div class="card-body">
                <div class="modal-footer modal-right">
                    @php
                        $taskAll = $task->where('status_id',1);
                        $tasks = $taskAll->count();
                        $tasks1 = $task
                            ->where('quadrant', 'Important & urgent')
                            ->where('status_id', 1)
                            ->sortBy('date');
                        $taskCount1 = $tasks1->count();
                        $total = ($tasks > 0) ? round(($taskCount1 / $tasks) * 100) : 0;
                    @endphp
                    <div>
                        <h2 class="target-title">{{ $total }}%</h2>
                    </div>
                    <p class="d-inline-flex gap-1">
                        <a class="tips-title" data-bs-toggle="collapse" href="#collapse-ca" role="button"
                            aria-expanded="false" aria-controls="collapse-ca">
                            Tugas yang  diselesaikan adalah tugas prioritas utama
                        </a>
                    </p>
                </div>
                <div class="collapse" id="collapse-ca">
                    <div class="card-body">
                        @php
                            $keywords = $tasks1->pluck('keyword')->toArray();
                            $formattedKeywords = implode(', ', $keywords);
                        @endphp
                    
                        <p class="card-text mx-5">{{ $formattedKeywords }}</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="card p-target q-2">
            <div class="card-body">
                <div class="modal-footer modal-right">
                    @php
                        $taskAll = $task->where('status_id',1);
                        $tasks = $taskAll->count();
                        $tasks2 = $task
                            ->where('quadrant', 'Important less urgent')
                            ->where('status_id', 1)
                            ->sortBy('date');
                        $taskCount2 = $tasks2->count();
                        $total = ($tasks > 0) ? round(($taskCount2 / $tasks) * 100) : 0;
                    @endphp
                    <div>
                        <h2 class="target-title">{{ $total }}%</h2>
                    </div>
                    <p class="d-inline-flex gap-1">
                        <a class="tips-title" data-bs-toggle="collapse" href="#collapse-cb" role="button"
                            aria-expanded="false" aria-controls="collapse-cb">
                            Tugas yang diselesaikan adalah tugas prioritas kedua
                        </a>
                    </p>
                </div>
                <div class="collapse" id="collapse-cb">
                    <div class="card-body">
                        @php
                            $keywords = $tasks2->pluck('keyword')->toArray();
                            $formattedKeywords = implode(', ', $keywords);
                        @endphp
                    
                        <p class="card-text mx-5">{{ $formattedKeywords }}</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="card p-target q-3">
            <div class="card-body">
                <div class="modal-footer modal-right">
                    @php
                        $taskAll = $task->where('status_id',1);
                        $tasks = $taskAll->count();
                        $tasks3 = $task
                            ->where('quadrant', 'Urgent less important')
                            ->where('status_id', 1)
                            ->sortBy('date');
                        $taskCount3 = $tasks3->count();
                        $total = ($tasks > 0) ? round(($taskCount3 / $tasks) * 100) : 0;
                    @endphp
                    <div>
                        <h2 class="target-title">{{ $total }}%</h2>
                    </div>
                    <p class="d-inline-flex gap-1">
                        <a class="tips-title" data-bs-toggle="collapse" href="#collapse-cc" role="button"
                            aria-expanded="false" aria-controls="collapse-cc">
                            Tugas  yang diseleasaikan adalah tugas prioritas ketiga
                        </a>
                    </p>
                </div>
                <div class="collapse" id="collapse-cc">
                    <div class="card-body">
                        @php
                            $keywords = $tasks3->pluck('keyword')->toArray();
                            $formattedKeywords = implode(', ', $keywords);
                        @endphp
                    
                        <p class="card-text mx-5">{{ $formattedKeywords }}</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="card p-target q-4">
            <div class="card-body">
                <div class="modal-footer modal-right">
                    @php
                        $taskAll = $task->where('status_id',1);
                        $tasks = $taskAll->count();
                        $tasks4 = $task
                            ->where('quadrant', 'Not important nor urgent')
                            ->where('status_id', 1)
                            ->sortBy('date');
                        $taskCount4 = $tasks4->count();
                        $total = ($tasks > 0) ? round(($taskCount4 / $tasks) * 100) : 0;
                    @endphp
                    <div>
                        <h2 class="target-title">{{ $total }}%</h2>
                    </div>
                    <p class="d-inline-flex gap-1">
                        <a class="tips-title" data-bs-toggle="collapse" href="#collapse-cd" role="button"
                            aria-expanded="false" aria-controls="collapse-cd">
                            Tugas yang diselesaikan bukan termasuk prioritas
                        </a>
                    </p>
                </div>
                <div class="collapse" id="collapse-cd">
                    <div class="card-body">
                        @php
                            $keywords = $tasks4->pluck('keyword')->toArray();
                            $formattedKeywords = implode(', ', $keywords);
                        @endphp
                    
                        <p class="card-text mx-5">{{ $formattedKeywords }}</p>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
