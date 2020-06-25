
<html>
    <head>
        <title>StudyStrage</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/edit.js') }}" defer></script>
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
                <form name="form1" action="/study/{{$study->id}}/update" method='post'>
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">KeyWord</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value={{$study->keyword}} name='keyword'>
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
                                    @if($start_h === $s_h)
                                        <option selected>{{$s_h}}</option>
                                    @else
                                        <option>{{$s_h}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">時</label>
                        </div>
                        <div style="text-align:right;" class="form-group col-md-6" id="study_start_m">
                            <label for="exampleFormControlSelect1">Minute</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            @foreach ($array_m as $s_m)
                                    @if($start_m === $s_m)
                                        <option selected>{{$s_m}}</option>
                                    @else
                                        <option>{{$s_m}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">分</label>
                        </div>
                        <input id="start-input" name='study_start' type='hidden' value={{$study->time_start}}>
                    </div>
                    <h5>Study End</h5>
                    <div class="form-row">
                        <div style="text-align:right;" class="form-group col" id="study_end_h">
                            <label for="exampleFormControlSelect1">Hour</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach ($array_h as $e_h)
                                    @if($end_h === $e_h)
                                        <option selected>{{$e_h}}</option>
                                    @else
                                        <option>{{$e_h}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">時</label>
                        </div>
                        <div style="text-align:right;" class="form-group col-md-6" id="study_end_m">
                            <label for="exampleFormControlSelect1">Minute</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach ($array_m as $e_m)
                                    @if($end_m === $e_m)
                                        <option selected>{{$e_m}}</option>
                                    @else
                                        <option>{{$e_m}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="exampleFormControlSelect1">分</label>
                        </div>
                        <input id="end-input" name='study_end' type='hidden' value={{$study->time_end}}>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Memo Area</label>
                        <!-- <span class="code-button">code</span> -->
                        <!-- <input style="display:none;" type="checkbox"  name="code-check" value="red" > -->
                        <!-- <input type="checkbox" class="code_check" name="code_check" value={{$study->code_check}}> -->
                        <textarea class="form-control memo-area" id="exampleFormControlTextarea1" rows="20" name='memo'>{{$study->memo}}</textarea>
                    </div>
                    <input style="display:block; margin:0 auto;" type="submit" value="put" />
                </form>
            </div>
        </div>
    </body>
</html>
