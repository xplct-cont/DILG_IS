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
                                <h1 style="font-family: 'Courier New', Courier, monospace;">
                                    {{ $opinion->title }} 
                                </h1>
                            </div>

                            <div class="d-flex align-items-center">
                                <p style="color: gray;">{{ $opinion->created_at->format('F j, Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="overflow-x-auto bg-white mt-4" style="padding: 15px; padding-left: 25px; border:1px solid rgb(201, 201, 201);">
                           <strong>{{ $opinion->reference }}</strong>
                        </div>

                        <div class="mt-4 text-center">
                            <iframe 
                                src="{{ asset('storage/' . $opinion->attachment) }}" 
                                width="100%" 
                                height="600px" 
                                style="border: 1px solid rgb(189, 188, 188);">
                            </iframe>
                        </div>
                        
                        <div class="mt-4" style="background-color: rgb(235, 235, 235); text-align: center;">
                            <img src="{{ asset('storage/' . $opinion->image) }}" alt="" style="display: block; margin: auto;"> 
                        </div>

                        <div class="mt-4">
                            <a href="{{ asset('storage/' . $opinion->attachment) }}" style="text-decoration: none;">
                                <span class="p-2" style="border:1px solid rgb(189, 188, 188); color:rgb(79, 79, 79);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                        <path d="M4.603 14.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.7 11.7 0 0 0-1.997.406 11.3 11.3 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.245.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 7.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z"/>
                                    </svg>
                                    Download Attachment
                                </span>
                            </a>
                        </div>

                        <div class="border border-gray-500 mt-4"></div>
                        @php
                            use App\Models\LegalOpinion;
                        @endphp

                        <div class="mt-4">
                            <strong class="text-lg">More Legal Opinions</strong>
                            <ul class="mt-2">
                                
                            </ul>
                            <div class="text-right" style="margin-top: -25px;">
                                <a href="/legal_opinions" style="text-decoration: none;">
                                    <span class="px-3 py-1" style="border:1px solid rgb(189, 188, 188); color:rgb(79, 79, 79);">Legal Opinions Archive</span>
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
                                    @foreach(LegalOpinion::where('id', '!=', $opinion->id)->inRandomOrder()->take(5)->get() as $opinion)
                                        <tr>
                                            <td class="px-4 py-2 text-sm">
                                                <a href="{{ route('opinions.showById', ['id' => $opinion->id]) }}" class="text-blue-500">
                                                    » {{ $opinion->title }}
                                                </a>
                                            </td>
                                            <td class="px-4 py-2 text-sm" style="color: gray;">
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
