<div>
    <div class="container">
      

        @foreach ($pdf_cit_charter as $pdf_cit)
            <div class="text-end">
                <a class="btn mt-2 ml-3 mb-3" style="color:white; background-color:#234495; font-size: 13px;"
                    href="{{ url('/download_pdf_cit_charter', $pdf_cit->file) }}"><span class=""
                        style="font-size: 13px;"></span>Download PDF <span class="text-danger fas fa-file-pdf"></span></a>
            </div>
        @endforeach


        @foreach ($cit_charter as $citizen)
            <div class="bg-secondary p-1 mr-1 ml-1" style="">
                <p class="text-wrap text-center mt-1" style="font-weight: 500; font-size: 18px;">{{ $citizen->title }}
                </p>
            </div>

            <div class="mb-5 mt-1 col-md-12" style=" padding: 3px; box-shadow: 2px 2px 5px #888;">
                <video controls autoplay style=" height: 100%; width:100%;" controls>
                    <source src="{{ URL::asset('citizens_charter_videos/' . $citizen->file) }}" class="elevation-4"
                        style=" " type="video/mp4">
                    Your browser does not support the video tag.
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center flex-wrap mt-2">
        {{ $cit_charter->onEachSide(-1)->links() }}
    </div>
</div>
