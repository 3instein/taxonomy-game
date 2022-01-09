<div class="canvas d-flex flex-column align-items-center justify-content-evenly" wire:click="$emit('addEvo')" style="margin-left: 400px">
    <span class="open-sidebar" style="left: calc(400px - 64px)"></span>
    {{-- <div id="dna">
        <img src="{{ asset('assets/dna.png') }}">
    </div> --}}
    <div class="circle"></div>

    {{-- sea biome --}}
    <div class="sea-biome d-none">
        @forelse ($userCreatures as $userCreature)
            <img class="{{ $userCreature->species->name }}" src="{{ $userCreature->species->image_path }}" />
        @empty
        @endforelse
    </div>

    {{-- evolution tree --}}
    {{-- <section class="evolution-trees d-none">
        <div class="evolution-tree mx-auto">
            @foreach ($creatureEvolutions as $creatureEvolution)
                <div class="creatureEvolution-canvas creatureEvolution-{{ $loop->iteration }}">
                    <img class="creatureEvolution-branch" src="{{ $creatureEvolution->image_path }}" />
                    <input type="hidden" id="creatureEvolution" value="{{ $creatureEvolution }}">
                </div>
            @endforeach
            @foreach ($species as $creature)
                <div class="species-canvas species-{{ $loop->iteration }}">
                    <img class="species-branch" src="{{ $creature->image_path }}" />
                    <input type="hidden" id="creature" value="{{ $creature }}"
                        data-genus="{{ $creature->genus->name }}" data-family="{{ $creature->genus->family->name }}"
                        data-order="{{ $creature->genus->family->order->name }}"
                        data-class="{{ $creature->genus->family->order->class->name }}"
                        data-phylum="{{ $creature->genus->family->order->class->phylum->name }}"
                        data-kingdom="{{ $creature->genus->family->order->class->phylum->kingdom->name }}"
                        data-domain="{{ $creature->genus->family->order->class->phylum->kingdom->domain->name }}">
                </div>
            @endforeach
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
                <p class="creature-description text-white mb-0"></p>
                <div class="taxonomy-classification d-none mt-3">
                    <p class="text-white fw-bold fs-5 mb-1">Genus : <span class="fw-normal creature-genus"></span></p>
                    <p class="text-white fw-bold fs-5 mb-1">Family : <span class="fw-normal creature-family"></span></p>
                    <p class="text-white fw-bold fs-5 mb-1">Order : <span class="fw-normal creature-order"></span></p>
                    <p class="text-white fw-bold fs-5 mb-1">Class : <span class="fw-normal creature-class"></span></p>
                    <p class="text-white fw-bold fs-5 mb-1">Phylum : <span class="fw-normal creature-phylum"></span></p>
                    <p class="text-white fw-bold fs-5 mb-1">Kingdom : <span class="fw-normal creature-kingdom"></span>
                    </p>
                    <p class="text-white fw-bold fs-5 mb-1">Domain : <span class="fw-normal creature-domain"></span></p>
                </div>
                <div class="width-100 text-end">
                    <span class="text-white fw-bold taxonomy-expand d-none p-2">Selengkapnya</span>
                    <span class="text-white fw-bold taxonomy-close d-none p-2">Tutup</span>
                </div>
            </div>
        </div>
    </section> --}}
</div>
