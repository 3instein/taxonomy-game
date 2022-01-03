<div class="sidebar">
    <div class="d-flex align-items-center justify-content-evenly py-2 border-bottom">
        <span class="sidebar-link sidebar-active">Upgrades</span>
        <span class="sidebar-link">Creatures</span>
    </div>
    <div class="wrapper overflow-auto" style="max-width: 400px;">

        {{-- upgrade --}}
        <div class="upgrades-wrapper">
            <h5 class="card-header">Upgrades</h5>
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <h5 class="card-title">Click power</h5>
                        <p class="card-text">+{{ $power }} evo every click
                        </p>
                    </div>
                    <span wire:click="$emit('upgradePower')" class="btn btn-primary align-self-stretch">Upgrade</span>
                </div>
            </div>
            <h5 class="card-header">Evolutions</h5>
            @forelse ($evolutions as $evolution)
                <div class="card">
                    <div class="card-body d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img class="evolution-icon" src="{{ $evolution->image_path }}" width="64" height="64"
                                style="border-radius: 15%" />
                            <div class="flex-column mx-3">
                                <h5 class="card-title">{{ $evolution->name }}</h5>
                                <p class="card-text">{{ substr($evolution->description, 0, 20) }}...
                            </div>
                            </p>
                        </div>
                        <span wire:click="$emit('unlockEvolution', {{ $evolution }})"
                            class="btn btn-primary align-self-stretch text-center">{{ $evolution->price }} Evo</span>
                    </div>
                </div>
            @empty
            @endforelse
        </div>

        {{-- creatures --}}
        <div class="creatures-wrapper d-none">
            <h5 class="card-header">Creatures</h5>
            @foreach ($species as $creature)
                <div class="card ps-3 py-3">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex align-items-center">
                            <img src="{{ asset($creature->image_path) }}"
                                class="img-fluid rounded creature-icon border">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body d-flex justify-content-between py-0">
                                <div class="me-2">
                                    <h4 class="card-title">{{ $creature->common_name }}</h4>
                                    <small>{{ $creature->name }}</small>
                                    <p class="mb-0">{{ substr($creature->description, 0, 20) }}...</p>
                                </div>
                                <span wire:click="$emit('unlockCreature', {{ $creature }})"
                                    class="btn btn-primary align-self-stretch">
                                    {{ $creature->price }} Evo</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
