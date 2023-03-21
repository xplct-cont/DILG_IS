<div>
    <div class="container">
        {{-- <div class="container mb-3 text-start">
            <a href="{{ url('export_citizes_charter_pdf') }}" class="btn btn-sm"
                style="background-color: #234495; color:white;"><span class="fas fa-file-pdf"></span> Download PDF</a>
        </div> --}}
        <p class="text-center">This page is currently unavailable at the moment.<br>-The Developers</p>
        @foreach ($cit_charter as $citizen)
            <div class="bg-secondary p-1 mr-3 ml-3" style="">
                <p class="text-wrap text-center mt-1" style="font-weight: 500; font-size: 18px;">{{ $citizen->title }}</p>
            </div>

            <div class="mb-5 mt-1 col-md-12">
                <img src="{{ asset('citizens_charter_images/' . $citizen->images) }} " alt="Image"
                    class="elevation-4" style=" height: auto; width:100%;">
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center flex-wrap mt-2">
        {{ $cit_charter->onEachSide(-1)->links() }}
    </div>
</div>
