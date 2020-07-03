<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <div class="logo">
                    <a href="{{ URL::to('/') }}">
                        <img style="height: 97px; padding-bottom: 55px; padding-right: 45px; width: 240px;" src="{{ asset('public/frontend/assets/images/logo.png') }}">
                    </a>
                </div>
            </div>
        </div>
        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                <li class="active">
                    <a href="{{ URL::to('/') }}">
                        <i class="fa fa-home"></i> Dashboard </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> Classes
                        <i style="float: right;" class="fa fa-angle-double-down"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{route('addclass')}}"> Add Class </a>
                        </li>
                        <li>
                            <a href="{{route('showclass')}}"> Show Class </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> Subject
                        <i style="float: right;" class="fa fa-angle-double-down"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ URL::to('subject/create')}}">Add Subject</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('subject') }}"> Show Subject </a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> Student
                        <i style="float: right;" class="fa fa-angle-double-down"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{route('addstudent')}}"> Add Student </a>
                        </li>
                        <li>
                            <a href="{{URL::to('showstudents')}}"> Show Student </a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> Teachers
                        <i style="float: right;" class="fa fa-angle-double-down"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ URL::to('teacher/create')}}"> Add Teacher </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('teacher') }}"> Show Teacher </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> Subjectwise Result
                        <i style="float: right;" class="fa fa-angle-double-down"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ URL::to('result/create')}}">Subjectwise Add Result</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('result') }}">Subjectwise Show Result </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> Studentwise Result
                        <i style="float: right;" class="fa fa-angle-double-down"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ URL::to('result/create/studentwise')}}">Studentwise Add Result</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('result') }}">Studentwise Show Result </a>
                        </li>
                    </ul>
                </li>




                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> Logo
                        <i style="float: right;" class="fa fa-angle-double-down"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{URL::to('logo/create')}}"> Add Logo </a>
                        </li>
                        <li>
                            <a href="{{URL::to('logo')}}"> Show Logo </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>