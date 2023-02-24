<div>
    @if ($message = Session::get('message'))
    <div class="alert alert-success alert-block mt-2">
        <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
<div class="container">
    <div class="row ">
        <div class="col-md-4 mx-auto">

            <p class="mt-2 m-2">From:</p>
            <input style="border-radius: 20px;" type="date" name="" id="" wire:model="fromDate"
                class="form-control ">
            <p class="mt-2 m-2">To:</p>
            <input style="border-radius: 20px;" type="date" name="" id="" wire:model="toDate"
                class="form-control ">

        </div>
        <div class="col-md-2 mt-3">
            <label for="">Changes</label>
            <select name="event" id="event" class="form-select"
                style="color:dimgray;" wire:model="event">
                <option value="all">All Changes</option>
                <option
                    value="created">
                    Created
                </option>
                <option value="updated">
                    Updated</option>
                <option value="deleted">Deleted</option>
            </select>

    </div>
        <div class="col-md-4 mx-auto">
            <div class="" style="margin-top: 40px;">
                <input type="search" style="border-radius: 20px;" wire:model="search" class="form-control input"
                    placeholder="Search">
            </div>

        </div>
    </div>
</div>
<table class="table text-center table-striped elevation-4">
    <thead style="background-color:#343a40; color:white;">
        <tr>
            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                style="text-align: center">Event</th>
            <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                style="text-align: center">Description</th>
            <th>Changed by</th>
            <th>Date and Time</th>
        </tr>

    </thead>
    <tbody class="text-dark">
        @foreach ($logs as $log )
        @if($log->causer_id != 1)
        <tr>
            <td>{{$log->event}}</td>
            <td>{{$log->description}}</td>
            <td>{{$log->causer->name}}</td>
            <td>{{$log->created_at}}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
</div>
<div class="d-flex justify-content-center mt-2">
    {{ $logs->links() }}
</div>
</div>
