
<html>
    <head>
        <title>StudyStrage</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('js/highlight.pack.js') }}" rel="stylesheet">
        <link href="{{ asset('css/tomorrow.css') }}" rel="stylesheet">
        <link href="{{ asset('css/study/show.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/vs.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
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
                        <span class="nav-link">Time:{{$time_hour}}時間{{$time_minute}}分</span>
                    </li>
                </ul>
                <div class="content">
                    {!! nl2br(e($study->memo)) !!}
                </div>


            </div>
        </div>
    </body>
</html>

