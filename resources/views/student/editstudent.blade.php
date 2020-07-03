@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Edit Student</h3>
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
                    @foreach($editstudent as $editstudentval)
                                    <form role="form" action="{{ URL::to('updatestudent/'.$editstudentval->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Student Name</label>
                                            <input type="text" name="student_name" class="form-control" id="exampleInputEmail1" value="{{ $editstudentval->student_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Student Roll</label>
                                            <input type="text" name="roll" class="form-control" id="exampleInputPassword1" value="{{ $editstudentval->roll }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Student Class</label>
                                            <select name="class_id" class="custom-select">
                                                @foreach($class as $cls)
                                                <option value="{{ $cls->id }}" <?php if ($editstudentval->class_id==$cls->id) {
                                                    echo "selected";
                                                } ?>>
                                                    {{ $cls->class_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Student Father's Name</label>
                                            <input type="text" name="fname" class="form-control" id="exampleInputPassword1" value="{{ $editstudentval->fname }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Student Mother's Name</label>
                                            <input type="text" name="mname" class="form-control" id="exampleInputPassword1" value="{{ $editstudentval->mname }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Student Gurdian Phone no.</label>
                                            <input type="text" name="gphone" class="form-control" id="exampleInputPassword1" value="{{ $editstudentval->gphone }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputMyFile">Input New image</label><br>
                                            <input type="file" id="exampleInputMyFile" name="image">
                                            Old image: <img src="{{ URL::to($editstudentval->image) }}" style="height: 90px; width: 100px;">
                                            <input type="hidden" name="oldimage" value="{{ $editstudentval->image }}">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Student Address</label>
                                            <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="{{ $editstudentval->address }}">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit"  class="btn btn-warning">Update</button>
                                        </div>
                                    </form>
                            @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')