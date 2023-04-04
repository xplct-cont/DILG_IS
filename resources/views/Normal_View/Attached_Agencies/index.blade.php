@extends('layouts.app')

@section('content')
    <div class="container col-md-12 mt-4">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="img/napolcom.png" style="height: 150px;" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href="https://r7.napolcom.gov.ph/" style="text-decoration:none;">
                            <p class="text-center" style="font-weight: 700; font-size: 22px; color:#8c0509;">National Police
                                Commission</p>
                        </a>
                        <p class="text-justify" style="font-weight: 400; font-size: 16px;">The promulgation of Republic Act
                            6975, otherwise known as the Department of the Interior and Local Government (DILG) Act of 1990,
                            operationalized and initiated the call for a tangible reform in the country’s public safety
                            services particularly for the uniformed bureaus under DILG.

                            The same Act factually complied with the constitutional mandate for a unified single national
                            police force, which is civilian in character under the administration of the National Police
                            Commission (NAPOLCOM). Likewise, the same law upgraded the fire and jail services as new and
                            separate bureaus under the DILG stewardship.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="img/bfp.png" style="height: 150px;" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href="https://region7.bfp.gov.ph/" style="text-decoration:none;">
                            <p class="text-center" style="font-weight: 700; font-size: 22px; color:#8c0509;">Bureau of Fire
                                Protection</p>
                        </a>
                        <p class="text-justify" style="font-weight: 400; font-size: 16px;">The enactment of Republic Act
                            6975, otherwise known as the Department of Interior and Local Government Act of 1990 which took
                            effect on January 1, 1991 paved the way for the establishment of the Philippine National Police
                            (PNP), Bureau of Fire Protection (BFP) and Bureau of Jail Management and Penology (BJMP) as
                            separate entities. Specifically, the Fire Bureau s charter was created under Chapter IV (Section
                            53 to 59) and carried-out through the provisions of Rule VII (Sections 49 to 58) of the
                            Implementing Rules and Regulations of the said law.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container col-md-12 mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="img/bjmp.png" style="height: 150px;" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href="https://www.bjmp.gov.ph/" style="text-decoration:none;">
                            <p class="text-center" style="font-weight: 700; font-size: 22px; color:#8c0509;">Bureau of Jail
                                Management and Penology</p>
                        </a>
                        <p class="text-justify" style="font-weight: 400; font-size: 16px;">As one of the five pillars of the
                            Criminal Justice System, the Bureau of Jail Management and Penology (BJMP) was created to
                            address growing concern of jail management and penology problem. Primarily, its clients are
                            detainees accused before a court who are temporarily confined in such jails while undergoing
                            investigation, waiting final judgement and those who are serving sentence promulgated by the
                            court 3 years and below. As provided for under R.A. No. 6975, the Jail Bureau is mandated to
                            take operational and administrative control over all city, district and municipal jails.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="img/pnp.png" style="height: 150px;" alt="">
                    </div>
                    <div class="col-md-8">
                        <a href="https://pro7.pnp.gov.ph/" style="text-decoration:none;">
                            <p class="text-center" style="font-weight: 700; font-size: 22px; color:#8c0509;">Philippine
                                National
                                Police (PNP)</p>
                        </a>
                        <p class="text-justify" style="font-weight: 400; font-size: 16px;">The Philippine National Police
                            (PNP) has put in place all necessary safeguards to eliminate every possible situation or
                            opportunity for corruption in the police service.

                            We acknowledge that law enforcers are vulnerable to some opportunities for corruption, but the
                            PNP leadership has continued to strive to block these opportunities for corruption to take
                            place.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
