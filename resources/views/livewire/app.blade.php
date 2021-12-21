<div>
    <div class="score text-center py-2 position-fixed start-50 translate-middle-x rounded">
        <h1 class="text-gray">{{ $evo }}</h1>
        <p class="mb-0 text-gray">{{ $power }} Click Power</p>
    </div>
    <livewire:click />
    <livewire:sidebar />
    {{-- <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}

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
