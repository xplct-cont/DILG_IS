<div>
    @include('livewire.admin.news.create')
    @include('livewire.admin.news.delete')
    @include('livewire.admin.news.edit')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="col-md-12 mt-2 mb-2">
       
        <div class="">
            <div class="row ">
                <div class="col-md-4 mx-auto">
    
                    <p class="mt-2 m-2">From:</p>
                    <input style="border-radius: 20px;" type="date" name="" id="" wire:model="fromDate"
                        class="form-control ">
                    <p class="mt-2 m-2">To:</p>
                    <input style="border-radius: 20px;" type="date" name="" id="" wire:model="toDate"
                        class="form-control ">
    
                </div>
                <div class="col-md-4 mx-auto">
                    <div class="" style="margin-top: 40px;">
                        <input type="search" style="border-radius: 20px;" wire:model="search" class="form-control input"
                            placeholder="Search">
                    </div>
    
                </div>
            </div>
    
        </div>
    

    </div>
    <div class="d-flex justify-content-end">
        <button data-bs-toggle="modal" data-bs-target="#NewsModal" class="btn"
            style="background-color: #343a40; color:white;">
            <span class="fas fa-plus-circle"></span> Add
        </button>
    </div>
    <div class="card mt-2">
        <div class="card-header d-flex justify-content-between">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 21px; font-weight: 450;"><span class="fas fa-newspaper"
                    style="color:#C9282D;"></span> NEWS AND UPDATES</h1>
        </div>


        <table class="table table-bordered text-center">
            <thead class="text-center" style="background-color:#343a40; color:white;">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Caption</th>
                    <th scope="col">Images</th>
                    <th scope="col">Date and Time</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $new->title }}</td>
                        <td>{{ Illuminate\Support\Str::limit($new->caption, 40) }}</td>
                        <td>
                            @php $images = json_decode($new->image,true); @endphp
                            @if (is_array($images) && !empty($images))
                                @foreach ($images as $image)
                                    <img src="{{ asset('/' . $image) }}" />
                                @endforeach
                            @endif
                        </td>
                        {{-- <td>{{ $new->datetime->format('d-m-y') }}</td> --}}
                        <td>{{ Carbon\Carbon::parse($new->datetime)->format('F d, Y  H:i A') }}</td>
                        <td><a type="button" data-bs-toggle="modal" data-bs-target="#updateNewsModal">
                                <i class="fas fa-edit text-warning"
                                    wire:click="editNews({{ $new->id }})"></i>
                            </a>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#deleteNewsModal">
                                <i class="fas fa-trash-alt text-danger" 
                                    wire:click="deleteNews({{ $new->id }})"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="mx-auto justify-content-center">
        {{ $news->links() }}
    </div>
</div>
</div>
