@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="subtitle-block" style="border: 3px solid orange; box-shadow: 0px 0px 10px .2px; padding: 33px; text-align: center; width: 800px;">
                                @foreach($teachersoneval as $row)
                                <h3 style="font-size: 33px; color: red; ">{{ $row->teacher_name }}</h3><hr style="border: solid 2px red; width: 220px;">

                                <img src="{{ URL::to($row->image) }}" style="height: 200px; width: 200px;">
                                <p style="font-size: 20px;">Department:- {{ $row->department }}</p>
                                <p style="font-size: 20px;">Phone:- {{ $row->phone }}</p>
                                <p style="font-size: 20px;">Email:- {{ $row->email }}</p>
                                <p style="font-size: 20px;">Address:- {{ $row->address }}</p>
                                <p style="font-size: 20px;">Joining Date:- {{ $row->joining_date }}</p>

                                <button class="btn btn-danger"><a style="color: white;" href="{{ URL::to('teacher/'.$row->id.'/edit') }}">Edit</a></button>

                                <form method="post" action="{{ URL::to('teacher/'.$row->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <button class="btn btn-danger"><a style="color: white;" href="{{ URL::to('teacher') }}">Back</a></button>
                                        
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pagination justify-content-end"></div>
                </article>
                @include('../inc.footer')