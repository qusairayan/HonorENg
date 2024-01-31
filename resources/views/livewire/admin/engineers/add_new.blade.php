<main>

    <form wire:submit.prevent="add" enctype="multipart/form-data">

@csrf

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">

            <h1>Add New Engineer</h1>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">General information</h2>

                    <div class="row ">
                        <div class="col-12 mb-4">
                            <div class="align-items-center card shadow border-0 text-center p-0">
    
    
                                <div class="col-sm-10 mb-3 ">
                                    <label for="formFile" class="form-label">upload Engineer's image</label>
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
                                    placeholder="Enter Engineer's Name" wire:model="name" autofocus required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                     

                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="description">description</label>
                                <input class="form-control" id="description" type="text"
                                    placeholder="Enter Engineer's description" wire:model="description" autofocus required>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" type="text"
                                    placeholder="Enter Engineer's phone" wire:model="phone" autofocus required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="text"
                                    placeholder="Enter Email's email" wire:model="email" autofocus required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="password">Password</label>
                                <input class="form-control" id="password" type="password"
                                    placeholder="Enter Engineer's password" wire:model="password" autofocus required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-5 mb-3">
                            <div>
                                <label for="address">Address</label>
                                <input class="form-control" id="address" type="text"
                                    placeholder="Enter Engineer's address" wire:model="address" autofocus required>
                                @error('address')
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
