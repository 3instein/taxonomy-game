<div>
    <h1 class="score">{{ auth()->user()->userSave->evo }}</h1>
    <livewire:sidebar />
    <livewire:click />
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
