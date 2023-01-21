<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Edit Slide
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Edit Slide
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.home.slider') }}" class="btn btn-success float-end">All Slides</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <form wire:submit.prevent="updateSlide">
                                    <div class="mb-3 mt-3">
                                        <label for="top_title" class="form-label">Top Title</label>
                                        <input type="text" name="top_title" class="form-control" wire:model="top_title" placeholder="Enter Top Title">
                                        @error('top_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3 mt-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" wire:model="title" placeholder="Enter Title">
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="sub_title" class="form-label">Sub Title</label>
                                        <input type="text" name="sub_title" class="form-control" wire:model="sub_title" placeholder="Enter Sub Title">
                                        @error('sub_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="offer" class="form-label">Offer</label>
                                        <input type="text" name="offer" class="form-control" wire:model="offer" placeholder="Enter Offer">
                                        @error('offer')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="link" class="form-label">Link</label>
                                        <input type="text" name="link" class="form-control" wire:model="link" placeholder="Enter Link">
                                        @error('link')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-control" wire:model="status">
                                            <option value="1">Action</option>
                                            <option value="0">InAction</option>
                                        </select>
                                        @error('status')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror 
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">image</label>
                                        <input type="file" class="form-control" wire:model="new_image">
                                        @if ($new_image)
                                            <img src="{{ $new_image->temporaryUrl() }}" width="100" >
                                        @else
                                            <img src="{{ asset('assets/imgs/slider') }}/{{ $new_image }}" width="100" >
                                        @endif
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>