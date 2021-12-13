<div>
    <div class="score text-center py-2 position-fixed start-50 translate-middle-x rounded">
        <h1 class="text-gray">{{ auth()->user()->evo }}</h1>
        <p class="mb-0 text-gray">{{ auth()->user()->power }} Click Power</p>
    </div>
    <livewire:sidebar />
    <livewire:click />
    {{-- <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}
</div>
