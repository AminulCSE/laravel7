@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Show All Students</h3>
                    </div>
                    <section class="section">
                        <div class="table-responsive">
                            <div class="input-group mb-3 col-md-4 pagination justify-content-end">
                              <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search">
                            </div>
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
                                <tbody id="myTable">
                        <?php $i=0; ?>
                            @foreach($studentsval as $stu_val)
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
                                            <a href="{{ URL::to('editstudent/'.$stu_val->id) }}"><button class="btn btn-warning">Edit</button></a>
                                            <a onclick="return confirm('Are your sure to delete this???')"href="{{ URL::to('deletestudent/'.$stu_val->id) }}"><button class="btn btn-warning">Delete</button></a>
                                            <a href="{{ URL::to('show_one_student/'.$stu_val->id) }}"><button class="btn btn-warning">Show</button></a>
                                            <a href="{{ URL::to('add_result/'.$stu_val->id) }}"><button class="btn btn-warning">Result</button></a>
                                        </td>
                                    </tr>
                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <div class="pagination justify-content-end">{{ $studentsval->links() }}</div>
                </article>
                @include('../inc.footer')

