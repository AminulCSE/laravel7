@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Add Student</h3>
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
                                    <form role="form" action="{{ URL::to('studentstore') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName">Student Name</label>
                                            <input type="text" name="student_name" class="form-control" id="exampleInputName" placeholder="Enter Student name. Ex: Turag, Rubel, Muhammad Etc.">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputRoll">Student Roll</label>
                                            <input type="text" name="roll" class="form-control" id="exampleInputRoll" placeholder="Roll number Ex: 1 or 2 or 3 etc.">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputStudentClass">Student Class- Class number Ex: One, Two, Three etc.</label>
                                            <select name="class_id" id="exampleInputStudentClass" class="custom-select">
                                                @foreach($allclsshow as $cls)
                                                <option value="{{ $cls->id }}">
                                                    {{ $cls->class_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    

                                        <div class="form-group">
                                            <label for="exampleInputStudentFname">Student Father's Name</label>
                                            <input type="text" name="fname" class="form-control" id="exampleInputStudentFname" placeholder="Father's Name Ex: Rahim, Rasel etc.">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputStudentMname">Student Mother's Name</label>
                                            <input type="text" name="mname" class="form-control" id="exampleInputStudentMname" placeholder="Mother's Name Ex:Fatema, Bilkish etc.">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputStudentGphone">Student Gurdian Phone no.</label>
                                            <input type="text" name="gphone" class="form-control" id="exampleInputStudentGphone" placeholder="Gurdian Phone number Ex: 0178546.... etc.">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputMyFile">Input your image</label><br>
                                            <input type="file" id="exampleInputMyFile" name="image">
                                        </div>




                                        <div class="form-group">
                                            <label for="exampleInputStudentAddress">Student Address</label>
                                            <input type="text" name="address" class="form-control" id="exampleInputStudentAddress" placeholder="Student Address Ex: Kishoreganj, Gochihata, Danapatuly,  etc."> </div>
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