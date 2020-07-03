@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Edit Logo</h3>
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
                    @foreach($logoval as $row)
                    <?php $i++; ?>
                                    <form role="form" action="{{ URL::to('logo/'.$row->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputMyFile">Input New image</label><br>
                                            <input type="file" id="exampleInputMyFile" name="image">

                                            Old image: <img src="{{ URL::to($row->image) }}" style="height: 90px; width: 100px;">
                                            <input type="hidden" name="oldimage" value="{{ $row->image }}">
                                        </div>


                                        <div class="form-group">
                                            <label  for="{{ $row->id+$i }}">Active</label>

                                        <input  type="checkbox" name="status" value="1" id="{{ $row->id+$i }}"

                                        <?php $status = $row->status;
                                        if ($status==1) {
                                            echo "checked";
                                        }
                                        ?>    >||

                                        <label for="{{ $row->id+$i+1 }}">Disable</label>
                                        <input type="checkbox" name="status" value="0" id="{{ $row->id+$i+1 }}"

                                        <?php $status = $row->status;
                                        if ($status==0) {
                                            echo "checked";
                                        }
                                        ?>  >
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