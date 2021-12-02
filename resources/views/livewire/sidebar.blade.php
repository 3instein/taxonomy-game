<div class="position-absolute start-0 sidebar">
    <div class="d-flex align-items-center justify-content-evenly py-2 border-bottom">
        <span class="sidebar-link sidebar-active">Upgrades</span>
        <span class="sidebar-link">Creatures</span>
    </div>
    <div class="wrapper" style="max-width: 400px;">

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
                    <span wire:click="$emit('upgradePower')" class="btn btn-primary align-self-baseline">Upgrade Power</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body d-flex">
                    <div>
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                    <a href="#" class="btn btn-primary align-self-baseline">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body d-flex">
                    <div>
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                    <a href="#" class="btn btn-primary align-self-baseline">Go somewhere</a>
                </div>
            </div>
        </div>

        {{-- creatures --}}
        <div class="creatures-wrapper">
            <h5 class="card-header">Creatures</h5>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
