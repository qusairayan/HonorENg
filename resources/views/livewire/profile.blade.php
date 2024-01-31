<div>
    <title>Honor Dashboard</title>

    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form wire:submit.prevent="save" action="#" method="GET">
@csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="name">Name</label>
                            <input wire:model.lazy="name" class="form-control" id="name" type="text" placeholder="Enter your name" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input wire:model.lazy="email" class="form-control" id="email" type="email" placeholder="name@company.com">
                        </div>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input wire:model.lazy="phone" class="form-control" id="phone" type="phone" placeholder="123456789">
                        </div>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <h2 class="h5 my-4">Location</h2>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input wire:model.lazy="city" class="form-control" id="city" type="text" placeholder="City">
                        </div>
                        @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Save All</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
