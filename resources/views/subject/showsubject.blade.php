@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Show All Subject</h3>
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
                                        <th>Subject Name</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                        <?php $i=0; ?>
                            @foreach($getsubject as $subject)
                        <?php $i++; ?>
                                    <tr>
                                        <td width="10%"><?php echo $i; ?></td>
                                        <td width="35%">{{ $subject->name }}</td>
                                        <td width="30%">{{ $subject->class_name }}</td>
                                        <td width="25%">
                                            <a href="{{ URL::to('subject/'.$subject->id.'/edit') }}"><button class="btn btn-warning">Edit</button></a>
                                            <a OnClick="return confirm('Are you Sure to Delete??');" href="{{ URL::to('destroy/'.$subject->id) }}"><button class="btn btn-warning">Delete</button></a>
                                            <a href="{{ URL::to('subject/'.$subject->id) }}"><button class="btn btn-warning">Show</button></a>
                                        </td>
                                    </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')