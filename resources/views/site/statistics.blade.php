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
            <br>
            @php
                $quad1 = $task->where('quadrant', 'Important & urgent')->where('status_id', 1);
                $total1 = $quad1->count();

                $quad2 = $task->where('quadrant', 'Important less urgent')->where('status_id', 1);
                $total2 = $quad2->count();

                $quad3 = $task->where('quadrant', 'Urgent less important')->where('status_id', 1);
                $total3 = $quad3->count();

                $quad4 = $task->where('quadrant', 'Not important nor urgent')->where('status_id', 1);
                $total4 = $quad4->count();

                $total = $total1 + $total2 + $total3 + $total4;
            @endphp
            <h1 class="stat-title">{{ $total }}</h1>
            <p class="stat-text">Tugas berhasil diselesaikan dalam 1 bulan terakhir.</p>
            <p class="stat-text"><a style="color: #89BC56; text-decoration: none;" data-bs-toggle="collapse"
                    href="#collapse-da" role="button" aria-expanded="false" aria-controls="collapse-da">Lihat detail</a>
            </p>
            <div class="collapse" id="collapse-da">
                <div class="card-body">

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="table-danger text-center">Prioritas Tinggi</th>
                                <th class="table-warning text-center">Prioritas Sedang</th>
                                <th class="table-secondary text-center">Prioritas Rendah</th>
                                <th class="table-success text-center">Bukan Prioritas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-danger text-center">{{ $total1 }} Tugas</td>
                                <td class="table-warning text-center">{{ $total2 }} Tugas</td>
                                <td class="table-secondary text-center">{{ $total3 }} Tugas</td>
                                <td class="table-success text-center">{{ $total4 }} Tugas</td>
                            </tr>
                            <!-- Tambahkan baris-baris data sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
            <br><br>

            @php
                $quadrant1 = $task->where('quadrant', 'Important & urgent')->where('status_id', '!=', 1)->where('date', '<', now());
                $late1 = $quadrant1->count();

                $quadrant2 = $task->where('quadrant', 'Important less urgent')->where('status_id', '!=', 1)->where('date', '<', now());
                $late2 = $quadrant2->count();

                $quadrant3 = $task->where('quadrant', 'Urgent less important')->where('status_id', '!=', 1)->where('date', '<', now());
                $late3 = $quadrant3->count();

                $quadrant4 = $task->where('quadrant', 'Not important nor urgent')->where('status_id', '!=', 1)->where('date', '<', now());
                $late4 = $quadrant4->count();

                $late = $late1 + $late2 + $late3 + $late4;
            @endphp
            <h1 class="stat-title">{{$late}}</h1>
            <p class="stat-text">Tugas berhasil terlambat diselesaikan dalam 1 bulan terakhir.</p>
            <p class="stat-text"><a style="color: #FA9884; text-decoration: none;" data-bs-toggle="collapse"
                    href="#collapse-db" role="button" aria-expanded="false" aria-controls="collapse-db">Lihat detail</a>
            </p>
            <div class="collapse" id="collapse-db">
                <div class="card-body">

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="table-danger text-center">Prioritas Tinggi</th>
                                <th class="table-warning text-center">Prioritas Sedang</th>
                                <th class="table-secondary text-center">Prioritas Rendah</th>
                                <th class="table-success text-center">Bukan Prioritas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-danger text-center">{{ $late1 }} Tugas</td>
                                <td class="table-warning text-center">{{ $late2 }} Tugas</td>
                                <td class="table-secondary text-center">{{ $late3 }} Tugas</td>
                                <td class="table-success text-center">{{ $late4 }} Tugas</td>
                            </tr>
                            <!-- Tambahkan baris-baris data sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
            <br>

        </div>
    </div>
@endsection
