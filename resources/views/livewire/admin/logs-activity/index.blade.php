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
            <div class="col-md-2 mt-2 text-center">
                <label for="" style="font-weight: 400">Event Changes</label>
                <select name="event" id="event" class="form-select" style="color:dimgray;" wire:model="event">
                    <option value="all">All Changes</option>
                    <option value="created">
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
    <table class="table text-center table-striped elevation-4 mt-4">
        <thead style="background-color:#343a40; color:white;">
            <tr>
                <th scope="col" class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell"
                    style="text-align: center">Event</th>
                <th scope="col">Description</th>
                <th>Changed by</th>
                <th class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">Date and
                    Time</th>
            </tr>
        </thead>
        <tbody class="text-dark">
            @csrf
            @foreach ($logs as $log)
              
                    <tr>
                        <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                            @if ($log->event === 'created')
                                <span class=" btn btn-sm btn-success text-light">Created <span
                                        class="text-justify fas fa-exclamation"></span></span>
                            @elseif ($log->event === 'updated')
                                <span class="btn btn-sm btn-warning text-light">Updated <span
                                        class="text-justify fas fa-exclamation"></span></span>
                            @elseif ($log->event === 'deleted')
                                <span class="btn btn-sm btn-danger text-light">Deleted <span
                                        class="text-justify fas fa-exclamation"></span></span>
                            @endif
                        </td>
                        <td>{{ $log->description }}</td>
                        <td>{{ $log->causer->name ?? 'None' }}</td>
                        <td class="d-none d-md-table-cell d-lg-table-cell d-xl-table-cell" style="text-align: center">
                            {{ $log->created_at->format('F d, Y  h:i:s A') }}</td>
                    </tr>
                {{-- @endif --}}
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center mt-2">
    {{ $logs->onEachSide(-1)->links() }}
</div>
</div>
