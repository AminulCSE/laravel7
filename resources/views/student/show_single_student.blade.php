@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Show Single Student</h3>
                    </div>
                    <section class="section">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Roll</th>
                                        <th>Class</th>
                                        <th>Image</th>
                                        <th>Father's Name</th>
                                        <th>Mother's Name</th>
                                        <th>Gourdian Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php $i=0; ?>
                            @foreach($show_one_student as $stu_val)
                        <?php $i++; ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>{{ $stu_val->student_name }}</td>
                                        <td>{{ $stu_val->roll }}</td>
                                        <td>{{ $stu_val->class_name }}</td>
                                        <td><img src="{{ URL::to($stu_val->image) }}" style="height: 60px; width: 70px;"></td>
                                        <td>{{ $stu_val->fname }}</td>
                                        <td>{{ $stu_val->mname }}</td>
                                        <td>{{ $stu_val->gphone }}</td>
                                        <td>{{ $stu_val->address }}</td>
                                        <td>
                                            <a href="{{ URL::to('editstudent/'.$stu_val->id) }}">Edit</a>||
                                            <a
                                            OnClick="return confirm('Are you Sure to Delete??');"
                                            href="{{ URL::to('deletestudent/'.$stu_val->id) }}">Delete</a>||
                                            <a href="{{ URL::to('showstudents') }}">Back</a>
                                        </td>
                                    </tr>
                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')