@include('../inc.header')
@include('../inc.sidebar')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
<article class="content forms-page">

    <div class="subtitle-block">
        <h3 class="subtitle" style="text-align: center; font-size: 33px; ">Student Attendance</h3>
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
                <form role="form" action="{{ URL::to('store/student/attendance') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Roll</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="mytbody">
                <?php $i=0; ?>
                    @foreach($student as $row)
                <?php $i++; ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>{{ $row->student_name }}</td>
                                <input type="hidden" name="student_id[{{$row->id}}]" value="{{ $row->id }}">

                                <input type="hidden" name="satt_date[{{$row->id}}]" value="<?php echo date('Y-m-d') ?>">

                                <input type="hidden" name="class_id[{{$row->id}}]" value="{{ $row->class_id }}">
                                <td>{{ $row->class_name }}</td>
                                <td>{{ $row->roll }}</td>
                                <td>
                                    <label  for="{{ $row->id }}">Present</label>
                                        <input  type="radio" name="status[{{$row->id}}]" value="1" id="{{ $row->id }}"> || 

                                    <label for="{{ $row->id+199000 }}">Absent</label>
                                        <input  type="radio" name="status[{{$row->id}}]" value="0" id="{{$row->id+199000}}">
                                </td>
                            </tr>
                @endforeach
                        </tbody>
                    </table>


                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Submit</button>
                            <button type="submit" class="btn btn-warning"><a href="{{ URL::to('/') }}">Back</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   
</article>
@include('../inc.footer')