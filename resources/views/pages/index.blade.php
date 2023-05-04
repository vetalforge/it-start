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
                        <h1 class="display-4 text-center">@lang('home_page.about.big_title')</h1>
                    </div>

                    <p class="text-justify">@lang('home_page.about.description')</p>
                </div>
            </div>

            <div class="row" style="margin-left: 0; margin-top: 35px; margin-bottom: 20px;">

                <div class="d-flex mb-3">
                    <div class="btn-icon bg-secondary mr-4">
                        <i class="fa fa-2x fa-tags text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>@lang('home_page.about.block4_title')</h4>
                        <p>@lang('home_page.about.block4_description')</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-primary mr-4">
                        <i class="fa fa-2x fa-graduation-cap text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>@lang('home_page.about.block1_title')</h4>
                        <p>@lang('home_page.about.block1_description')</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-success mr-4">
                        <i class="fa fa-2x fa-certificate text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>@lang('home_page.about.block2_title')</h4>
                        <p>@lang('home_page.about.block2_description')</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="btn-icon bg-warning mr-4">
                        <i class="fa fa-2x fa-book-reader text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>@lang('home_page.about.block3_title')</h4>
                        <p>@lang('home_page.about.block3_description')</p>
                    </div>
                </div>

{{--                <div class="d-flex mb-3">--}}
{{--                    <div class="btn-icon bg-primary mr-4">--}}
{{--                        <i class="fa fa-2x fa-graduation-cap text-white"></i>--}}
{{--                    </div>--}}
{{--                    <div class="mt-n1">--}}
{{--                        <h4>@lang('home_page.about.block1_title')</h4>--}}
{{--                        <p>@lang('home_page.about.block1_description')</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="d-flex mb-3">--}}
{{--                    <div class="btn-icon bg-secondary mr-4">--}}
{{--                        <i class="fa fa-2x fa-certificate text-white"></i>--}}
{{--                    </div>--}}
{{--                    <div class="mt-n1">--}}
{{--                        <h4>@lang('home_page.about.block2_title')</h4>--}}
{{--                        <p>@lang('home_page.about.block2_description')</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="d-flex">--}}
{{--                    <div class="btn-icon bg-warning mr-4">--}}
{{--                        <i class="fa fa-2x fa-book-reader text-white"></i>--}}
{{--                    </div>--}}
{{--                    <div class="mt-n1">--}}
{{--                        <h4>@lang('home_page.about.block3_title')</h4>--}}
{{--                        <p>@lang('home_page.about.block3_description')</p>--}}
{{--                    </div>--}}
{{--                </div>--}}


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
                        <h1 class="display-4">@lang('home_page.prices.title')</h1>
                    </div>
                </div>
            </div>
            <div class="row bottom">
                <div class="cost-of-lessons">
                    <div class="cost-of-lessons_header price-violet">
                        <p class="cost-of-lessons_price-title">@lang('home_page.prices.price1.title')</p>
                    </div>
                    <div class="cost-of-lessons_content">
                        <div class="cost-of-lessons_price-label">
                            <p class="cost-of-lessons_count-lessons">@lang('home_page.prices.price1.qty')</p>
                        </div>
                        <div class="cost-of-lessons_line"></div>
                        <p class="cost-of-lessons_price-text">@lang('home_page.prices.price1.text')</p>
                        <div class="cost-of-lessons_price-count-container">
                            <div class="group">
                                <p class="cost-of-lessons_label-price-count">@lang('home_page.prices.group_label')</p>
                                <p class="cost-of-lessons_price-count">@lang('home_page.prices.price1.group_price')</p>
                            </div>
                            <div class="individual">
                                <p class="cost-of-lessons_label-price-count">@lang('home_page.prices.ind_label')</p>
                                <p class="cost-of-lessons_price-count">@lang('home_page.prices.price1.ind_price')</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cost-of-lessons">
                    <div class="cost-of-lessons_header price-green">
                        <p class="cost-of-lessons_price-title">@lang('home_page.prices.price2.title')</p>
                    </div>
                    <div class="cost-of-lessons_content">
                        <div class="cost-of-lessons_price-label">
                            <p class="cost-of-lessons_count-lessons">@lang('home_page.prices.price2.qty')</p>
                        </div>
                        <div class="cost-of-lessons_line"></div>
                        <p class="cost-of-lessons_price-text">@lang('home_page.prices.price2.text')</p>
                        <div class="cost-of-lessons_price-count-container">
                            <div class="group">
                                <p class="cost-of-lessons_label-price-count">@lang('home_page.prices.group_label')</p>
                                <p class="cost-of-lessons_price-count">@lang('home_page.prices.price2.group_price')</p>
                            </div>
                            <div class="individual">
                                <p class="cost-of-lessons_label-price-count">@lang('home_page.prices.ind_label')</p>
                                <p class="cost-of-lessons_price-count">@lang('home_page.prices.price2.ind_price')</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cost-of-lessons">
                    <div class="cost-of-lessons_header price-yellow">
                        <p class="cost-of-lessons_price-title">@lang('home_page.prices.price3.title')</p>
                    </div>
                    <div class="cost-of-lessons_content">
                        <div class="cost-of-lessons_price-label">
                            <p class="cost-of-lessons_count-lessons">@lang('home_page.prices.price3.qty')</p>
                        </div>
                        <div class="cost-of-lessons_line"></div>
                        <p class="cost-of-lessons_price-text">@lang('home_page.prices.price3.text')</p>
                        <div class="cost-of-lessons_price-count-container">
                            <div class="group">
                                <p class="cost-of-lessons_label-price-count">@lang('home_page.prices.group_label')</p>
                                <p class="cost-of-lessons_price-count">@lang('home_page.prices.price3.group_price')</p>
                            </div>
                            <div class="individual">
                                <p class="cost-of-lessons_label-price-count">@lang('home_page.prices.ind_label')</p>
                                <p class="cost-of-lessons_price-count">@lang('home_page.prices.price3.ind_price')</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cost-of-lessons">
                    <div class="cost-of-lessons_header price-red">
                        <p class="cost-of-lessons_price-title">@lang('home_page.prices.price4.title')</p>
                    </div>
                    <div class="cost-of-lessons_content">
                        <div class="cost-of-lessons_price-label">
                            <p class="cost-of-lessons_count-lessons">@lang('home_page.prices.price4.qty')</p>
                        </div>
                        <div class="cost-of-lessons_line"></div>
                        <p class="cost-of-lessons_price-text">@lang('home_page.prices.price4.text')</p>
                        <div class="cost-of-lessons_price-count-container">
                            <div class="group">
                                <p class="cost-of-lessons_label-price-count">@lang('home_page.prices.group_label')</p>
                                <p class="cost-of-lessons_price-count">@lang('home_page.prices.price4.group_price')</p>
                            </div>
                            <div class="individual">
                                <p class="cost-of-lessons_label-price-count">@lang('home_page.prices.ind_label')</p>
                                <p class="cost-of-lessons_price-count">@lang('home_page.prices.price4.ind_price')</p>
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
                                    <input id="sign-up-name" type="text" class="form-control rounded bg-light border-0" placeholder="@lang('home_page.signup_form.name')" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="sign-up-phone" type="text" class="form-control rounded bg-light border-0" placeholder="@lang('home_page.signup_form.phone')" style="padding: 30px 20px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select id="sign-up-course" class="rounded custom-select bg-light border-0 px-3" style="height: 60px;">
                                        <option selected>@lang('home_page.signup_form.selector')</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->title}}">{{$course->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button id="sign-up-btn" class="rounded btn btn-primary btn-block" style="height: 60px;">@lang('home_page.signup_form.button')</button>
                            </div>
                        </div>
                        <div class="error form-row" style="justify-content: center;">
                            <div class="form-group" style="display: block;"></div>
                        </div>
                    </form>
                    <div class="form-privacy-agreement text-center mb-3">
                        {!! __('home_page.send_message_form.form_privacy_agreement', ['link' => '/' . $generalLangPrefix . 'articles/privacy']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Faq Start -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="/css/faq.css">
    <div id="faq" class="py-60">
        <div class="container text-control-1">
            <h2>FAQ</h2>
            <div class="faqs-section">
                <div class="faq accordion">
                    <div class="question-wrapper">
                        <div class="d-flex align-items-center">
                            <p class="question" title="">
                                How many travellers make a Group?</p>
                        </div><i class="material-icons drop">expand_more</i>
                    </div>
                    <div class="answer-wrapper">
                        <p class="answer">Groups can start at as low as 8 people depending on the travel provider. Plus, there is no size limit or maximum number of passengers. The more, the merrier!</p>
                    </div>
                </div>
                <div class="faq accordion">
                    <div class="question-wrapper">
                        <div class="d-flex align-items-center">
                            <p class="question" title="">
                                How much is a group discount?</p>
                        </div><i class="material-icons drop">expand_more</i>
                    </div>
                    <div class="answer-wrapper">
                        <p class="answer">Discounts vary depending on a number of factors, like the size of your group, duration of stay, special activities and more. Discuss your group travel requirements with your agent and they’ll be sure to find you all the discounts your group is eligible for.</p>
                    </div>
                </div>
                <div class="faq accordion">
                    <div class="question-wrapper">
                        <div class="d-flex align-items-center">
                            <p class="question" title="">What kinds of groups can travel together?</p>
                        </div><i class="material-icons drop">expand_more</i>
                    </div>
                    <div class="answer-wrapper">
                        <p class="answer">You name it! We has booked all kinds of group travel. We’re happy to arrange friends and family trips, destination weddings, group golf getaways, anniversaries and vow renewals, as well as get-togethers for clubs and other special interest groups.</p>
                    </div>
                </div>
                <div class="faq accordion">
                    <div class="question-wrapper">
                        <div class="d-flex align-items-center">
                            <p class="question" title="">
                                Are there group travel benefits beyond discounted airfare and accommodation?</p>
                        </div><i class="material-icons drop">expand_more</i>
                    </div>
                    <div class="answer-wrapper">
                        <p class="answer">Yes! For starters, groups can take advantage of flexible payment options, often with lower deposits required to secure each booking. In addition to discounts up-front, your group may be eligible for complimentary passengers, and qualify for more flexible terms. Be sure to ask your agent for details! Ask your Travel Professional for details!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq End -->

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
                            <div class="form-privacy-agreement text-center mb-3">
                                {!! __('home_page.send_message_form.form_privacy_agreement', ['link' => '/' . $generalLangPrefix . 'articles/privacy']) !!}
                            </div>
                            <div class="error form-row" >
                                <div class="form-group">
                                    @lang('home_page.send_message_form.error')
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <div id="send-msg-btn" class="rounded btn btn-primary py-3 px-5" type="submit">@lang('home_page.send_message_form.button')</div>
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
