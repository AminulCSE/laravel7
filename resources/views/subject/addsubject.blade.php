@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Add Subject</h3>
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
                                    <form role="form" action="{{ URL::to('subject') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Subject Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Subject name. Ex: Bangla, English Etc.">
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
                                            <button type="submit" class="btn btn-warning">Submit</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')