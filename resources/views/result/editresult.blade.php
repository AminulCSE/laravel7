@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">
                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Update Result</h3>
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


                                    <form role="form" action="{{ URL::to('result/'.$editresult->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputRoll">Roll</label>
                                            <input type="text" name="roll" class="form-control" id="exampleInputRoll" value="{{ $editresult->roll }}">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Class</label>
                                            <select name="class_id" class="custom-select">
                                                @foreach($getclass as $cls)
                                                <option value="{{ $cls->id }}" <?php if ($editresult->class_id==$cls->id) {
                                                    echo "selected";
                                                } ?>>
                                                    {{ $cls->class_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Student Name</label>
                                            <select name="student_id" class="custom-select">
                                                @foreach($getstudent as $student)
                                                <option value="{{ $student->id }}" <?php if ($editresult->student_id==$student->id) {
                                                    echo "selected";
                                                } ?>>
                                                    {{ $student->student_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Subject Name</label>
                                            <select name="subject_id" class="custom-select">
                                                @foreach($getsubject as $subject)
                                                <option value="{{ $subject->id }}" <?php if ($editresult->subject_id==$subject->id) {
                                                    echo "selected";
                                                } ?>>
                                                    {{ $subject->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputNumber">Number</label>
                                            <input type="text" name="number" class="form-control" id="exampleInputNumber" value="{{ $editresult->number }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Commants By Teacher</label>
                                            <textarea rows="3" name="commants" class="form-control underlined">{{ $editresult->commants }}</textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-warning">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')