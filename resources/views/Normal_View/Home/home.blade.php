@extends('layouts.app')

@section('content')
    <div class="mx-auto text-center">
        <div class="">
            @foreach ($home_images as $home_img)
                <div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                        </ol>
                        <div class="carousel-inner responsive">
                            @php
                                $images = json_decode($home_img->images, true);
                            @endphp
                            @foreach ($images as $key => $image)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img class="responsive" src="{{ asset('home_images/' . $image) }}" height="650"
                                        width="1250" />
                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            @endforeach
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mb-5 ">

                <a href="{{ route('/provincial_director') }}" type="button" class="btn btn-md"
                    style="background-color: #234495; color: white; width: 300px; overflow:auto; border-radius:10px;">THE
                    PROVINCIAL
                    DIRECTOR
                    <span class="fas fa-arrow-right" style="margin-left:38px;"></span></a><br><br>
                <a href="{{ route('/about_us') }}" type="button" class="btn btn-md"
                    style="background-color: #234495; color: white; width: 300px; overflow:auto; border-radius:10px;">VISION
                    &
                    MISSION <span class="fas fa-arrow-right" style="margin-left: 100px;"></span></a><br><br>
                <a href="{{ url('/latest_issuances') }}" type="button" class="btn btn-md"
                    style="background-color: #234495; color: white; width: 300px; overflow:auto; border-radius:10px;">LATEST
                    ISSUANCES
                    <span class="fas fa-arrow-right" style="margin-left: 100px;"></span></a>

            </div>
            <div class="col-md-6 mt-5 mb-5">
                <div class="text-center">
                    <img src="/img/dilg-main.png" style="height: 100px; width: 100px;" alt="">
                </div>

                <h1 class="text-left" style="font-size: 22px; font-weight: 500;">
                    Department of the Interior and Local
                    Government</h1>
                <p class="text-left mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    The DILG is the executive department of the Philippine government responsible for promoting peace and
                    order, ensuring public safety and strengthening local government capability aimed towards the effective
                    delivery of basic services to the citizenry.</p>
            </div>
        </div>
    </div>

    <div class="mt-4 ml-3 mr-3" style=" padding: 7px; background: #234495; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">NEWS & UPDATES</h1>
    </div>

    <div class="mx-auto mt-3 col-md-11">
        <div class="">
            @csrf
            @foreach ($news_images as $new)
                <div class="card">
                    <div class=" card-body elevation-4">
                        <a href="#" data-toggle="modal" id="news_updates_view_link"
                            data-target="#news_update_id{{ $new->id }}" style="text-decoration:none; color:dimgray">

                            <div class="row d-flex justify-content-center mt-1">
                                <div class="col-md-6 mx-auto mt-2 ">

                                    <h1 style="font-size: 18px; font-weight: 500; color:dimgray;">
                                        Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1>
                                    <br>
                                    <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                    <p class="text-left" style="font-size: 15px; font-weight: 400;">
                                        {{ Illuminate\Support\Str::limit($new->caption, 300) }}</p>
                                </div>
                                <div class="col-md-6 text-center mx-auto">
                                    <div class="">

                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                                            </ol>
                                            <div class="carousel-inner text-center mx-auto"
                                                style="height:auto; width: auto;">
                                                @php
                                                    $images = json_decode($new->images, true);
                                                @endphp
                                                @foreach ($images as $key => $image)
                                                    <div class="carousel-item zoom {{ $key == 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('/news_updates/' . $image) }}"
                                                            style="height:auto; max-height:250px; width: auto; max-width: 100%; padding: 3px;
                                                            box-shadow: 2px 2px 5px #888;" />
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </a>

                <div class="modal fade" id="news_update_id{{ $new->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header ">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="color:dimgray;">

                                <div class="">
                                    <h1 class="text-end" style="font-size: 18px; font-weight: 500; color:dimgray;">
                                        Post: {{ \Carbon\Carbon::parse($new->created_at)->format('M j, Y h:i A') }}</h1>
                                    <br>
                                    <p class="text-left" style="font-size: 18px;">{{ $new->title }}</p>
                                    <p class="text-left" style="font-size: 15px; font-weight: 400;">
                                        {{ $new->caption }}</p>

                                   
                                    <div class="image-container">
                                        @php
                                            $images = json_decode($new->images, true);
                                        @endphp
                                        @foreach ($images as $image)
                                            <img src="{{ asset('/news_updates/' . $image) }}" alt="" />
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>

    <div class="d-flex justify-content-center mb-5 mt-3">
        <a href="{{ url('/news_update') }}" type="button" class="btn btn-sm"
            style="background-color: #234495; color: white; border-radius: 20px; padding-left: 20px; padding-right: 20px;"
            href="#">See more...</a>
    </div>

    <div class="mt-4 ml-3 mr-3" style=" padding: 7px; background: #234495; color: #FFFFFF; margin-bottom: 5px;">
        <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">LATEST ISSUANCES</h1>
    </div>

    <div class="card-body">
        <table class="table bg-light table-bordered table-hover text-secondary">
            <tbody class="elevation-4">
                @foreach ($latest_issuances as $issuances)
                    <tr>
                        <td class="" style="font-size: 16px; text-transform: uppercase;"><a
                                href="{{ url('/latest_issuances/' . $issuances->id) }}">
                                {{ $issuances->title }} </a><br>
                            <p class="mt-2" style="font-size: 12px;">
                                {{ Carbon\Carbon::parse($issuances->date)->format('F d, Y') }}
                            </p>
                            <p class="text-center" style="font-size: 12px;">
                                {{ $issuances->outcome_area }}</p>
                        </td>
                        <td class="" style="background-color:#234495; color:white;  font-size: 12px;">
                            Reference No: <span
                                style="font-size: 15px; font-weight: 350; color:white;">{{ $issuances->reference_num }}</span>
                            <p class="text-center mt-2" style=" font-size: 14px">
                                {{ $issuances->category }}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mb-5 mt-3">
        <a href="{{ url('/latest_issuances') }}" type="button" class="btn btn-sm"
            style="background-color: #234495; color: white; border-radius: 20px; padding-left: 20px; padding-right: 20px;"
            href="#">See more...</a>
    </div>

    <div class="col-md-12 mb-5">
        <div class="row">
            <div class="col-md-7">
                <p class="text-center" style="font-size: 25px; font-weight: 500;">Location Map</p>
                <iframe class="rounded"
                    src="https://maps.google.com/maps?q=rajah sikatuna tagbilaran&t=k&z=16&ie=UTF8&iwloc=&output=embed"
                    height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-5 mb-5 mx-auto">
                <p class="text-justify mt-2" style="font-size: 20px; font-weight: 500;">
                    DILG R7 - Bohol Province</p>

                <div id="Container " class="mx-auto"
                    style="padding-bottom:56.25%; position:relative; display:block; width: 100%; max-width: 100%;">
                    <iframe id="UstreamIframe"
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdilgboholprovince&tabs=timeline&width=950&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="120%" style="position:absolute; top:0; left: 0" allowfullscreen
                        webkitallowfullscreen frameborder="0" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7 mt-3">
                        <iframe src="https://www.youtube.com/embed/NDseKmeNMt8" class="rounded"
                            style="height:500; width:100%;" frameborder="0">
                        </iframe>
                    </div>

                    <div class="col-md-5">
                        <div class="cont">
                            <div class="calendar">
                                <div class="calendar-header">
                                    <span class="month-picker" id="month-picker"> May </span>
                                    <div class="year-picker" id="year-picker">
                                        <span class="year-change" id="pre-year">
                                            <pre><</pre>
                                        </span>
                                        <span id="year">2020 </span>
                                        <span class="year-change" id="next-year">
                                            <pre>></pre>
                                        </span>
                                    </div>
                                </div>

                                <div class="calendar-body">
                                    <div class="calendar-week-days">
                                        <div>Sun</div>
                                        <div>Mon</div>
                                        <div>Tue</div>
                                        <div>Wed</div>
                                        <div>Thu</div>
                                        <div>Fri</div>
                                        <div>Sat</div>
                                    </div>
                                    <div class="calendar-days">
                                    </div>
                                </div>
                                <div class="calendar-footer">
                                </div>
                                <div class="date-time-formate">
                                    <div class="day-text-formate">TODAY</div>
                                    <div class="date-time-value">
                                        <div class="time-formate">02:51:20</div>
                                        <div class="date-formate">23 - july - 2022</div>
                                    </div>
                                </div>
                                <div class="month-list"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elevation-4" style="margin-top: 30px;" id="ww_afa40588f70fd" v='1.3' loc='id'
            a='{"t":"responsive","lang":"en","sl_lpl":1,"ids":["wl5320"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
            Weather for the Following Location: <a href="https://2ua.org/phl/tagbilaran/map/" id="ww_afa40588f70fd_u"
                target="_blank">Tagbilaran map, Philippines</a></div>
        <script async src="https://app1.weatherwidget.org/js/?id=ww_afa40588f70fd"></script>
        <script>
            const isLeapYear = (year) => {
                return (
                    (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) ||
                    (year % 100 === 0 && year % 400 === 0)
                );
            };
            const getFebDays = (year) => {
                return isLeapYear(year) ? 29 : 28;
            };
            let calendar = document.querySelector('.calendar');
            const month_names = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December',
            ];
            let month_picker = document.querySelector('#month-picker');
            const dayTextFormate = document.querySelector('.day-text-formate');
            const timeFormate = document.querySelector('.time-formate');
            const dateFormate = document.querySelector('.date-formate');

            month_picker.onclick = () => {
                month_list.classList.remove('hideonce');
                month_list.classList.remove('hide');
                month_list.classList.add('show');
                dayTextFormate.classList.remove('showtime');
                dayTextFormate.classList.add('hidetime');
                timeFormate.classList.remove('showtime');
                timeFormate.classList.add('hideTime');
                dateFormate.classList.remove('showtime');
                dateFormate.classList.add('hideTime');
            };

            const generateCalendar = (month, year) => {
                let calendar_days = document.querySelector('.calendar-days');
                calendar_days.innerHTML = '';
                let calendar_header_year = document.querySelector('#year');
                let days_of_month = [
                    31,
                    getFebDays(year),
                    31,
                    30,
                    31,
                    30,
                    31,
                    31,
                    30,
                    31,
                    30,
                    31,
                ];

                let currentDate = new Date();

                month_picker.innerHTML = month_names[month];

                calendar_header_year.innerHTML = year;

                let first_day = new Date(year, month);


                for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {

                    let day = document.createElement('div');

                    if (i >= first_day.getDay()) {
                        day.innerHTML = i - first_day.getDay() + 1;

                        if (i - first_day.getDay() + 1 === currentDate.getDate() &&
                            year === currentDate.getFullYear() &&
                            month === currentDate.getMonth()
                        ) {
                            day.classList.add('current-date');
                        }
                    }
                    calendar_days.appendChild(day);
                }
            };

            let month_list = calendar.querySelector('.month-list');
            month_names.forEach((e, index) => {
                let month = document.createElement('div');
                month.innerHTML = `<div>${e}</div>`;

                month_list.append(month);
                month.onclick = () => {
                    currentMonth.value = index;
                    generateCalendar(currentMonth.value, currentYear.value);
                    month_list.classList.replace('show', 'hide');
                    dayTextFormate.classList.remove('hideTime');
                    dayTextFormate.classList.add('showtime');
                    timeFormate.classList.remove('hideTime');
                    timeFormate.classList.add('showtime');
                    dateFormate.classList.remove('hideTime');
                    dateFormate.classList.add('showtime');
                };
            });

            (function() {
                month_list.classList.add('hideonce');
            })();
            document.querySelector('#pre-year').onclick = () => {
                --currentYear.value;
                generateCalendar(currentMonth.value, currentYear.value);
            };
            document.querySelector('#next-year').onclick = () => {
                ++currentYear.value;
                generateCalendar(currentMonth.value, currentYear.value);
            };

            let currentDate = new Date();
            let currentMonth = {
                value: currentDate.getMonth()
            };
            let currentYear = {
                value: currentDate.getFullYear()
            };
            generateCalendar(currentMonth.value, currentYear.value);

            const todayShowTime = document.querySelector('.time-formate');
            const todayShowDate = document.querySelector('.date-formate');

            const currshowDate = new Date();
            const showCurrentDateOption = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                weekday: 'long',
            };
            const currentDateFormate = new Intl.DateTimeFormat(
                'en-US',
                showCurrentDateOption
            ).format(currshowDate);
            todayShowDate.textContent = currentDateFormate;
            setInterval(() => {
                const timer = new Date();
                const option = {
                    hour: 'numeric',
                    minute: 'numeric',
                    second: 'numeric',
                };
                const formateTimer = new Intl.DateTimeFormat('en-us', option).format(timer);
                let time = `${`${timer.getHours()}`.padStart(
                  2,
                  '0'
                )}:${`${timer.getMinutes()}`.padStart(
                  2,
                  '0'
                )}: ${`${timer.getSeconds()}`.padStart(2, '0')}`;
                todayShowTime.textContent = formateTimer;
            }, 1000);
        </script>

    </div>
