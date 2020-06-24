
<html>
    <head>
        <title>StudyStrage</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/study/show.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="nav">
                    <h2>STUDY STRAGE</h1>
                </div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Graph</a>
                                <a class="dropdown-item" href="/study/{{$study->id}}/edit">Edit</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
            </header>
            <div class="main">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <span class="nav-link">Language:{{$study->language}}</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">Time:{{$hour}}時間{{$minute}}分</span>
                    </li>
                </ul>
                <div class="content">
                    {!! $mark_memo !!}
                </div>


            </div>
        </div>
    </body>
</html>

