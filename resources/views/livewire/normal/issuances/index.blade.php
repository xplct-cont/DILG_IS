<div>
    <div class="mx-auto">
        <div class="col-md-12">
            <div class="card elevation-4">
                <div class="card-header-sm" style="background-color: #002C76; color:white;">
                    <p class="ml-2 mt-2" style="font-weight: 450; font-size: 22px;">Latest Issuances Archive</p>
                </div>

                {{-- Add Filter and Search Function Here --}}

                <div class="container mb-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 mt-3">

                                    <label for="">Outcome Area/Program:</label>
                                    <select name="outcome_area" id="outcome_area" class="form-select"
                                        style="color:dimgray;" wire:model="outcome">
                                        <option value="all">All Outcome Area</option>
                                        <option
                                            value="ACCOUNTABLE, TRANSPARENT, PARTICIPATIVE, AND EFFECTIVE LOCAL GOVERNANCE">
                                            ACCOUNTABLE, TRANSPARENT, PARTICIPATIVE, AND EFFECTIVE LOCAL GOVERNANCE
                                        </option>
                                        <option value="PEACEFUL, ORDERLY AND SAFE LGUS STRATEGIC PRIORITIES">
                                            PEACEFUL,
                                            ORDERLY AND SAFE LGUS STRATEGIC PRIORITIES</option>
                                        <option value="SOCIALLY PROTECTIVE LGUS">SOCIALLY PROTECTIVE LGUS</option>
                                        <option
                                            value="ENVIRONMENT-PROTECTIVE, CLIMATE CHANGE ADAPTIVE AND DISASTER RESILIENT LGUS">
                                            ENVIRONMENT-PROTECTIVE, CLIMATE CHANGE ADAPTIVE AND DISASTER RESILIENT
                                            LGUS
                                        </option>
                                        <option value="BUSINESS-FRIENDLY AND COMPETITIVE LGUS">BUSINESS-FRIENDLY AND
                                            COMPETITIVE LGUS</option>
                                        <option value="STRENGTHENING OF INTERNAL GOVERNANCE">STRENGTHENING OF
                                            INTERNAL
                                            GOVERNANCE</option>
                                    </select>

                            </div>
                            <div class="col-md-6 mt-5">
                                <input type="search" style="border-radius: 20px;" wire:model="search"
                                    class="form-control input" placeholder="Search">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table bg-light table-bordered table-hover text-secondary">
                        <tbody class="elevation-4">
                            @foreach ($issuances as $latest_issuances)
                                <tr>
                                    <td class="" style="font-size: 16px;"><a
                                            href="{{ url('/latest_issuances/' . $latest_issuances->id) }}">
                                            {{ $latest_issuances->title }} </a><br>
                                        <p class="mt-2" style="font-size: 12px;">
                                            {{ Carbon\Carbon::parse($latest_issuances->date)->format('F d, Y') }}
                                        </p>
                                        <p class="text-center" style="font-size: 12px;">
                                            {{ $latest_issuances->outcome_area }}</p>
                                    </td>
                                    <td class="" style="background-color:#002C76; color:white;  font-size: 12px;">
                                        Reference No: <span
                                            style="font-size: 15px; font-weight: 350; color:white;">{{ $latest_issuances->reference_num }}</span>
                                        <p class="text-center mt-2" style=" font-size: 14px">
                                            {{ $latest_issuances->category }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
                <div class="d-flex justify-content-center mt-2">
                    {{ $issuances->onEachSide(1)->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