@endsection


<style scoped>
    .zoom {
        transition: transform .2s;
    }

    .zoom:hover {
        -ms-transform: scale(1.2);
        /* IE 9 */
        -webkit-transform: scale(1.2);
        /* Safari 3-8 */
        transform: scale(0.9);
        text-align: center;
        font-size: 10px;
    }

    .responsive {
        max-width: 100%;
        height: auto;
    }

    .card {
        --bg-color: #DCE9FF;
        --bg-color-light: #f1f7ff;
        --text-color-hover: whitesmoke;
        --box-shadow-color: silver;
    }


    .card:hover .overlay {
        transform: scale(8) translateZ(0);
    }

    .image-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        width: auto;
        height: auto;
        max-width: 100%;
        max-height: 100%;
        margin: 10px;
        padding: 5px;
        box-shadow: 2px 2px 5px #888;
    }

    :root {
        --dark-text: #f8fbff;
        --light-body: #f3f8fe;
        --light-main: #fdfdfd;
        --light-second: #c3c2c8;
        --light-hover: #f0f0f0;
        --light-text: #151426;
        --light-btn: #234495;
        --blue: #0000ff;
        --white: #fff;
        --shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        --font-family: consolas;
    }

    .cont {
        width: max-content;
        height: max-content;
        position: relative;
        display: flex;
        padding: 2% 0px 0px 0px;
        justify-content: center;
        right: 0%;
        width: 100%;
        height: 100%;
    }

    .calendar {
        height: 500px;
        width: 100%;
        background-color: white;
        border-radius: 25px;
        overflow: hidden;
        padding: 30px 50px 0px 50px;
    }

    .calendar {
        box-shadow: var(--shadow);
    }

    .calendar-header {
        background: #234495;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 700;
        color: var(--white);
        padding: 10px;
    }

    .calendar-body {
        pad: 10px;
    }

    .calendar-week-days {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        font-weight: 600;
        cursor: pointer;
        color: #234495;
    }

    .calendar-week-days div:hover {
        color: black;
        transform: scale(1.2);
        transition: all .2s ease-in-out;
    }

    .calendar-week-days div {
        display: grid;
        place-items: center;
        color: var(--bg-second);
        height: 50px;
    }

    .calendar-days {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 2px;
        color: var(--color-txt);
    }

    .calendar-days div {
        width: auto;
        height: 33px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px;
        position: relative;
        cursor: pointer;
        animation: to-top 1s forwards;
    }

    .month-picker {
        padding: 5px 10px;
        border-radius: 10px;
        cursor: pointer;
    }

    .month-picker:hover {
        background-color: var(--color-hover);
    }

    .month-picker:hover {
        color: var(--color-txt);
    }

    .year-picker {
        display: flex;
        align-items: center;
    }

    .year-change {
        height: 30px;
        width: 30px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        margin: 0px 10px;
        cursor: pointer;
    }

    .year-change:hover {
        background-color: var(--light-btn);
        transition: all .2s ease-in-out;
        transform: scale(1.12);
    }

    .year-change:hover pre {
        color: var(--bg-body);
    }

    .calendar-footer {
        padding: 10px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    #year:hover {
        cursor: pointer;
        transform: scale(1.2);
        transition: all 0.2 ease-in-out;
    }

    .calendar-days div span {
        position: absolute;
    }

    .calendar-days div:hover {
        transition: width 0.2s ease-in-out, height 0.2s ease-in-out;
        background-color: #fbc7d4;
        border-radius: 20%;
        color: var(--dark-text);
    }

    .calendar-days div.current-date {
        color: var(--dark-text);
        background-color: var(--light-btn);
        border-radius: 20%;
    }

    .month-list {
        position: relative;
        left: 0;
        top: -50px;
        background-color: #ebebeb;
        color: var(--light-text);
        display: grid;
        grid-template-columns: repeat(3, auto);
        gap: 5px;
        border-radius: 20px;
    }

    .month-list>div {
        display: grid;
        place-content: center;
        margin: 5px 10px;
        transition: all 0.2s ease-in-out;
    }

    .month-list>div>div {
        border-radius: 15px;
        padding: 10px;
        cursor: pointer;
    }

    .month-list>div>div:hover {
        background-color: var(--light-btn);
        color: var(--dark-text);
        transform: scale(0.9);
        transition: all 0.2s ease-in-out;
    }

    .month-list.show {
        visibility: visible;
        pointer-events: visible;
        transition: 0.6s ease-in-out;
        animation: to-left .71s forwards;
    }

    .month-list.hideonce {
        visibility: hidden;
    }

    .month-list.hide {
        animation: to-right 1s forwards;
        visibility: none;
        pointer-events: none;
    }

    .date-time-formate {
        width: max-content;
        height: max-content;
        font-family: Dubai Light, Century Gothic;
        position: relative;
        display: inline;
        top: 50px;
        justify-content: center;
        color:#234495;
    }

    .day-text-formate {
        font-family: Microsoft JhengHei UI;
        font-size: 1.1rem;
        padding: 4%;
        border-right: 3px solid #234495;
        position: absolute;
        left: -1rem;
    }

    .date-time-value {
        display: block;
        height: max-content;
        width: max-content;
        position: relative;
        left: 40%;
        top: -18px;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .time-formate {
        font-size: 1.5rem;
    }

    .time-formate.hideTime {
        animation: hidetime 1.5s forwards;
    }

    .day-text-formate.hidetime {
        animation: hidetime 1.5s forwards;
    }

    .date-formate.hideTime {
        animation: hidetime 1.5s forwards;
    }

    .day-text-formate.showtime {
        animation: showtime 1s forwards;
    }

    .time-formate.showtime {
        animation: showtime 1s forwards;
    }

    .date-formate.showtime {
        animation: showtime 1s forwards;
    }

    @keyframes to-top {
        0% {
            transform: translateY(0);
            opacity: 0;
        }

        100% {
            transform: translateY(100%);
            opacity: 1;
        }
    }

    @keyframes to-left {
        0% {
            transform: translatex(230%);
            opacity: 1;
        }

        100% {
            transform: translatex(0);
            opacity: 1;
        }
    }

    @keyframes to-right {
        10% {
            transform: translatex(0);
            opacity: 1;
        }

        100% {
            transform: translatex(-150%);
            opacity: 1;
        }
    }

    @keyframes showtime {
        0% {
            transform: translatex(250%);
            opacity: 1;
        }

        100% {
            transform: translatex(0%);
            opacity: 1;
        }
    }

    @keyframes hidetime {
        0% {
            transform: translatex(0%);
            opacity: 1;
        }

        100% {
            transform: translatex(-370%);
            opacity: 1;
        }
    }

    @media (max-width:375px) {
        .month-list>div {

            margin: 5px 0px;
        }

    }
</style>
