@extends('layouts.main')

@section('content')
    <!-- About Start -->
    <div id="about" class="container-fluid py-3">
        <div class="container py-5">
            <div class="row" style="align-items: center">

                <div class="col-lg-5 mb-5 mb-lg-0 about-image">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="/img/about-image.webp" alt="about-image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
{{--                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">@lang('home_page.about.small_title')</h6>--}}
                        <h1 class="display-4">@lang('home_page.about.big_title')</h1>
                    </div>

                    <p>@lang('home_page.about.description')</p>
                </div>
            </div>

            <div class="row" style="margin-left: 0; margin-top: 35px; margin-bottom: 20px;">
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-primary mr-4">
                        <i class="fa fa-2x fa-graduation-cap text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>@lang('home_page.advantages.block1_title')</h4>
                        {{--                        <p>@lang('home_page.advantages.block1_description')</p>--}}
                        <p>У нас працюють викладачі з практичним досвідом у сфері IT</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-secondary mr-4">
                        <i class="fa fa-2x fa-certificate text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>@lang('home_page.advantages.block2_title')</h4>
                        <p>@lang('home_page.advantages.block2_description')</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="btn-icon bg-warning mr-4">
                        <i class="fa fa-2x fa-book-reader text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>@lang('home_page.advantages.block3_title')</h4>
                        {{--                        <p>@lang('home_page.advantages.block3_description')</p>--}}
                        <p>Скористайтеся перевагами сучасної освіти, яка дозволяє вам навчатись дистанційно, не виходячи із дому</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- About End -->

    <!-- Prices Start -->
    <div id="prices" class="container-fluid bg-image">
        <div class="container">
            <div class="row top">
                <div class="col-lg-7">
                    <div class="section-title mt-5 mb-5">
                        <h1 class="display-4">Вартість навчання</h1>
                    </div>
                </div>
            </div>
            <div class="row bottom">
                <div class="cost-of-lessons">
                    <div class="cost-of-lessons_header price-violet">
                        <p class="cost-of-lessons_price-title">Мінімальний</p>
                    </div>
                    <div class="cost-of-lessons_content">
                        <div class="cost-of-lessons_price-label">
                            <p class="cost-of-lessons_count-lessons">5 занять</p>
                        </div>
                        <div class="cost-of-lessons_line"></div>
                        <p class="cost-of-lessons_price-text">
                            Ти познайомишся з темою та процесом навчання
                        </p>
                        <div class="cost-of-lessons_price-count-container">
                            <div class="local">
                                <p class="cost-of-lessons_label-price-count">Груповий</p>
                                <p class="cost-of-lessons_price-count">350 грн</p>
                            </div>
                            <div class="native">
                                <p class="cost-of-lessons_label-price-count">Індивідуальний</p>
                                <p class="cost-of-lessons_price-count">450 грн</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cost-of-lessons">
                    <div class="cost-of-lessons_header price-green">
                        <p class="cost-of-lessons_price-title">Економний</p>
                    </div>
                    <div class="cost-of-lessons_content">
                        <div class="cost-of-lessons_price-label">
                            <p class="cost-of-lessons_count-lessons">10 занять</p>
                        </div>
                        <div class="cost-of-lessons_line"></div>
                        <p class="cost-of-lessons_price-text">
                            Зможеш краще познайомитися з темою
                        </p>
                        <div class="cost-of-lessons_price-count-container">
                            <div class="local">
                                <p class="cost-of-lessons_label-price-count">Груповий</p>
                                <p class="cost-of-lessons_price-count">300 грн</p>
                            </div>
                            <div class="native">
                                <p class="cost-of-lessons_label-price-count">Індивідуальний</p>
                                <p class="cost-of-lessons_price-count">425 грн</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cost-of-lessons">
                    <div class="cost-of-lessons_header price-yellow">
                        <p class="cost-of-lessons_price-title">Популярний</p>
                    </div>
                    <div class="cost-of-lessons_content">
                        <div class="cost-of-lessons_price-label">
                            <p class="cost-of-lessons_count-lessons">20 занять</p>
                        </div>
                        <div class="cost-of-lessons_line"></div>
                        <p class="cost-of-lessons_price-text">
                            Отримаеш впевненість та помітні результати
                        </p>
                        <div class="cost-of-lessons_price-count-container">
                            <div class="local">
                                <p class="cost-of-lessons_label-price-count">Груповий</p>
                                <p class="cost-of-lessons_price-count">280 грн</p>
                            </div>
                            <div class="native">
                                <p class="cost-of-lessons_label-price-count">Індивідуальний</p>
                                <p class="cost-of-lessons_price-count">400 грн</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cost-of-lessons">
                    <div class="cost-of-lessons_header price-red">
                        <p class="cost-of-lessons_price-title">Вигідний</p>
                    </div>
                    <div class="cost-of-lessons_content">
                        <div class="cost-of-lessons_price-label">
                            <p class="cost-of-lessons_count-lessons">50 занять</p>
                        </div>
                        <div class="cost-of-lessons_line"></div>
                        <p class="cost-of-lessons_price-text">
                            Зможеш використовувати знання для заробітку
                        </p>
                        <div class="cost-of-lessons_price-count-container">
                            <div class="local">
                                <p class="cost-of-lessons_label-price-count">Груповий</p>
                                <p class="cost-of-lessons_price-count">250 грн</p>
                            </div>
                            <div class="native">
                                <p class="cost-of-lessons_label-price-count">Індивідуальний</p>
                                <p class="cost-of-lessons_price-count">375 грн</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Prices Start -->


    <!-- Courses Start -->
    <div id="courses" class="container-fluid px-0">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">@lang('home_page.courses.small_title')</h6>
                    <h1 class="display-4">@lang('home_page.courses.big_title')</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            @foreach($courses as $course)
                @include('pages.course_card_main', ['course' => $course])
            @endforeach
        </div>
        <div id="sign-up" class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">@lang('home_page.signup_form.title')</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="sign-up-name" type="text" class="form-control bg-light border-0" placeholder="@lang('home_page.signup_form.name')" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="sign-up-phone" type="text" class="form-control bg-light border-0" placeholder="@lang('home_page.signup_form.phone')" style="padding: 30px 20px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select id="sign-up-course" class="custom-select bg-light border-0 px-3" style="height: 60px;">
                                        <option selected>@lang('home_page.signup_form.selector')</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->title}}">{{$course->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button id="sign-up-btn" class="btn btn-primary btn-block" style="height: 60px;">@lang('home_page.signup_form.button')</button>
                            </div>
                        </div>
                        <div class="error form-row" style="justify-content: center;">
                            <div class="form-group" style="display: block;"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Contact Start -->
    <div id="contact" class="container-fluid">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>@lang('home_page.send_message_form.location_title')</h4>
                                <p class="m-0">@lang('contacts.location')</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>@lang('home_page.send_message_form.phone_title')</h4>
                                <p class="m-0">@lang('contacts.phone')</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>@lang('home_page.send_message_form.email_title')</h4>
                                <p class="m-0">@lang('contacts.email')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">@lang('home_page.send_message_form.small_title')</h6>
                        <h1 class="display-4">@lang('home_page.send_message_form.big_title')</h1>
                    </div>
                    <div id="send-message" class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input id="snd-msg-name" type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="@lang('home_page.send_message_form.name')" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input id="snd-msg-phone" type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="@lang('home_page.send_message_form.phone')" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="snd-msg-message" class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="@lang('home_page.send_message_form.message')" required="required"></textarea>
                            </div>
                            <div class="error form-row" >
                                <div class="form-group">
                                    @lang('home_page.send_message_form.error')
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <div id="send-msg-btn" class="btn btn-primary py-3 px-5" type="submit">@lang('home_page.send_message_form.button')</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <div id="overlay">
        <div id="confirm-msg" class="row justify-content-center">
            <div class="bg-white">
                <p>@lang('home_page.successfull_sending')</p>
            </div>
        </div>
    </div>

@endsection
