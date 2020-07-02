
<html>
    <head>
        <title>StudyStrage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/study/index.css') }}" rel="stylesheet">
        <script src="{{ asset('js/get_study.js') }}" defer></script>
        <script src="{{ asset('js/search.js') }}" defer></script>
    </head>
    <body>
        <div style="padding:30px;" class="container">
            <header>
                <div class="title" style="font-size: 30px;">
                    <a class="title-font" href="/">STUDY STRAGE</a>
                </div>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="/create">Addition</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Graph</a>
                            <a class="dropdown-item" href="http://localhost:8000/logout" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-menu">
                                Logout</a>
                            <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;"><input type="hidden" name="_token" value="u7eCYSh2WT3bQiJZ1ai0zbahSqYKbHRR2MB10BVM"></form>
                            </div>
                        </li>
                    </ul>
                </header>
            <div class="main">
                <div class="search">
                    <div class="search-box">
                        <input type="text" class="form-control search-input" id="exampleFormControlInput1" name='keyword' autocomplete="off">
                    </div>
                    <div class="searched-box">
                        <a class="search-study" href="/">aaa</a>
                    </div>
                </div>
                <div class="keyword-content">
                    <h4>latest 10</h4>
                    @foreach($studies as $s)
                    <a style="display:block; margin:10px;" href="/study/{{$s->id}}">{{$s->keyword}}<span style="margin-left:50px; font-size:15px;">{{date('Y年m月d日 H時i分',strtotime($s->created_at))}}</span></a>
                    @endforeach
                </div>
                <div class="graph-content">
                <canvas id="chart"></canvas>
                <div id="app">

                </div>
                </div>
                </div>
        </div>
    </body>
    </html>
