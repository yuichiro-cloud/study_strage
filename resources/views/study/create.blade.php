
<html>
    <head>
        <title>StudyStrage</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/time_variable.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/study/create.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="nav">
                    <h2>STUDY STRAGE</h1>
                </div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">home</a>
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
                <form name="form1" action="/store" method='post'>
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">KeyWord</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="laravel training" name='keyword'>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Language select</label>
                        <select class="form-control" id="exampleFormControlSelect1" name='language'>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <h5>Study Start</h5>
                    <div class="form-row">
                        <div style="text-align:right;" class="form-group col" id="study_start_h">
                            <label for="exampleFormControlSelect1">Hour</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach ($array_h as $s_h)
                                    <option>{{$s_h}}</option>
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">時</label>
                        </div>
                        <div style="text-align:right;" class="form-group col-md-6" id="study_start_m">
                            <label for="exampleFormControlSelect1">Minute</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach ($array_m as $s_m)
                                    <option>{{$s_m}}</option>
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">分</label>
                        </div>
                        <input id="start-input" name='study_start' type='hidden' value='0000'>
                    </div>
                    <h5>Study End</h5>
                    <div class="form-row">
                        <div style="text-align:right;" class="form-group col" id="study_end_h">
                            <label for="exampleFormControlSelect1">Hour</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach ($array_h as $e_h)
                                    <option>{{$e_h}}</option>
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">時</label>
                        </div>
                        <div style="text-align:right;" class="form-group col-md-6" id="study_end_m">
                            <label for="exampleFormControlSelect1">Minute</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach ($array_m as $e_m)
                                    <option>{{$e_m}}</option>
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">分</label>
                        </div>
                        <input id="end-input" name='study_end' type='hidden' value='0000'>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Memo Area</label>
                        <!-- <span class="code-button">code</span> -->
                        <!-- <input type="checkbox" class="code_check" name="code_check" value='0'> -->
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='memo'></textarea>
                    </div>
                    <input style="display:block; margin:0 auto;" type="submit" value="post" />
                </form>
            </div>
        </div>
    </body>
</html>
