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
                <div class="card-body d-flex">
                    <div>
                        <h5 class="card-title">Click power</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                    <span wire:click="$emit('upgradePower')" class="btn btn-primary align-self-baseline">Upgrade
                        Power</span>
                </div>
            </div>
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
                                    <h5 class="card-title">{{ $creature->name }}</h5>
                                    <p class="mb-0">{{ substr($creature->description, 0, 30) }}...</p>
                                </div>
                                <span wire:click="$emit('unlockCreature', {{ $creature }})" class="btn btn-primary align-self-baseline">
                                    {{ $creature->price }} DNA</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
