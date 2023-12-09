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
                        <div><h2 class="target-title">41%</h2></div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-ca" role="button"
                                aria-expanded="false" aria-controls="collapse-ca">
                                Tugas yang  diselesaikan adalah tugas prioritas utama
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-ca">
                        <div class="card-body">
                            Mengidentifikasi prioritas dengan jelas merupakan langkah esensial dalam mengelola tugas dan
                            waktu
                            dengan efektif. Pertama-tama, penting untuk memiliki pemahaman yang mendalam tentang tujuan
                            jangka
                            panjang dan tanggung jawab utama yang harus dicapai. Dengan memfokuskan perhatian pada
                            tugas-tugas yang
                            secara langsung mendukung pencapaian tujuan tersebut, seseorang dapat memastikan bahwa upaya
                            mereka
                            terarah pada hal-hal yang benar-benar penting.

                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-target q-2">
                <div class="card-body">
                    <div class="modal-footer modal-right">
                        <div><h2 class="target-title">33%</h2></div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-cb" role="button"
                                aria-expanded="false" aria-controls="collapse-cb">
                                Tugas yang diselesaikan adalah tugas prioritas kedua
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-cb">
                        <div class="card-body">
                            Mengidentifikasi prioritas dengan jelas merupakan langkah esensial dalam mengelola tugas dan
                            waktu
                            dengan efektif. Pertama-tama, penting untuk memiliki pemahaman yang mendalam tentang tujuan
                            jangka
                            panjang dan tanggung jawab utama yang harus dicapai. Dengan memfokuskan perhatian pada
                            tugas-tugas yang
                            secara langsung mendukung pencapaian tujuan tersebut, seseorang dapat memastikan bahwa upaya
                            mereka
                            terarah pada hal-hal yang benar-benar penting.

                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-target q-3">
                <div class="card-body">
                    <div class="modal-footer modal-right">
                        <div><h2 class="target-title">22%</h2></div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-cc" role="button"
                                aria-expanded="false" aria-controls="collapse-cc">
                                Tugas  yang diseleasaikan adalah tugas prioritas ketiga
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-cc">
                        <div class="card-body">
                            Mengidentifikasi prioritas dengan jelas merupakan langkah esensial dalam mengelola tugas dan
                            waktu
                            dengan efektif. Pertama-tama, penting untuk memiliki pemahaman yang mendalam tentang tujuan
                            jangka
                            panjang dan tanggung jawab utama yang harus dicapai. Dengan memfokuskan perhatian pada
                            tugas-tugas yang
                            secara langsung mendukung pencapaian tujuan tersebut, seseorang dapat memastikan bahwa upaya
                            mereka
                            terarah pada hal-hal yang benar-benar penting.

                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-target q-4">
                <div class="card-body">
                    <div class="modal-footer modal-right">
                        <div><h2 class="target-title">4%</h2></div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-cd" role="button"
                                aria-expanded="false" aria-controls="collapse-cd">
                                Tugas yang diselesaikan bukan termasuk prioritas
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-cd">
                        <div class="card-body">
                            Mengidentifikasi prioritas dengan jelas merupakan langkah esensial dalam mengelola tugas dan
                            waktu
                            dengan efektif. Pertama-tama, penting untuk memiliki pemahaman yang mendalam tentang tujuan
                            jangka
                            panjang dan tanggung jawab utama yang harus dicapai. Dengan memfokuskan perhatian pada
                            tugas-tugas yang
                            secara langsung mendukung pencapaian tujuan tersebut, seseorang dapat memastikan bahwa upaya
                            mereka
                            terarah pada hal-hal yang benar-benar penting.

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
