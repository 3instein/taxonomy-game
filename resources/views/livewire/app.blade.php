<div>
    {{-- quiz modal --}}
    <div class="modal fade" id="quiz-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fs-4" id="exampleModalLabel">
                        <i class="bi bi-exclamation-circle-fill text-danger me-2"></i>Point kamu tidak cukup
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <p class="biome-prerequisite"></p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Ambil Kuis</button>
                </div>
            </div>
        </div>
    </div>

    <div class="score text-center py-2 position-fixed start-50 translate-middle-x rounded">
        <h1 class="text-gray">{{ $evo }}</h1>
        <p class="mb-0 text-gray">{{ $power }} Click Power</p>
    </div>
    <livewire:click />
    <livewire:sidebar :power="$power" />
    {{-- <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}

    <input type="hidden" id="user-point" value="{{ $userStat->point }}" />
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
