<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <!-- Card Header -->
                <div class="card-header-sm" style="background-color: #234495; color:white; padding-left:15px; text-transform: uppercase;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">Legal Opinions</p>
                </div>

                <div class="container mb-4">
                    <div class="col-md-12">
                        <!-- Search and Category Filters -->
                        <div class="mt-3">
                            <!-- Search Input -->
                            <div class="d-flex">
                                <label for="" style="padding-top: 5px; padding-right:5px;">Search:</label>
                                <input wire:model.live="search" 
                                        type="text" 
                                        placeholder="Search legal opinions"
                                        class="form-control input">

                            </div>
                            <div wire:loading>
                                Searching...
                            </div>

                            <!-- Category Dropdown -->
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
                                                {{-- <a href="{{ route('opinions.showByTitle', $opinion->title) }}" style="text-decoration: none;">
                                                    {{ $opinion->title }}
                                                </a> --}}
                                                <a href="{{ route('opinions.showById', ['id' => $opinion->id]) }}">{{ $opinion->title }}</a>
                                                @if (!empty($opinion->category))
                                                    <br>
                                                    <span class="text-sm text-gray-600">{{ ucfirst($opinion->category) }}</span>
                                                @endif
                                                <br>
                                                <strong>{{ $opinion->reference }}</strong>
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

                        <!-- Pagination Links -->
                        <div class="pagination-container mt-4">
                            {{ $opinions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

