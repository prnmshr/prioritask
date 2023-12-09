@extends('layouts.home')

@section('header', 'Evaluate Task')

@section('back')
    <img src="{{ Vite::asset('resources/images/icons/left.png') }}" alt="Icon 4">
@endsection

@section('content')
    <div class="card quadran p-ev">
        <div class="card-body">
            <div class="modal-footer modal-right">
                <div class="ev-icon"><img src="{{ Vite::asset('resources/images/icons/assessment.png') }}" alt=""></div>
                <h5 class="card-title">
                    TARGET NOT ACHIEVED
                </h5>
            </div><br>

            <div class="card p-target q-1">
                <div class="card-body">
                    <div class="modal-footer modal-right">
                        <div><h2 class="target-title">2</h2></div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-ba" role="button"
                                aria-expanded="false" aria-controls="collapse-ba">
                                Prioritas  pada kuadran 1 terlambat diseleasaikan
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-ba">
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
                        <div><h2 class="target-title">4</h2></div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-bb" role="button"
                                aria-expanded="false" aria-controls="collapse-bb">
                                Prioritas  pada kuadran 2 terlambat diseleasaikan
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-bb">
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
                        <div><h2 class="target-title">6</h2></div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-bc" role="button"
                                aria-expanded="false" aria-controls="collapse-bc">
                                Tugas  pada kuadran 3 terlambat diseleasaikan
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-bc">
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
                        <div><h2 class="target-title">0</h2></div>
                        <p class="d-inline-flex gap-1">
                            <a class="tips-title" data-bs-toggle="collapse" href="#collapse-bd" role="button"
                                aria-expanded="false" aria-controls="collapse-bd">
                                Aktivitas  pada kuadran 4 terlambat diseleasaikan
                            </a>
                        </p>
                    </div>
                    <div class="collapse" id="collapse-bd">
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
