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
                                <label for="search" style="padding-top: 5px; padding-right:5px;">Search:</label>
                                <input wire:model.live="search" 
                                        type="text" 
                                        id="search"
                                        placeholder="Search legal opinions"
                                        class="form-control input">
                            </div>
                            <div wire:loading>
                                Searching...
                            </div>

                            <div class="d-flex align-items-center mt-3">
                                <label for="category" class="mr-2">Category:</label>
                                <select 
                                    id="category" 
                                    class="form-control w-50" 
                                    wire:model.lazy="selectedCategory" 
                                    style="padding: 7px;">
                                    <option value="">All Categories</option>
                                    @foreach ($categories as $category)
                                        @if (!is_null($category) && trim($category) !== '')
                                            <option value="{{ $category }}">
                                                {{ ucfirst($category) }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <!-- Filter for LO- Opinions -->
                            <div class="d-flex align-items-center mt-3">
                                <label for="lo_filter" class="mr-2">No Title Opinions:</label>
                                <select 
                                    id="lo_filter" 
                                    class="form-control w-50" 
                                    wire:model.lazy="loFilter" 
                                    style="padding: 7px;">
                                    <option value="">All Opinions</option>
                                    <option value="both">No title Opinions</option>
                                </select>
                            </div>                            
                            
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <!-- Table of Opinions -->
                        <div class="overflow-x-auto mt-6 bg-white shadow-md rounded-lg">
                            <table class="table-auto w-full border-collapse border border-gray-300">
                                <tbody>
                                    @forelse ($opinions as $opinion)
                                        <tr>
                                            <td class="border px-4 py-2 text-center">
                                                {{ $loop->iteration + ($opinions->currentPage() - 1) * $opinions->perPage() }}
                                            </td>
                                            <td class="border px-4 py-2">
                                                @if (!empty($opinion->download_link))
                                                    <a href="{{ route('opinions.showById', ['id' => $opinion->id]) }}">
                                                        {!! $opinion->highlighted_title !!}
                                                    </a>
                                                @else
                                                    <a style="color:red;" href="{{ route('opinions.showById', ['id' => $opinion->id]) }}">
                                                        {!! $opinion->highlighted_title !!}
                                                    </a>
                                                @endif
                                                
                                                @if (!empty($opinion->category))
                                                    <br>
                                                    <span class="text-sm text-gray-600"><strong>Category:</strong> {{ ucfirst($opinion->category) }}</span>
                                                @endif
                                                <br>
                                                
                                                @if (!Str::contains($opinion->reference, 'Category:'))
                                                    <strong>Reference Number: {{ $opinion->reference }}</strong>
                                                @endif
                                
                                                @if (!empty($opinion->preview_text))
                                                    <br>
                                                    <p class="text-gray-600 text-sm mt-2 italic">
                                                        {!! $opinion->preview_text !!}
                                                    </p>
                                                @endif
                                            </td>
                                            <td class="border px-4 py-2 text-sm text-center">
                                                {{ \Carbon\Carbon::parse($opinion->date)->format('F d, Y') }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="border px-4 py-2 text-center text-gray-600">
                                                No legal opinions found.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>                                                            
                            </table>
                        </div>

                        <div class="pagination-container mt-4">
                            {{ $opinions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
