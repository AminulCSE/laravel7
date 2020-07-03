@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">
                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Add Result</h3>
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
                                    <form role="form" action="{{ URL::to('result') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputRoll">Roll</label>
                                            <input type="text" name="roll" class="form-control" id="exampleInputRoll" placeholder="Roll number Ex: 6309...etc.">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputStudentClass">Class- Class number Ex: One, Two, Three etc.</label>
                                            <select name="class_id" id="exampleInputStudentClass" class="custom-select">
                                                @foreach($classes as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->class_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputStudentClass">Student Name</label>
                                            <select name="student_id" id="exampleInputStudentClass" class="custom-select">
                                                @foreach($students as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->student_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputStudentClass">Subject</label>
                                            <select name="subject_id" id="exampleInputStudentClass" class="custom-select">
                                                @foreach($subjects as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputNumber">Number</label>
                                            <input type="text" name="number" class="form-control" id="exampleInputNumber" placeholder="Number Ex: 45, 55...etc.">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Commants By Teacher</label>
                                            <textarea rows="3" name="commants" class="form-control underlined" placeholder="Enter your Commants By 'Teacher'"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit"  class="btn btn-warning">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')