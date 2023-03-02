<div>
    <div class="container">
        @foreach ($cit_charter as $citizen)
            <div class="bg-secondary p-1 mr-3 ml-3" style="">
                <p class="text-wrap text-center mt-1" style="font-weight: 500; font-size: 18px;">{{ $citizen->title }}</p>
            </div>

            <div class="mb-5 mt-1 col-md-12">
                <img src="{{ asset('citizens_charter_images/' . $citizen->images) }} " alt="Image" class="elevation-4"
                    style=" height: auto; width:100%;">
            </div>
        @endforeach

    </div>
    <div class="d-flex justify-content-center mt-2">
        {{ $cit_charter->links() }}
    </div>
</div>
