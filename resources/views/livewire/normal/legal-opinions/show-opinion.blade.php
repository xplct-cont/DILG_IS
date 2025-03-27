<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <!-- Card Header -->
                <div class="card-header-sm" style="background-color: #234495; color:white; padding-left:15px; text-transform: uppercase;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: clamp(18px, 4vw, 22px);">Legal Opinions</p>
                </div>
                
                <div class="container mb-4">
                    <div class="col-md-12">
                        <div class="mt-3 px-2">
                            @if (!empty($opinion->download_link))
                                <h1 style="font-family: 'Courier New', Courier, monospace; font-size: clamp(16px, 4vw, 24px);">
                                    {{ $opinion->title }}
                                </h1>
                            @else
                                <h1 style="font-family: 'Courier New', Courier, monospace; color:red; font-size: clamp(16px, 4vw, 24px);">
                                    {{ $opinion->title }}
                                </h1>
                            @endif
                            
                            <div class="d-flex align-items-center mt-2">
                                <p style="color: gray; font-size: clamp(12px, 3vw, 14px);">{{ $opinion->created_at->format('F j, Y') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 px-2">
                        <div class="overflow-x-auto bg-white mt-4" style="padding: 12px; border:1px solid rgb(201, 201, 201);">
                            <strong>Reference Number:</strong>
                            <span>
                                {{ Str::replaceFirst('Category:', '', $opinion->reference) }}
                            </span>
                        </div>

                        <div id="loadingIndicator" class="flex justify-center items-center mt-4">
                            <div class="animate-spin rounded-full h-8 w-8 border-t-4 border-blue-500 border-solid"></div>
                            <p class="ml-3 text-gray-600 text-sm">Loading document...</p>
                        </div>

                        <div class="mt-4">
                            @if (!empty($opinion->download_link))
                                <iframe id="pdfIframe" src="/proxy/pdf?url={{ urlencode($opinion->download_link) }}"
                                    width="100%" height="600px" onload="hideLoading()" style="min-height: 60vh;"></iframe>
                            @else
                                <div class="text-center text-gray-500 p-4 border border-gray-300 rounded">
                                    No document available for this legal opinion.
                                </div>
                            @endif
                        </div>

                        <div class="mt-3 px-2">
                            @if(!empty($opinion->download_link))
                                <p class="text-sm">Note: If plugin is unsupported, kindly <a href="{{$opinion->download_link}}"
                                        class="text-danger" target="_blank">Click here</a> to view.</p>
                            @endif
                        </div>
                        
                        <script>
                            function hideLoading() {
                                document.getElementById('loadingIndicator').style.display = 'none';
                            }
                        </script>

                        <div class="border border-gray-300 mt-4"></div>
                        @php
use App\Models\LegalOpinion;
                        @endphp

                        <div class="mt-4 px-2">
                            <div class="d-none d-md-flex justify-content-between align-items-center w-full">
                                <strong class="text-lg">More Legal Opinions</strong>
                                <div class="ml-auto">
                                    <a href="/legal_opinions" style="text-decoration: none;">
                                        <span style="padding: 0.25rem 0.5rem; font-size: 0.875rem;
                                                border: 1px solid rgb(189, 188, 188); color: rgb(79, 79, 79);
                                                transition: all 0.2s ease;"
                                            onmouseover="this.style.backgroundColor='#f3f4f6'; this.style.borderColor='#9ca3af'; this.style.color='#374151'"
                                            onmouseout="this.style.backgroundColor=''; this.style.borderColor='rgb(189, 188, 188)'; this.style.color='rgb(79, 79, 79)'">
                                            Legal Opinions Archive
                                        </span>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="d-md-none">
                                <strong class="text-lg">More Legal Opinions</strong>
                                <div class="mt-2 mb-3">
                                    <a href="/legal_opinions" style="text-decoration: none;">
                                        <span class="px-2 py-1 text-sm"
                                            style="border:1px solid rgb(189, 188, 188); color:rgb(79, 79, 79);">Legal Opinions Archive</span>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <div class="d-md-none">
                                    <ul class="list-unstyled">
                                        @foreach(LegalOpinion::where('id', '!=', $opinion->id)->inRandomOrder()->take(5)->get() as $opinion)
                                            <li class="mb-3 pb-2 border-bottom">
                                                <a href="{{ route('opinions.showById', ['id' => $opinion->id]) }}"
                                                    class="text-blue-500 d-block">
                                                    {{ Str::limit($opinion->title, 60) }}
                                                </a>
                                                <span class="text-muted small">{{ $opinion->date }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                                <div class="d-none d-md-block">
                                    <table class="w-full">
                                        <colgroup>
                                            <col style="width: 70%;"> <!-- Title column width -->
                                            <col style="width: 30%;"> <!-- Date column width -->
                                        </colgroup>
                                        <tbody>
                                            @foreach(LegalOpinion::where('id', '!=', $opinion->id)->inRandomOrder()->take(5)->get() as $opinion)
                                                <tr>
                                                    <td class="px-4 py-2 text-sm align-middle">
                                                        <a href="{{ route('opinions.showById', ['id' => $opinion->id]) }}" class="text-blue-500">
                                                            {{ $opinion->title }}
                                                        </a>
                                                    </td>
                                                    <td class="px-4 py-2 text-sm text-muted text-right align-middle whitespace-nowrap">
                                                        {{ $opinion->date }}
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
    </div>
</div>