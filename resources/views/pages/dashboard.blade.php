<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('main.title')</title>
    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

        @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

        body {
            margin: 0;
        }

        .fa-2x {
            font-size: 2em;
        }
        .fa {
            position: relative;
            display: table-cell;
            width: 60px;
            height: 36px;
            text-align: center;
            vertical-align: middle;
            font-size:20px;
        }


        .main-menu:hover,nav.main-menu.expanded {
            width:250px;
            overflow:visible;
        }

        .main-menu {
            background:#212121;
            border-right:1px solid #e5e5e5;
            position:absolute;
            top:0;
            bottom:0;
            height:100%;
            left:0;
            width:60px;
            overflow:hidden;
            -webkit-transition:width .05s linear;
            transition:width .05s linear;
            -webkit-transform:translateZ(0) scale(1,1);
            z-index:1000;
        }

        .main-menu>ul {
            margin:7px 0;
        }

        .main-menu li {
            position:relative;
            display:block;
            width:250px;
        }

        .main-menu li>a {
            position:relative;
            display:table;
            border-collapse:collapse;
            border-spacing:0;
            color:#999;
            font-family: arial;
            font-size: 14px;
            text-decoration:none;
            -webkit-transform:translateZ(0) scale(1,1);
            -webkit-transition:all .1s linear;
            transition:all .1s linear;

        }

        .main-menu .nav-icon {
            position:relative;
            display:table-cell;
            width:60px;
            height:36px;
            text-align:center;
            vertical-align:middle;
            font-size:18px;
        }

        .main-menu .nav-text {
            position:relative;
            display:table-cell;
            vertical-align:middle;
            width:190px;
            font-family: 'Titillium Web', sans-serif;
        }

        .main-menu>ul.logout {
            position:absolute;
            left:0;
            bottom:0;
        }

        .no-touch .scrollable.hover {
            overflow-y:hidden;
        }

        .no-touch .scrollable.hover:hover {
            overflow-y:auto;
            overflow:visible;
        }

        a:hover,a:focus {
            text-decoration:none;
        }

        nav {
            -webkit-user-select:none;
            -moz-user-select:none;
            -ms-user-select:none;
            -o-user-select:none;
            user-select:none;
        }

        nav ul,nav li {
            outline:0;
            margin:0;
            padding:0;
        }
        .main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
            color:#fff;
            background-color:#000000;
        }

        .container {
            width: 100%;
            height: 100vh;
        }
        .left-stub {
            float: left;
            width: 60px;
            box-sizing: border-box;
        }
        .area {
            float: right;
            padding: 10px 27px;
            box-sizing: border-box;
            background: #e2e2e2;
            width: calc(100% - 60px);
            height: 100%;
        }

        .course-title {
            width: 300px;
            margin-bottom: 10px;
        }

        .course-description {
            width: 99%;
            min-height: 225px;
            margin-bottom: 10px;
        }

        .alert {
            font-size: 20px;
            color: red;
        }

        @font-face {
            font-family: 'Titillium Web';
            font-style: normal;
            font-weight: 300;
            src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
        }

        .logout {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="left-stub"></div>
    <div class="area">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if(request('edit'))
            <h2>Виберіть курс для редагування</h2>
            <form method="GET" action="{{ route('admin_entrance') }}">
                <input type="hidden" name="edit" value="course">
                <select name="course" id="course-select" onchange="this.form.submit()">
                    @foreach($course_names as $course_name)
                        <option value="{{ $course_name }}"
                            {{ request('course') === $course_name ? 'selected' : '' }}>
                            {{ $course_name }}
                        </option>
                    @endforeach
                </select>
            </form>
            @if($selected_course)
                <div class="course-editor">
                    <h2>Редагування курсу: {{ $selected_course->name }}</h2>
                    <form method="POST" action="{{ route('admin.update_course', ['course' => $selected_course->name]) }}">
                        @csrf
                        @method('POST')
                        <div>
                            <label for="title">Заголовок(укр)</label><br>
                            <input type="text" id="title_ua" class="course-title" name="title_ua" value="{{ $title_ua }}">
                        </div>
                        <div>
                            <label for="description">Опис курсу</label><br>
                            <textarea id="description_ua" class="course-description" name="description_ua" rows="4">{{ $description_ua}}</textarea>
                        </div>
                        <div>
                            <label for="title">Заголовок(рос):</label><br>
                            <input type="text" id="title_ru" class="course-title" name="title_ru" value="{{ $title_ru }}">
                        </div>
                        <div>
                            <label for="description">Опис курсу:</label><br>
                            <textarea id="description_ru" class="course-description" name="description_ru" rows="4">{{ $description_ru }}</textarea>
                        </div>
                        <div style="margin-top: 10px;">
                            <button type="submit">Зберегти зміни</button>
                        </div>
                    </form>
                </div>
            @endif
            @else
                <p><a href="/" class="back-home">На головну сайту</a></p>
                <p><a href="{{ route('admin_entrance', ['edit' => 'course']) }}">Редагувати курси</a></p>
        @endif
    </div>
</div>

<nav class="main-menu">
    <ul>
        <li>
            <a href="{{ route('admin_entrance') }}">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">Dashboard</span>
            </a>

        </li>
        <li>
            <a href="{{ route('admin_entrance', ['edit' => 'course']) }}">
                <i class="fa fa-edit fa-2x"></i>
                <span class="nav-text">
                    Редагування курсів
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-cogs fa-2x"></i>
                <span class="nav-text">Tools & Resources</span>
            </a>
        </li>
    </ul>

    <ul class="logout">
        <li>
            <a id="logout-btn">
                <i class="fa fa-power-off fa-2x"></i>
                <span class="nav-text">Logout</span>
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
<script>
    const logout_btn = document.getElementById('logout-btn');

    logout_btn.addEventListener('click', function (event) {
        event.preventDefault();
        const form = document.getElementById('logout-form');
        form.submit();
    })
</script>
</body>
</html>
