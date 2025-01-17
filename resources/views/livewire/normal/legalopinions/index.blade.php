<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <div class="card-header-sm" style="background-color: #234495; color:white;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">Legal Opinions</p>
                </div>
                <div class="container mb-4">
                    <div class="col-md-12">
                        <div class="mt-3">
                            <div class="d-flex">
                                <label for="">Legal Opinions:</label>
                                <input type="search" style="border-radius: 20px;" wire:model.debounce.400ms="search"
                                    class="form-control input" placeholder="Search">
                            </div>
                            <div wire:loading>
                                Searching...
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- Table of Opinions -->
                        <div class="overflow-x-auto mt-6 bg-white shadow-md rounded-lg">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Title</th>
                                        <th class="px-4 py-2">Reference</th>
                                        <th class="px-4 py-2">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($opinions as $opinion)
                                        <tr>
                                            <td class="border px-4 py-2">
                                                <a href="{{ $opinion['link'] }}" target="_blank" class="text-blue-600 hover:underline">
                                                    {{ $opinion['title'] }}
                                                </a>
                                            </td>
                                            <td class="border px-4 py-2">{{ $opinion['reference'] }}</td>
                                            <td class="border px-4 py-2">{{ $opinion['date'] }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-4 text-gray-500">No legal opinions found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Links -->
                        <div class="mt-6">
                            {{ $opinions->links('pagination::tailwind') }}
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
