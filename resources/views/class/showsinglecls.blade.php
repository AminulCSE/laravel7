@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Show Single Class</h3>
                    </div>
                    <section class="section">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Class Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php $i=0; ?>
                            @foreach($singlecls as $clss)
                        <?php $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>{{ $clss->class_name }}</td>
                                    <td>{{ $clss->created_at }}</td>
                                    <td>
                                        <a href="{{route('showclass')}}">Back</a>||
                                        <a href="{{ URL::to('editcls/'.$clss->id) }}">Edit</a>||
                                        <a href="{{ URL::to('deletecls/'.$clss->id) }}">Delete</a>
                                    </td>
                                </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </section>
                   
                </article>
                @include('../inc.footer')