<div>
    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <img src="/img/dilg-main.png" style="height: 150px; width: 150px;" alt="">
        </div>
        <h1 class="text-center " style="font-size: 30px; margin-bottom: 50px;">FIELD OFFICERS</h1>
    </div>

    <div class="container mb-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mt-2">
                    <select class="form-select mt-1"  wire:model="municipality">
                        <option value="all">All municipalities</option>
                        @foreach ($municipalities as $municipality)
                            <option value="{{ $municipality->id }}">{{ $municipality->municipality }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="search" style="border-radius: 20px;" wire:model="search" class="form-control input"
                        placeholder="Search">
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="col-md-12 mb-3 mt-3">
            <div class="d-flex row">
                <div class="col-md-12">

                    <div class="row">
                        @foreach ($field_officers as $field_off)
                            <div class="col-md-2 text-center d-flex justify-content-center">
                                <div class="zoom">
                                    <img src="{{ asset('field_off_images/' . $field_off->profile_img) }} " alt="Image"
                                        class="shadow-lg border border-dark"
                                        style="border-radius: 50%; height: 140px; width: 140px;">
                                    <p class="text-center" style=" font-weight:500;">{{ $field_off->fname }}
                                        {{ $field_off->mid_initial }} {{ $field_off->lname }}</p>
                                    <p class="text-center" style="margin-top: -20px;">
                                        {{ $field_off->position }}</p>
                                    <p class="text-center" style="margin-top: -20px;">
                                        {{ $field_off->cluster }}</p>
                                    <p class="text-center" style="margin-top: -20px; font-weight: 500;">
                                        {{ $field_off->municipality->municipality }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
