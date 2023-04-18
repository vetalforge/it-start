@extends('layouts.main')

@section('content')
    <style>
        @media (min-width: 576px) {
            .jumbotron {
                padding: 2rem 2rem;
            }
        }
    </style>
    <!-- Detail Start -->
    <div class="container-fluid py-1">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mt-3 mb-5">
                            <h1 class="display-4">{{ $selected_course->title }}</h1>
                        </div>
                        {!! $selected_course->description !!}
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">@lang('courses.course_details_page.course_features')</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">@lang('courses.course_details_page.age')</h6>
                            <h6 class="text-white my-3">{{ $selected_course->age }}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">@lang('courses.course_details_page.duration')</h6>
                            <h6 class="text-white my-3">{{ $selected_course->duration }}</h6>
                        </div>
                        <div class="d-flex justify-content-between px-4">
                            <h6 class="text-white my-3">@lang('courses.course_details_page.language')</h6>
                            <h6 class="text-white my-3">@lang('courses.course_details_page.languages')</h6>
                        </div>
                        <div class="py-3 px-4">
                            <a class="rounded btn btn-block btn-secondary py-3 px-5" href="/{{ $defaultLangPrefix }}#sign-up">
                                @lang('courses.course_details_page.enroll_now')
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            @if($has_student_works)
                <div class="row" style="justify-content: space-around">
                    <h2>@lang('courses.student_works_title')</h2>
                </div>
                <div class="student-works row mb-5" style="justify-content: center">
                    @foreach($student_works as $student_work_url)
                        <img src="{{ $student_work_url }}" alt="">
                    @endforeach
                 </div>
                <style>
                    .student-works img {
                        width: 100%;
                        max-width: 500px;
                        padding: 10px;
                    }
                </style>
            @endif

            <div class="row">
                <h2 class="mb-3">@lang('courses.course_details_page.related_courses')</h2>
                <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                    @foreach($courses as $course)
                        @include('pages.course_card', ['course' => $course])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
@endsection
