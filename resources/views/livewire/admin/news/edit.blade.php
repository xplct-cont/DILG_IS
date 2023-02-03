<div>
    <div wire:ignore.self class="modal fade" id="updateNewsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="updateNewsModalLabel">Edit News</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="updateNews">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="mb-2">
                                <label>Title</label>
                                <input type="text" wire:model='title' class="form-control">
                                @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-2">
                                <label>Caption</label>
                                <textarea type="text" wire:model='caption' class="form-control"></textarea>
                                @error('caption') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="custom-file mt-3">
                                <input type="file" wire:model='new_image' class="custom-file-input form-control" id="customFile">
                                {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
                            </div>
                            {{-- @if ($new_image)
                            <img src="{{$new_image->temporaryUrl()}}" style="width: 200px;height:200px;" alt="">
                            @else
                            <img src="{{ asset('storage') }}/{{$old_image}}" style="width: 200px;height:200px;" alt="">
                            @endif
                            <input type="hidden" wire:model='old_image' name="" id=""> --}}



                            <div class="mb-3">
                                <label class="form-label">Image Upload</label>
                                <input type="file" class="form-control" wire:model="image" multiple>

                                @error('image') <span class="error">{{ $message }}</span> @enderror
                                @if(is_array($image) && !empty($image))
                                Photo Preview:
                                <div class="row">
                                    @foreach ($image as $image)
                                    <div class="col-6 card me-1 mb-1">
                                        <img src="{{$image->temporaryUrl() }}" style="height: 80px; width:auto;">
                                    </div>
                                    @endforeach
                                </div>
                            @endif

                            {{-- <div class="custom-file mt-3">
                                <input type="file" wire:model='image' class="custom-file-input form-control" id="customFile">

                            </div>
                            @if ($image)
                            <img src="{{$new_image->temporaryUrl()}}" style="width: 200px;height:200px;" alt="">
                            @else
                            <img src="{{ asset('storage') }}/{{$old_image}}" style="width: 200px;height:200px;" alt="">
                            @endif
                            <input type="hidden" wire:model='old_image' name="" id="">
                        </div> --}}
                            </div>
                            <button type="submit" class="btn btn-primary">Save Image</button>
                            <div wire:loading wire:target="save">process...</div>
                        </form>
                    </div>
                </div>

            </div>
            <div wire:loading wire:target="image">
                <div style="display:flex; justify-content:center;
                align-items:center; background-color:rgb(223, 207, 207); width:100%;
                position:fixed; top: 10px; left:0px; z-index:9999; height:100%; opacity: .15;">
                    <div style="color: #00eeff" class="la-ball-spin-clockwise la-2x">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <p class="align-center mt-2">Uploading</p>
                </div>
            </div>
            {{-- <div wire:loading wire:target="save">
                <div style="display:flex; justify-content:center;
                align-items:center; background-color:rgb(223, 207, 207); width:100%;
                position:fixed; top: 10px; left:0px; z-index:9999; height:100%; opacity: .15;">
                    <div style="color: #00eeff" class="la-ball-spin-clockwise la-2x">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <p class="align-center mt-2">Posting</p>
                </div>
            </div> --}}
          </div>
        </div>
      </div>

</div>
