<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <div class="card-header-sm" style="background-color: #234495; color:white; padding-left:15px; text-transform: uppercase;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">Presidential Directives</p>
                </div>
                <div class="container mb-4">
                    <div class="col-md-12">
                        <div class="mt-3">
                            <div class="d-flex">
                                <h1 style="font-family: 'Courier New', Courier, monospace;">
                                    {{ $directive->title }} 
                                </h1>
                            </div>

                            <div class="d-flex align-items-center">
                                <p style="color: gray;">{{ $directive->created_at->format('F j, Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="overflow-x-auto bg-white mt-4" style="padding: 15px; padding-left: 25px; border:1px solid rgb(201, 201, 201);">
                            <strong>Reference Number:</strong> 
                            <span>
                                {{ Str::replaceFirst('Category:', '', $directive->reference) }}
                            </span>
                        </div>
                        
                         <!-- Loading Indicator -->
                         <div id="loadingIndicator" class="flex justify-center items-center mt-4">
                            <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-blue-500 border-solid"></div>
                            <p class="ml-3 text-gray-600">Loading document...</p>
                        </div>

                        <!-- Iframe -->
                        <div class="mt-4">
                            <iframe id="pdfIframe" src="/proxy/pdf?url={{ urlencode($directive->download_link) }}" width="100%" height="1000px" onload="hideLoading()"></iframe>
                        </div>

                        <script>
                            function hideLoading() {
                                document.getElementById('loadingIndicator').style.display = 'none';
                            }
                        </script>

                        <div>
                            <p>Note: If plugin is unsupported, kindly<a href="{{$directive->download_link}}" class="text-danger" target="_blank"> Click here </a>to view.</p>
                        </div>

                        <div class="border border-gray-500 mt-4"></div>
                        @php
                            use App\Models\PresidentialDirective;
                        @endphp

                        <div class="mt-4">
                            <strong class="text-lg">More Issuances</strong>
                            <ul class="mt-2">
                                
                            </ul>
                            <div class="text-right" style="margin-top: -25px;">
                                <a href="/presidential_directives" style="text-decoration: none;">
                                    <span class="px-3 py-1" style="border:1px solid rgb(189, 188, 188); color:rgb(79, 79, 79);">Issuances Archive</span>
                                </a>
                            </div>
                        </div>                        

                        <div class="mt-2">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2"></th>
                                        <th class="px-4 py-2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(PresidentialDirective::where('id', '!=', $directive->id)->inRandomOrder()->take(5)->get() as $directive)
                                        <tr>
                                            <td class="px-4 py-2 text-sm">
                                                <a href="{{ route('directives.showById', ['id' => $directive->id]) }}" class="text-blue-500">
                                                    {{ $directive->title }}
                                                </a>
                                            </td>
                                            <td class="px-4 py-2 text-sm" style="color: rgb(176, 176, 176);">
                                                {{ $directive->date }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
