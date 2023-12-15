@extends('layouts.home')

@section('header', 'Evaluate Task')

@section('back')
    <img src="{{ Vite::asset('resources/images/icons/left.png') }}" alt="Icon 4">
@endsection

@section('content')
    <div class="card quadran p-ev">
        <div class="card-body">
            <div class="modal-footer modal-right">
                <div class="ev-icon"><img src="{{ Vite::asset('resources/images/icons/checklist (1).png') }}" alt="">
                </div>
                <h5 class="card-title">
                    TARGET ACHIEVED
                </h5>

            </div><br>

            <div class="card p-target q-1">
                <div class="card-body">
                    <div class="modal-footer modal-right">
                        @php
                            $tasks1 = $task
                                ->where('quadrant', 'Important & urgent')
                                ->where('status_id', 1)
                                ->sortBy('date');
                            $taskCount = $tasks1->count();
                        @endphp
                        <div>
                            <h2 class="target-title">{{ $taskCount }}</h2>
                        </div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-aa" role="button"
                                aria-expanded="false" aria-controls="collapse-aa">
                                Prioritas  pada kuadran 1 berhasil diselesaikan
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-aa">
                        <div class="card-body">
                            @php
                                $keywords = $tasks1->pluck('keyword')->toArray();
                                $formattedKeywords = implode(', ', $keywords);
                            @endphp
                        
                            <p class="card-text mx-4">{{ $formattedKeywords }}</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="card p-target q-2">
                <div class="card-body">
                    <div class="modal-footer modal-right">
                        @php
                            $tasks2 = $task
                                ->where('quadrant', 'Important less urgent')
                                ->where('status_id', 1)
                                ->sortBy('date');
                            $taskCount = $tasks2->count();
                        @endphp
                        <div>
                            <h2 class="target-title">{{ $taskCount }}</h2>
                        </div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-ab" role="button"
                                aria-expanded="false" aria-controls="collapse-ab">
                                Prioritas  pada kuadran 2 berhasil diselesaikan
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-ab">
                        <div class="card-body">
                            @php
                                $keywords = $tasks2->pluck('keyword')->toArray();
                                $formattedKeywords = implode(', ', $keywords);
                            @endphp
                        
                            <p class="card-text mx-4">{{ $formattedKeywords }}</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="card p-target q-3">
                <div class="card-body">
                    <div class="modal-footer modal-right">
                        @php
                            $tasks3 = $task
                                ->where('quadrant', 'Urgent less important')
                                ->where('status_id', 1)
                                ->sortBy('date');
                            $taskCount = $tasks3->count();
                        @endphp
                        <div>
                            <h2 class="target-title">{{ $taskCount }}</h2>
                        </div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-ac" role="button"
                                aria-expanded="false" aria-controls="collapse-ac">
                                Tugas  pada kuadran 3 berhasil diselesaikan
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-ac">
                        <div class="card-body">
                            @php
                                $keywords = $tasks3->pluck('keyword')->toArray();
                                $formattedKeywords = implode(', ', $keywords);
                            @endphp
                        
                            <p class="card-text mx-4">{{ $formattedKeywords }}</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="card p-target q-4">
                <div class="card-body">
                    <div class="modal-footer modal-right">
                        @php
                            $tasks4 = $task
                                ->where('quadrant', 'Not important nor urgent')
                                ->where('status_id', 1)
                                ->sortBy('date');
                            $taskCount = $tasks4->count();
                        @endphp
                        <div>
                            <h2 class="target-title">{{ $taskCount }}</h2>
                        </div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-ad" role="button"
                                aria-expanded="false" aria-controls="collapse-ad">
                                Aktivitas  pada kuadran 4 telah diselesaikan
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-ad">
                        <div class="card-body">
                            @php
                                $keywords = $tasks4->pluck('keyword')->toArray();
                                $formattedKeywords = implode(', ', $keywords);
                            @endphp
                        
                            <p class="card-text mx-4">{{ $formattedKeywords }}</p>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
