<div class="sidebar" style="width: 0px">
    <div class="wrapper overflow-auto">
        {{-- upgrade --}}
        <div class="upgrades-wrapper">
            <h5 class="card-header text-cream fw-bold">Upgrades</h5>
            <div class="card border-0 rounded-0">
                <div class="card-body d-flex justify-content-between card-upgrade-click-power">
                    <div>
                        <h5 class="card-title fw-bold">Click power</h5>
                        <p class="card-text fw-normal">+0.02 evo every click
                        </p>
                    </div>
                    <span wire:click="$emit('upgradePower')" class="btn btn-click-upgrade">Upgrade {{ $this->power * 100 }}</span>
                </div>
            </div>
            <h5 class="card-header text-cream fw-bold">Creatures</h5>
            @forelse ($this->species as $creature)
                <div class="card border-0 rounded-0">
                    <div class="card-body d-flex justify-content-between card-creature">
                        <div class="d-flex align-items-center">
                            <img class="evolution-icon" src="{{ asset($creature->image_path) }}" width="64"
                                height="64" />
                            <div class="flex-column mx-3">
                                <h5 class="card-title fw-bold">{{ $creature->common_name }}</h5>
                                <p class="card-text">{{ substr($creature->description, 0, 20) }}...
                            </div>
                            </p>
                        </div>
                        <span wire:click="$emit('unlockCreature', {{ $creature }})" class="btn btn-buy-creature">
                            {{ $creature->price }} Evo</span>
                    </div>
                </div>
            @empty
                <div class="card border-0 rounded-0">
                    <div class="card-body d-flex justify-content-between card-creature">
                        <div class="d-flex align-items-center">
                            <p>Tidak ada spesies</p>
                        </div>
                    </div>
                </div>
            @endforelse
            <h5 class="card-header text-cream fw-bold">Evolutions</h5>
            @forelse ($this->evolutions as $evolution)
                <div class="card border-0 rounded-0">
                    <div class="card-body d-flex justify-content-between card-evolution">
                        <div class="d-flex align-items-center">
                            <img class="evolution-icon" src="{{ $evolution->image_path }}" width="64" height="64" />
                            <div class="flex-column mx-3">
                                <h5 class="card-title fw-bold">{{ $evolution->name }}</h5>
                                <p class="card-text">{{ substr($evolution->description, 0, 20) }}...
                            </div>
                            </p>
                        </div>
                        <span wire:click="$emit('unlockEvolution', {{ $evolution }})"
                            class="btn btn-buy-evolution">{{ $evolution->price }} Evo</span>
                    </div>
                </div>
            @empty
                <div class="card border-0 rounded-0">
                    <div class="card-body d-flex justify-content-between card-creature">
                        <div class="d-flex align-items-center">
                            <p>Tidak ada evolusi</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
