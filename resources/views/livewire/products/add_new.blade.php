<main>

    <form wire:submit.prevent="add" enctype="multipart/form-data">

@csrf

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">

            <h1>Add New Product</h1>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">General information</h2>

                    <div class="row ">
                        <div class="col-12 mb-4">
                            <div class="align-items-center card shadow border-0 text-center p-0">
    
    
                                <div class="col-sm-10 mb-3 ">
                                    <label for="formFile" class="form-label">upload Product's image</label>
                                    <input class="form-control" type="file" id="image" wire:model="image">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
    
                                </div>
                                <!-- End of Form -->
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="name">Name</label>
                                <input class="form-control" id="name" type="text"
                                    placeholder="Enter Productse's Name" wire:model="name" autofocus required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="title">title</label>
                                <input class="form-control" id="title" type="text"
                                    placeholder="Enter Productse's title" wire:model="title" autofocus required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="description">description</label>
                                <input class="form-control" id="description" type="text"
                                    placeholder="Enter Productse's description" wire:model="description" autofocus required>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="number">number</label>
                                <input class="form-control" id="number" type="number"
                                    placeholder="Enter Productse's number" wire:model="number" autofocus required>
                                @error('number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                    </div>


                   


                 


                   


                   



                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2"
                            wire:loading.attr="disabled">Save All</button>
                    </div>

                </div>

            </div>



           
            
        </div>
        </div>
    </form>
</main>
