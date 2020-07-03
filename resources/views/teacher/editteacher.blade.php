 @include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Update Teacher</h3>
                    </div>
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-8" style="margin: auto;">
                                <div class="card card-block sameheight-item">
                                <!-- Create Post Form -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @foreach($teacherval as $teachers)
                                    <form role="form" action="{{ URL::to('teacher/'.$teachers->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputName">Teacher's Name</label>
                                            <input type="text" name="teacher_name" class="form-control" id="exampleInputName" value="{{ $teachers->teacher_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputRoll">Teacher's Department</label>
                                            <input type="text" name="department" class="form-control" id="exampleInputRoll" value="{{ $teachers->department }}">
                                        </div>

                                    

                                        <div class="form-group">
                                            <label for="exampleInputStudentFname">Teacher's Phone</label>
                                            <input type="text" name="phone" class="form-control" id="exampleInputStudentFname" value="{{ $teachers->phone }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputStudentMname">Teacher's Email</label>
                                            <input type="text" name="email" class="form-control" id="exampleInputStudentMname" value="{{ $teachers->email }}">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputMyFile">Input your image</label><br>
                                            <input type="file" id="exampleInputMyFile" name="image">
                                            <img src="{{ URL::to($teachers->image) }}"style="height: 120px; width: 100px;">

                                            <input type="hidden" value="{{ ($teachers->image) }}" name="oldimage">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputStudentGphone">Teacher's Address</label>
                                            <input type="text" name="address" class="form-control" id="exampleInputStudentGphone" value="{{ $teachers->address }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputMyFile">Input Joining Date</label><br>
                                            <input type="date" name="joining_date" class="form-control" id="exampleInputStudentGphone" value="{{ $teachers->joining_date }}">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-warning">Submit</button>
                                        </div>
                                    </form>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')