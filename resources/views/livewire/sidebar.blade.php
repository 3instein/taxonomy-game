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
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/dna.png') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex justify-content-between">
                                <div>
                                    <h5 class="card-title">{{ $creature->name }}</h5>
                                </div>
                                <span wire:click="$emit('unlockCreature')"
                                    class="btn btn-primary align-self-baseline">Unlock for {{ $creature->price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
