<div>
    <div wire:ignore.self class="modal fade" id="NewsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="NewsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="NewsModalLabel">Post News</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="addNews">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(is_array($image) && !empty($image))
                                Photo Preview:
                                <div class="row">
                                    @foreach ($image as $image)
                                    <div class="col-3 card me-1 mb-1">
                                        <img src="{{$image->temporaryUrl() }}">
                                    </div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="mb-2">
                                <label>Title</label>
                                <input type="text" wire:model='title' class="form-control">
                                @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-2">
                                <label>Caption</label>
                                <input type="text" wire:model='caption' class="form-control">
                                @error('caption') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image Upload</label>
                                <input type="file" class="form-control" wire:model="image" multiple>
                                <div wire:loading wire:target="image">Uploading...</div>
                                @error('image') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save Image</button>
                            <div wire:loading wire:target="save">process...</div>
                        </form>
                    </div>
                </div>
                {{-- <div class="mb-2">
                    <label>Title</label>
                    <input type="text" wire:model='title' class="form-control">
                    @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-2">
                    <label>Caption</label>
                    <input type="text" wire:model='caption' class="form-control">
                    @error('caption') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-2">
                    <label>Images</label>
                    <input type="file" wire:model="image" multiple>
                    @error('image') <span class="error text-danger">{{ $message }}</span> @enderror
                </div> --}}
            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" wire:click='addNews()'>Save Changes</button>
            </div> --}}
          </div>
        </div>
      </div>

</div>
