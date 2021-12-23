<div class="canvas d-flex flex-column align-items-center justify-content-evenly" wire:click="$emit('addEvo')">
    <span class="open-sidebar"></span>
    {{-- <div id="dna">
        <img src="{{ asset('assets/dna.png') }}">
    </div> --}}
    <div class="circle"></div>

    {{-- evolution tree --}}
    <section class="evolution-trees d-none">
        <div class="evolution-tree mx-auto position-relative">
            @foreach ($species as $creature)
                <div class="species-canvas">
                    <img class="species-branch" src="{{ $creature->image_path }}" />
                    <input type="hidden" id="creature" value="{{ $creature }}">
                </div>
            @endforeach
            {{-- @foreach ($evolutions as $evolution)
                <p class="text-white">{{ $evolution->name }}</p>
            @endforeach
            @foreach ($creatureEvolutions as $creatureEvolution)
                <p class="text-white">{{ $creatureEvolution->name }}</p>
            @endforeach --}}
        </div>

        <div class="branch-description d-flex flex-column d-none">
            <div class="d-flex mx-3 mt-3">
                <div class="branch-img">
                    <img class="creature-img" />
                </div>
                <div class="branch-name">
                    <span class="creature-name fs-2 text-white ms-3"></span>
                </div>
            </div>
            <div class="inner-branch-description d-none mt-3 mx-3">
                <p class="creature-description text-white"></p>
            </div>
        </div>
    </section>
</div>
