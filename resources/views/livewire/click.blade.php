<div class="canvas">
    <div id="dna">
        <img src="{{ asset('assets/dna.png') }}">
    </div>
</div>
<div class="d-flex flex-column align-items-center justify-content-evenly" style="min-height: 100vh"">
    <h1 class="score">{{ auth()->user()->userSave->evo }}</h1>
    <div wire:click="increment" class="circle"></div>
</div>
