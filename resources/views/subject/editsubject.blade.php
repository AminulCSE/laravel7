@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Edit Subject</h3>
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
                    <?php $i=0; ?>
                        @foreach($getsubject as $row)
                    <?php $i++; ?>
                                    <form role="form" action="{{ URL::to('subject/'.$row->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Subject Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $row->name }}">
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Class</label>
                                            <select name="class_id" class="custom-select">
                                                @foreach($getclass as $rowclass)

                                                <option value="{{ $rowclass->id }}"
                                                <?php if ($row->class_id==$rowclass->id) {
                                                    echo "selected";
                                                }?> >
                                                    {{ $rowclass->class_name }}
                                                </option>

                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit"  class="btn btn-warning">Update</button>
                                        </div>
                                    </form>
                            @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                   
                </article>
                @include('../inc.footer')