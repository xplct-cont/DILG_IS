<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <div class="card-header-sm"
                    style="background-color: #234495; color:white; padding-left:15px; text-transform: uppercase;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">Legal Opinions</p>
                </div>

                <div class="container mb-4">
                    <div class="col-md-12">
                        <div class="mt-3">
                            <div class="d-none d-md-flex">
                                <div class="search position-relative" style="width: 50%; padding-right: 5px;">
                                    <input wire:model.live="search" type="text" id="search"
                                        placeholder="Search legal opinions here..." class="form-control input pe-4">
                                    <i
                                        class="fas fa-search position-absolute end-0 top-50 translate-middle-y me-3 text-muted"></i>
                                </div>

                                <div class="category position-relative" style="width: 25%; padding-right: 5px;">
                                    <select id="category" class="form-control w-full pe-4"
                                        wire:model.lazy="selectedCategory"
                                        style="padding: 7px; appearance: none; -webkit-appearance: none; -moz-appearance: none;">
                                        <option value="">All Categories</option>
                                        @foreach ($categories as $category)
                                            @if (!is_null($category) && trim($category) !== '')
                                                <option value="{{ $category }}">
                                                    {{ ucfirst($category) }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <i class="fas fa-chevron-down position-absolute end-0 top-50 translate-middle-y me-3 text-muted"
                                        style="pointer-events: none;"></i>
                                </div>

                                <div class="no-title-opinions position-relative" style="width: 25%;">
                                    <select id="lo_filter" class="form-control w-full pe-4" wire:model.lazy="loFilter"
                                        style="padding: 7px; appearance: none; -webkit-appearance: none; -moz-appearance: none;">
                                        <option value="">All Opinions</option>
                                        <option value="both">No title Opinions</option>
                                    </select>
                                    <i class="fas fa-chevron-down position-absolute end-0 top-50 translate-middle-y me-3 text-muted"
                                        style="pointer-events: none;"></i>
                                </div>
                            </div>

                            <div class="d-flex flex-column d-md-none gap-3">
                                <div class="search position-relative w-100">
                                    <input wire:model.live="search" type="text" id="search_mobile"
                                        placeholder="Search legal opinions here..." class="form-control input pe-4">
                                    <i
                                        class="fas fa-search position-absolute end-0 top-50 translate-middle-y me-3 text-muted"></i>
                                </div>

                                <div class="category position-relative w-100">
                                    <select id="category_mobile" class="form-control w-full pe-4"
                                        wire:model.lazy="selectedCategory"
                                        style="padding: 7px; appearance: none; -webkit-appearance: none; -moz-appearance: none; font-size: 14px;">
                                        <option value="" style="font-size: 14px;">All Categories</option>
                                        @foreach ($categories as $category)
                                            @if (!is_null($category) && trim($category) !== '')
                                                <option value="{{ $category }}" style="font-size: 14px;">
                                                    {{ ucfirst($category) }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <i class="fas fa-chevron-down position-absolute end-0 top-50 translate-middle-y me-3 text-muted"
                                        style="pointer-events: none;"></i>
                                </div>

                                <div class="no-title-opinions position-relative w-100">
                                    <select id="lo_filter_mobile" class="form-control w-full pe-4"
                                        wire:model.lazy="loFilter"
                                        style="padding: 7px; appearance: none; -webkit-appearance: none; -moz-appearance: none; font-size: 14px;">
                                        <option value="" style="font-size: 14px;">All Opinions</option>
                                        <option value="both" style="font-size: 14px;">No title Opinions</option>
                                    </select>
                                    <i class="fas fa-chevron-down position-absolute end-0 top-50 translate-middle-y me-3 text-muted"
                                        style="pointer-events: none;"></i>
                                </div>
                            </div>

                            <div class="mt-3 ml-2" wire:loading>
                                Searching...
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
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
                                                    <a style="color:red;"
                                                        href="{{ route('opinions.showById', ['id' => $opinion->id]) }}">
                                                        {!! $opinion->highlighted_title !!}
                                                    </a>
                                                @endif

                                                @if (!empty($opinion->category))
                                                    <br>
                                                    <span class="text-sm text-gray-600"><strong>Category:</strong>
                                                        {{ ucfirst($opinion->category) }}</span>
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