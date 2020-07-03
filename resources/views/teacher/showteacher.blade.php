@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Show All Teachers</h3>
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
                                        <th>Teacher Name</th>
                                        <th>Department</th>
                                        <th>Phone</th>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                        <?php $i=0; ?>
                            @foreach($teacher as $row)
                        <?php $i++; ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>{{ $row->teacher_name }}</td>
                                        <td>{{ $row->department }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td><img src="{{ URL::to($row->image) }}" style="height: 60px;"></td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td>{{ $row->joining_date }}</td>
                                        <td>
                                            <a href="{{ URL::to('teacher/'.$row->id.'/edit') }}"><button class="btn btn-warning">Edit</button></a>

                                            <form method="post" action="{{ URL::to('teacher/'.$row->id) }}">
                                                @csrf
                                                @method('DELETE')
                                            <button class="btn btn-warning" OnClick="return confirm('Are you Sure to Delete??');" type="submit">Delete</button>
                                            </form>

                                            <a href="{{ URL::to('teacher/'.$row->id) }}"><button class="btn btn-warning">Show</button></a>
                                        </td>
                                    </tr>
                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <div class="pagination justify-content-end">{{ $teacher->links() }}</div>
                </article>
                @include('../inc.footer')