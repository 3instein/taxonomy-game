<div class="canvas d-flex flex-column align-items-center justify-content-evenly">
    <div id="dna">
        <img src="{{ asset('assets/dna.png') }}">
    </div>
    <div id="dna">
        <img src="{{ asset('assets/dna.png') }}">
    </div>
    <div id="dna">
        <img src="{{ asset('assets/dna.png') }}">
    </div>
    <h1 class="score">{{ auth()->user()->userSave->evo }}</h1>
    <div wire:click="increment" class="circle"></div>
</div>
