<div>
    @include('livewire.admin.news.create')
    <div class="card mt-5">
        <div class="col-md-12">
            @if (session()->has('message'))
                <h5 class="alert alert-sucess text-success">{{ session('message') }}</h5>
            @endif
        </div>
        <div class="card-header d-flex">
            <h1>News</h1>
            <button type="button" class="btn btn-primary col-md-2 ms-auto" data-bs-toggle="modal" data-bs-target="#NewsModal">
            Add News</button>
        </div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Caption</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($news as $new )
             <tr>
                <td>{{$new->id}}</td>
                <td>{{$new->title}}</td>
                <td>{{$new->caption}}</td>

                <td>
                @php $images = json_decode($new->image,true); @endphp
                  @if(is_array($images) && !empty($images))
                  @foreach ($images as $image)
                    <img src="{{asset('app/public/'.$image)}}"/>
                  @endforeach
                  @endif
                </td>
                <td>{{$new->datetime}}</td>
             </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
