
<html>
    <head>
        <title>StudyStrage</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- <script src="{{ asset('js/edit.js') }}" defer></script> -->
        <script src="{{ asset('js/create_edit.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/study/create.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div style="padding:30px;" class="container">
            <header>
                <div class="title" style="font-size: 30px;">
                    <a class="title-font" href="/">STUDY STRAGE</a>
                </div>
            </header>
            <div class="main">
                <form name="form1" action="/study/{{$study->id}}/update" method='post'>
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="user_id" value="{{$study->user_id}}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">KeyWord(20文字以下)</label>
                        @if($errors->has('keyword'))
                        <div class="error_msg" style="color:red;">{{ $errors->first('keyword') }}</div>
                        @endif
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$study->keyword}}" name="keyword">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Language select</label>
                        <select class="form-control language-select" id="exampleFormControlSelect1" name='language'>
                            @foreach($languages as $language)
                                @if($language->id === $study->language_id){
                                    <option selected>{{$language->name}}</option>
                                }
                                @else{
                                    <option>{{$language->name}}</option>
                                }
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-row align-items-center">
                            <div class="col-auto" id="lan-input-form">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" class="form-control mb-2 add-lan" id="inlineFormInput" placeholder="新規言語を入力">
                            </div>
                            <div class="col-auto">
                            <button id="add-btn" type="button" class="btn btn-primary mb-2">Add</button>
                            </div>
                        </div>
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
                        <label for="exampleFormControlTextarea1">Memo Area(8000文字以下)</label>
                        <textarea class="form-control" id="memo-area" name='memo'>{{$study->memo}}</textarea>
                    </div>
                    <input style="display:block; margin:0 auto;" type="submit" value="put" />
                </form>
            </div>
        </div>
    </body>
</html>
