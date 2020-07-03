@include('../inc.header')
@include('../inc.sidebar')
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">

                    <div class="subtitle-block">
                        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Logo image</h3>
                    </div>



                    <section class="section">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="mytbody">
                    <?php $i=0; ?>
                        @foreach($showlogo as $row)
                    <?php $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><img src="{{ URL::to($row->image) }}" style="height: 100px; width: 300px;"></td>

                                    <td>
                                        
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
                                        
                                    </td>
 

                                    <td>
                                        
                                        <button class="btn btn-warning">
                                            <a href="{{ URL::to('logo/'.$row->id.'/edit') }}">Edit</a>
                                        </button>

                                        <button class="btn btn-warning">
                                            <a onclick="return confirm('Are you sure to Delete??')" href="{{ URL::to('dellogo/'.$row->id) }}">Delete</a>
                                        </button>
                                    </td>
                                </tr>
                    @endforeach
                            </tbody>
                        </table>
                    </section>
                </article>
                @include('../inc.footer')