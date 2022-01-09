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

    {{-- tree modal --}}
    <div class="modal fade" id="tree-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0 bg-secondary-green">
                    <h5 class="modal-title fw-bold text-cream" id="exampleModalLabel">Spesies Anda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-secondary-green">
                    <div class="row">
                        @forelse ($this->userCreatures as $userCreature)
                            <div class="col-lg-3">
                                <div class="card mb-3 card-user-creature">
                                    <img src="{{ asset($userCreature->image_path) }}" class="card-img-top"
                                        height="96" />
                                    <div class="card-body bg-cream">
                                        <p class="card-text text-coral fw-bold">{{ $userCreature->name }}</p>
                                        <input type="hidden" id="user-creature" value="{{ $userCreature }}"
                                            data-species="{{ $userCreature->name }}"
                                            data-genus="{{ $userCreature->genus->name }}"
                                            data-family="{{ $userCreature->genus->family->name }}"
                                            data-order="{{ $userCreature->genus->family->order->name }}"
                                            data-class="{{ $userCreature->genus->family->order->class->name }}"
                                            data-phylum="{{ $userCreature->genus->family->order->class->phylum->name }}"
                                            data-kingdom="{{ $userCreature->genus->family->order->class->phylum->kingdom->name }}"
                                            data-domain="{{ $userCreature->genus->family->order->class->phylum->kingdom->domain->name }}" />
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- user creature detail modal --}}
    <div class="modal fade" id="user-creature-detail" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-tertiary-green border-0">
                    <h5 class="modal-title user-creature-detail-name fw-bold" id="staticBackdropLabel">Modal
                        title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-tertiary-green">
                    <div class="d-flex">
                        <img class="user-creature-detail-image"
                            src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" height="96" />
                        <div class="flex-column ms-3">
                            <h5 class="user-creature-detail-common-name"></h5>
                            <p class="user-creature-detail-description"></p>
                        </div>
                    </div>
                    <h5 class="fw-bold border-top pt-3">Klasifikasi</h5>
                    <div class="mb-3">
                        <h6 class="user-creature-detail-domain"></h6>
                        <h6 class="user-creature-detail-kingdom"></h6>
                        <h6 class="user-creature-detail-phylum"></h6>
                        <h6 class="user-creature-detail-classes"></h6>
                        <h6 class="user-creature-detail-order"></h6>
                        <h6 class="user-creature-detail-family"></h6>
                        <h6 class="user-creature-detail-genus"></h6>
                        <h6 class="user-creature-detail-species"></h6>
                    </div>
                    <h5 class="fw-bold border-top pt-3">Evolusi</h5>
                    <div class="user-creature-evolution"></div>
                    <div class="modal-footer bg-tertiary-green">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <span class="open-sidebar" wire:click:prevent="click()" style="left: calc(400px - 64px)"></span> --}}
    <div class="score text-center py-2 position-fixed start-50 translate-middle-x rounded" style="margin-left: 200px">
        <h1 class="text-gray">{{ number_format($evo, 2) }}</h1>
        <p class="mb-0 text-gray">[{{ number_format($power,2) }} Click Power] * [{{ number_format($creaturePower * 0.25, 2) }}
            Creature power]</p>

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
</div>
