@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Show Students Results</h3>
                    </div>
                    <section class="section">
                        <div class="input-group mb-3 col-md-4 pagination justify-content-end">
                          <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search">
                        </div>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Student Name</th>
                                    <th>Roll</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Number</th>
                                    <th>Teacher's Commant</th>
                                    <th>Publised Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                    <?php $i=0; ?>
                        @foreach($showresult as $row)
                    <?php $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>{{ $row->student_name }}</td>
                                    <td>{{ $row->roll }}</td>
                                    <td>{{ $row->class_name }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td style="color: red; font-weight: bold;">{{ $row->number }}</td>
                                    <td>{{ $row->commants }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        <a href="{{ URL::to('result/'.$row->id.'/edit') }}">Edit</a>
                                        <form action="{{ URL::to('result/'.$row->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button OnClick="return confirm('Are you Sure to Delete??');" style="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </section>
                </article>
                @include('../inc.footer')

