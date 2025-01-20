<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <div class="card-header-sm" style="background-color: #234495; color:white; padding-left:15px; text-transform: uppercase;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">Legal Opinions</p>
                </div>
                <div class="container mb-4">
                    <div class="col-md-12">
                        <div class="mt-3">
                            <div class="d-flex">
                                <label for="" style="padding-top: 5px; padding-right:5px;">Search:</label>
                                <input type="search" style="border-radius: 20px;" wire:model.debounce.400ms="search"
                                    class="form-control input" placeholder="look for an opinion...">
                            </div>
                            <div wire:loading>
                                Searching...
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- Table of Opinions -->
                        <div class="overflow-x-auto mt-6 bg-white shadow-md rounded-lg">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">#</th>
                                        <th class="px-4 py-2">Title</th>
                                        <th class="px-4 py-2">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($opinions as $opinion)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $loop->iteration }}</td> 
                                            <td class="border px-4 py-2">
                                                <a href="{{ $opinion['link'] }}" target="_blank" class="text-primary">
                                                    {{ $opinion['title'] }}
                                                </a>
                                                <br>
                                                <strong>{{ $opinion['reference'] }}</strong> 
                                            </td>
                                            <td class="border px-4 py-2 text-sm">{{ $opinion['date'] }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center py-4 text-muted">No legal opinions found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Links (Bootstrap) -->
                        <div class="pagination">
                            {{ $opinions->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
