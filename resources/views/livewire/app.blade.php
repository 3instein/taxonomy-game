<div>
    @if (session()->has('success'))
        <input type="hidden" id="feedback-toggle" value="{{ session('success') }}">
    @endif
    {{-- feedback quiz modal --}}
    <div class="modal fade" id="feedback-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fs-4 feedback-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0 feedback-body">
                    <table class="table">
                        <thead id="wrong-answer-header">
                        </thead>
                        <tbody id="wrong-answer-table">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between">
                    <span class="fs-5">Point kamu : {{ $userStat->point }}</span>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- prerequisite biome modal --}}
    <div class="modal fade" id="biome-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fs-4" id="staticBackdropLabel">
                        <i class="bi bi-exclamation-circle-fill text-danger me-2"></i>Point kamu tidak cukup
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <p class="biome-prerequisite"></p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" data-bs-target="#quiz-modal-1"
                        data-bs-toggle="modal">Ambil Kuis</button>
                </div>
            </div>
        </div>
    </div>

    {{-- quiz modal --}}
    @foreach ($quizzes as $quiz)
        <div class="modal fade" id="quiz-modal-{{ $loop->iteration }}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title fs-4" id="staticBackdropLabel">Soal
                            {{ $loop->iteration }}/{{ count($quizzes) }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('update.point') }}" method="POST" id="quiz-form">
                        @csrf
                        <div class="modal-body py-0">
                            <h6 class="question-text">{{ $quiz->question }}</h6>
                            <div class="mt-3">
                                <input type="text" class="form-control shadow-none" id="question"
                                    aria-describedby="emailHelp" autocomplete="false">
                                <input type="hidden" id="answer" value="{{ $quiz->answer }}">
                                <input type="hidden" id="point" value="{{ $quiz->point }}">
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary {{ $loop->index == 0 ? 'd-none' : '' }}"
                                data-bs-target="#quiz-modal-{{ $loop->iteration - 1 }}"
                                data-bs-toggle="modal">Kembali</button>
                            <button type="button" class="btn btn-secondary {{ $loop->index == 0 ? '' : 'd-none' }}"
                                data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary btn-next"
                                data-bs-target="{{ $loop->last ? '' : '#quiz-modal-' . ($loop->iteration + 1) }}"
                                data-bs-toggle="modal">{{ $loop->last ? 'Selesai' : 'Selanjutnya' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="score text-center py-2 position-fixed start-50 translate-middle-x rounded" style="margin-left: 400px;">
        <h1 class="text-gray">{{ number_format($evo) }}</h1>
        <p class="mb-0 text-gray">[{{ number_format($power) }} Click Power]  [{{ number_format($creaturePower) }} Creature power]</p>
    </div>
    <livewire:click />
    <livewire:sidebar :power="$power" />
    {{-- <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}

    <input type="hidden" id="user-point" value="{{ $userStat->point }}" name="user-point" />
    {{-- biome button --}}
    <div class="biome-btn d-flex flex-column align-items-center justify-content-evenly">
        <div class="sea-btn">
            <img class="sea-icon" src="{{ asset('assets/icons/water.png') }}" />
        </div>
        <div class="earth-btn">
            <img class="earth-icon" src="{{ asset('assets/icons/earth.png') }}" />
        </div>
    </div>

    {{-- tree button --}}
    <div class="tree-btn">
        <span class="tree bg-white opacity-50"></span>
        <span class="right-branch-1 opacity-50"></span>
        <span class="left-branch-1 opacity-50"></span>
        <span class="right-branch-2 opacity-50"></span>
        <span class="left-branch-2 opacity-50"></span>
    </div>
</div>
