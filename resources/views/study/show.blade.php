
<html>
    <head>
        <title>StudyStrage</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('js/highlight.pack.js') }}" rel="stylesheet">
        <script src="{{ asset('js/delete.js') }}" defer></script>
        <link href="{{ asset('css/tomorrow.css') }}" rel="stylesheet">
        <link href="{{ asset('css/study/show.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/vs.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
    <body>
        <div style="padding:30px;" class="container">
            <header>
                <div class="title" style="font-size: 30px;">
                    <a class="title-font" href="/">STUDY STRAGE</a>
                </div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/study/{{$study->id}}/edit">Edit</a>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Delete</button>
                            </div>
                        </li>
                    </ul>
            </header>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attention!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    この操作は取り消せません。
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="btn-delete"> Confirm</button>
                </div>
                </div>
            </div>
            </div>
            <div class="main" id="main" data-index={{$study->id}}>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <span class="nav-link" style="color:red;">Language:{{$language->name}}</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">Time:{{$time_hour}}時間{{$time_minute}}分</span>
                    </li>
                </ul>
                <div style="background-color:#EEEEEE;" class="content">
                    {!! nl2br(e($study->memo)) !!}
                </div>


            </div>
        </div>
    </body>
</html>

