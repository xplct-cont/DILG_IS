<div>
    @include('livewire.admin.news.create')
    @include('livewire.admin.news.delete')
    {{-- @include('livewire.admin.news.edit') --}}
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="d-flex justify-content-end mt-5">
        <!-- Button trigger modal -->
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
                        <td>{{ $new->caption }}</td>
                        <td>
                            @php $images = json_decode($new->image,true); @endphp
                            @if (is_array($images) && !empty($images))
                                @foreach ($images as $image)
                                    <img src="{{ asset('app/public/' . $image) }}" />
                                @endforeach
                            @endif
                        </td>
                        <td>{{ $new->datetime }}</td>
                        <td><a type="button" data-bs-toggle="modal" data-bs-target="#updateNewsModal">
                                <i class="fas fa-edit" style="color:rgb(0, 81, 255);" wire:click="edit({{$new->id}})"></i>
                            </a>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#deleteNewsModal">
                                <i class="fas fa-trash-alt" style="color:red;" wire:click="deleteNews({{$new->id}})"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
