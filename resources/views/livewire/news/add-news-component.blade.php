<div>
    {{-- <div wire:ignore.self class="modal fade" id="NewsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="NewsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #C9282D; font-size: 20px;  color:white;">
                    <h1 class="modal-title fs-5" id="NewsModalLabel">Post News</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> --}}
                    <div class="card">
                        <div class="card-body">
                            <form wire:submit.prevent="addNews">
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="mb-2">
                                    <label>Title: </label>
                                    <input type="text" wire:model='title' class="form-control">
                                    @error('title')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label>Caption: </label>
                                    <textarea type="text" style="height: 200px;" wire:model='caption' class="form-control"></textarea>
                                    @error('caption')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image Upload: </label>
                                    <input type="file" class="form-control" wire:model="images" multiple>
                                    {{-- <div wire:loading wire:target="image">Uploading...</div> --}}
                                    @error('images')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                    {{-- @if (is_array($image) && !empty($image))
                                        Photo Preview:
                                        <div class="row">
                                            @foreach ($image as $image)
                                                <div class="col-6 card me-1 mb-1">
                                                    <img src="{{ $image->temporaryUrl() }}"
                                                        style="height: 80px; width:auto;">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif --}}
                                </div>
                                <button type="submit" class="btn btn-success"><span class="fas fa-save"></span>
                                    Upload</button>
                                <div wire:loading wire:target="save">process...</div>
                            </form>
                        </div>
                    </div>

                </div>
                <div wire:loading wire:target="image">
                    <div
                        style="display:flex; justify-content:center;
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
                <div wire:loading wire:target="save">
                    <div
                        style="display:flex; justify-content:center;
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
                </div>
            </div>
        </div>
    </div>

</div>
