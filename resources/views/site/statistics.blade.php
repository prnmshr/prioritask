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
            <h1 class="stat-title">107</h1>
            <p class="stat-text">Tugas berhasil diselesaikan dalam 1 bulan terakhir.</p>
            <p class="stat-text"><a style="color: #89BC56; text-decoration: none;" data-bs-toggle="collapse" href="#collapse-da" role="button" aria-expanded="false"
                aria-controls="collapse-da">Lihat detail</a></p>
                <div class="collapse" id="collapse-da">
                    <div class="card-body">
                        Mengidentifikasi prioritas dengan jelas merupakan langkah esensial dalam mengelola tugas dan waktu
                        dengan efektif. Pertama-tama, penting untuk memiliki pemahaman yang mendalam tentang tujuan jangka
                        panjang dan tanggung jawab utama yang harus dicapai. Dengan memfokuskan perhatian pada tugas-tugas yang
                        secara langsung mendukung pencapaian tujuan tersebut, seseorang dapat memastikan bahwa upaya mereka
                        terarah pada hal-hal yang benar-benar penting.
                    </div>
                </div>
            <br><br>

            <h1 class="stat-title">12</h1>
            <p class="stat-text">Tugas berhasil terlambat diselesaikan dalam 1 bulan terakhir.</p>
            <p class="stat-text"><a style="color: #FA9884; text-decoration: none;" data-bs-toggle="collapse" href="#collapse-db" role="button" aria-expanded="false"
                aria-controls="collapse-db">Lihat detail</a></p>
                <div class="collapse" id="collapse-db">
                    <div class="card-body">
                        Mengidentifikasi prioritas dengan jelas merupakan langkah esensial dalam mengelola tugas dan waktu
                        dengan efektif. Pertama-tama, penting untuk memiliki pemahaman yang mendalam tentang tujuan jangka
                        panjang dan tanggung jawab utama yang harus dicapai. Dengan memfokuskan perhatian pada tugas-tugas yang
                        secara langsung mendukung pencapaian tujuan tersebut, seseorang dapat memastikan bahwa upaya mereka
                        terarah pada hal-hal yang benar-benar penting.
                    </div>
                </div>
            <br>

        </div>
    </div>
@endsection
