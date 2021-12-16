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

    {{-- sea button --}}
    <div class="sea-btn"></div>

    {{-- earth button --}}
    <div class="earth-btn"></div>

    {{-- tree button --}}
    <div class="tree-btn">
        <span class="tree bg-white opacity-50"></span>
        <span class="right-branch-1 opacity-50"></span>
        <span class="left-branch-1 opacity-50"></span>
        <span class="right-branch-2 opacity-50"></span>
        <span class="left-branch-2 opacity-50"></span>
    </div>
</div>
