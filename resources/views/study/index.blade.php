
<html>
    <head>
        <title>StudyStrage</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/study/index.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="nav">
                    <h2>STUDY STRAGE</h1>
                    <a>LogOut</a>
                    <!-- <button class="pulldown-menu">menu</button> -->
                </div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Addition</a>
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
                <div class="left-content">
                    <button class="ReadMore">Read More</button>
                    <h4>latest 10</h4>
                    @foreach($studies as $s)
                    <li>{{$s->name}}</li>
                    @endforeach
                </div>
                <div class="right-content">
                    right
                </div>
            </div>
        </div>
    </body>
</html>
