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
                @foreach ((array)$new->image as $img)
                    <td><img src="{{asset('app/images')}}/{{$img}}" style="width: 70px;height:70px;" alt=""></td>
                @endforeach
                <td>{{$new->timestamps}}</td>
             </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
