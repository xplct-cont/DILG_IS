<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <div class="card-header-sm" style="background-color: #002C76; color:white;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">Latest Issuances Archive</p>
                </div>

                {{-- Add Filter and Search Function Here --}}

                <div class="container mb-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <select class="form-select mt-1"  wire:model="category">
                                    <option value="all">All Issuances</option>
                                    @foreach ($issuances as $category)
                                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="search" style="border-radius: 20px;" wire:model="search" class="form-control input"
                                    placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table bg-light table-bordered table-hover text-secondary">
                        <tbody class="elevation-4">
                            @foreach ($issuances as $latest_issuances)
                                <tr>
                                    <td class="" style="font-size: 16px;"><a
                                            href="{{ url('/latest_issuances/' . $latest_issuances->id) }}">
                                            {{ $latest_issuances->title }} </a><br>
                                        <p class="mt-2" style="font-size: 12px;">
                                            {{ Carbon\Carbon::parse($latest_issuances->date)->format('F d, Y') }}
                                        </p>
                                    </td>
                                    <td class="" style="background-color:#002C76; color:white;  font-size: 12px;">
                                        Reference No: <span
                                            style="font-size: 15px; font-weight: 350; color:white;">{{ $latest_issuances->reference_num }}</span>
                                        <p class="text-center mt-2" style=" font-size: 14px">
                                            {{ $latest_issuances->category }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
                <div class="d-flex justify-content-center mt-2">
                    {{ $issuances->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
