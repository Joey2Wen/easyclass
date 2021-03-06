@extends('layouts.app')
<title>easyClass</title>
<link href="css/addclass.css" rel="stylesheet">
@section('content')
<div class="container">
    @if(Auth::user()->position == "Student")
    <ul class="tabs" role="tablist">
        <li>
            <input type="radio" name="tabs" id="tab1" checked />
            <label for="tab1"
                   role="tab"
                   aria-selected="true"
                   aria-controls="panel1"
                   tabindex="0">Class</label>
            <div id="tab-content1"
                 class="tab-content"
                 role="tabpanel"
                 aria-labelledby="description"
                 aria-hidden="false">
                <ul class="drop-down closed">
                    <li class="col-lg-12"><div class="nav-button">Lecture 1</div></li>
                    <li class="col-lg-12"><div href="#">About</div></li>
                    <li class="col-lg-12"><div href="#">Library</div></li>
                    <li class="col-lg-12"><div href="#">Contact</div></li>
                </ul>
                <ul class="drop-down closed">
                    <li class="col-lg-12"><div class="nav-button">Lecture 2</div></li>
                    <li class="col-lg-12"><div href="#">About</div></li>
                    <li class="col-lg-12"><div href="#">Library</div></li>
                    <li class="col-lg-12"><div href="#">Contact</div></li>
                </ul>
                <ul class="drop-down closed">
                    <li class="col-lg-12"><div class="nav-button">Lecture 3</div></li>
                    <li class="col-lg-12"><div href="#">About</div></li>
                    <li class="col-lg-12"><div href="#">Library</div></li>
                    <li class="col-lg-12"><div href="#">Contact</div></li>
                </ul>
            </div>
        </li>
    </ul>
    <script>
        $(function() {
            // Bind Click event to the drop down navigation button
            $(".nav-button").click(function() {
                /*  Toggle the CSS closed class which reduces the height of the UL thus
                 hiding all LI apart from the first */
                $(this).parent().parent().toggleClass("closed");
            });

        });
    </script>
    @else
    <ul class="tabs" role="tablist">
        <li>
            <input type="radio" name="tabs" id="tab1" checked />
            <label for="tab1"
                   role="tab"
                   aria-selected="true"
                   aria-controls="panel1"
                   tabindex="0">Class</label>
            <div id="tab-content1"
                 class="tab-content"
                 role="tabpanel"
                 aria-labelledby="description"
                 aria-hidden="false">
                <div class="col-lg-12 addcontent">
                    <p>Create</p>
                </div>
                <!--Class name-->
                <!--need change-->
                <form method="post" action="/courses">
                    <input type="text" name="coursername">
                </form>
                <input type="submit" name="submit">
                <div class="col-md-10 col-md-offset-2  form-group{{ $errors->has('lecturename') ? ' has-error' : '' }}" id="lectureName">
                    <div for="lecturename" class="col-md-2 control-label">Class Name</div>

                    <div class="col-md-8">
                        <input id="lecturename" type="text" class="form-control" name="lecturename" value="{{ old('lecturename') }}">

                        @if ($errors->has('lecturename'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('lecturename') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12" style="text-align: center;margin:50px 20px;">
                    <a class="submit_add" href="{{ url('/home') }}" type="submit">
                        Submit
                    </a>
                </div>
            </div>
        </li>
    </ul>
    <script>
        $(function() {
            // Bind Click event to the drop down navigation button
            $(".nav-button").click(function() {
                /*  Toggle the CSS closed class which reduces the height of the UL thus
                 hiding all LI apart from the first */
                $(this).parent().parent().toggleClass("closed");
            });

        });
    </script>
    @endif
</div>
@endsection
