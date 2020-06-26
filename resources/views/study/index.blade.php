
<html>
    <head>
        <title>StudyStrage</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/study/index.css') }}" rel="stylesheet">
        <script src="{{ asset('js/get_study.js') }}" defer></script>
        <!-- <script src="Chart.js/dist/Chart.js"></script> -->
        <!-- <canvas id="myChart" width="400" height="400"></canvas> -->
    </head>
    <body>
        <div class="container">
            <header>
                <div class="nav">
                    <h2>STUDY STRAGE</h1>
                </div>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="/create">Addition</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Graph</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </header>
            <div class="main">
                <div class="keyword-content">
                    <button class="Learn More">Learn More</button>
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
