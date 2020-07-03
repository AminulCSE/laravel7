@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Show All Classes</h3>
                    </div>
                    <section class="section">
                        <div class="input-group mb-3 col-md-4 pagination justify-content-end">
                          <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search">
                        </div>


                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Class Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                    <?php $i=0; ?>
                        @foreach($allclsshow as $cls)
                    <?php $i++; ?>
                                <tr>
                                    <td width="10%"><?php echo $i; ?></td>
                                    <td width="25%">{{ $cls->class_name }}</td>
                                    <td width="30%">{{ $cls->created_at }}</td>
                                    <td width="25%">
                                        <button class="btn btn-warning">
                                        <a href="{{ URL::to('editcls/'.$cls->id) }}">Edit</a>
                                        </button>

                                        
                                        <a OnClick="return confirm('Are you Sure to Delete??');" href="{{ URL::to('deletecls/'.$cls->id) }}"><button class="btn btn-warning">Delete</button></a>
                                        <button class="btn btn-warning">
                                        <a href="{{ URL::to('showclass/'.$cls->id) }}">Show</a></button>
                                    </td>
                                </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </section>
                   
                </article>
                @include('../inc.footer')