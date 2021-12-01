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
    <div wire:click="$emit('addEvo')" class="circle"></div>
</div>
