@extends('layouts.main')

@section('content')
    <!-- Courses Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">@lang('courses.courses_page.small_title')</h6>
                        <h1 class="display-4">@lang('courses.courses_page.title')</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                    @include('pages.course_card_extended', ['course' => $course])
                @endforeach
                <!--div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a class="page-link rounded-0" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link rounded-0" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div-->
            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection
