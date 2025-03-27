<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <!-- Card Header -->
                <div class="card-header-sm" style="background-color: #234495; color:white; padding-left:15px; text-transform: uppercase;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">Republic Acts Archive</p>
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
                                        placeholder="Search republic acts"
                                        class="form-control input">

                            </div>
                            <div wire:loading>
                                Searching...
                            </div>                            
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <!-- Table of Opinions -->
                        <div class="overflow-x-auto mt-6 bg-white shadow-md rounded-lg">
                            <table class="table-auto w-full border-collapse border border-gray-300">
                                <tbody>
                                    @forelse ($acts as $act)
                                        <tr>
                                            <td class="border px-4 py-2 text-center">
                                                {{ $loop->iteration + ($acts->currentPage() - 1) * $acts->perPage() }}
                                            </td>
                                            <td class="border px-4 py-2">
                                                {{-- <a href="{{ route('opinions.showByTitle', $opinion->title) }}" style="text-decoration: none;">
                                                    {{ $opinion->title }}
                                                </a> --}}
                                                <a href="{{ route('acts.showById', ['id' => $act->id]) }}">{{ $act->title }}</a>
                                            
                                                <br>
                                                
                                                @if (!Str::contains($act->reference, 'Category:'))
                                                    <strong>Reference Number: {{ $act->reference }}</strong>
                                                @endif

                                            </td>
                                            <td class="border px-4 py-2 text-sm text-center">
                                                {{ \Carbon\Carbon::parse($act->date)->format('F d, Y') }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="border px-4 py-2 text-center text-gray-600">
                                                No republic acts found.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Links -->
                        <div class="pagination-container mt-4">
                            {{ $acts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
