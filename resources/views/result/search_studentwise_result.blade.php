@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">
                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Search Result By Student</h3>
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
                                            <label for="exampleInputStudentClass">Select Student Name To Show Result</label>
                                            <select name="student_id" id="exampleInputStudentClass" class="custom-select">
                                                @foreach($stnt as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->student_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-warning">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')