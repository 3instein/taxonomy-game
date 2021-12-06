<div class="canvas d-flex flex-column align-items-center justify-content-evenly">
    <span class="open-sidebar"></span>
    <div id="dna">
        <img src="{{ asset('assets/dna.png') }}">
    </div>
    <div wire:click="$emit('addEvo')" class="circle"></div>
</div>
