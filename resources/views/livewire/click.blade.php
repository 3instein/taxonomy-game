<div class="canvas d-flex flex-column align-items-center justify-content-evenly" wire:click="$emit('addEvo')">
    <span class="open-sidebar"></span>
    {{-- <div id="dna">
        <img src="{{ asset('assets/dna.png') }}">
    </div> --}}
    <div class="circle"></div>

    {{-- evolution tree --}}
    <section class="evolution-trees d-none">
        @foreach ($species as $creature)
            <img src="{{ $creature->image_path }}" alt="">
        @endforeach
        @foreach ($evolutions as $evolution)
            <p class="text-white">{{ $evolution->name }}</p>
        @endforeach
        @foreach ($creatureEvolutions as $creatureEvolution)
            <p class="text-white">{{ $creatureEvolution->name }}</p>
        @endforeach
    </section>
</div>
