@include('../inc.header')
@include('../inc.sidebar')
<style>
    .card {
      box-shadow: 0 4px 5px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 100%;
      border-radius: 5px;
      text-align: center;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.1);
    }

    .container {
      padding: 2px 16px;
    }
    </style>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content dashboard-page">
                    <section class="section">
                        <div class="row sameheight-container">

                            <div class="container">
                            <div class="row">
                              <!-- <div class="col-md-6">
                                  <div style="width: auto; height: 50px; padding: 5px; font-size: 25px; background-color: #ffc107; color: #fff; text-align: center; border-radius: 50px;">
                                    <p>
                                      <span style="background: red;" class="spinner-grow text-primary"></span>&nbsp; This tutorial teaches you everything.</p>
                                  </div>
                              </div> -->

                              <div class="col-md-6">
                                 <button class="btn btn-warning" data-toggle="modal" data-target="#myModal" style="background: #ffc107;">
                                    Show Students Attandance</button>

                                    <button class="btn btn-warning" data-toggle="modal" data-target="#myModal" style="background: #ffc107;">
                                    Show Teachers Attandance</button>
                              </div>

                              <div class="col-md-6" style="top: 6px; text-align: right;">
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#myModal" style="background: #ffc107;">
                                    Take Student Attandance</button>

                                    <button class="btn btn-warning" data-toggle="modal" data-target="#myModal" style="background: #ffc107;">
                                    Take Teacher Attandance</button>
                              </div>


<!-- Model use this to get Attandance for students -->
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header" style="background: #ffc107">
          <h4 class="modal-title">Select option to get Attandence</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form role="form" action="{{ URL::to('addattendance') }}" method="get">
            @csrf
              <div class="form-group">
                  <select name="class_id" class="custom-select">
                      @foreach($allclass as $row)
                      <option value="{{ $row->id }}">
                          {{ $row->class_name }}
                      </option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-warning" style="background: #ffc107; color: #fff;">Get Attandance</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>










                            </div><br>
                            </div>

                            

                            <div class="col-md-12">
                               <div class="card-columns">
                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-qrcode"></i>
                                    <div class="container">
                                      <h4>Total Students</h4>
                                      <?php $i=0; ?>
                                      @foreach($allstudent as $row)
                                      <?php $i++; ?>
                                      @endforeach
                                        <b><?php echo $i; ?></b>
                                    </div>
                                  </div>

                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-cogs"></i>
                                    <div class="container">
                                      <h4>Total Teachers</h4>
                                      <?php $i=0; ?>
                                      @foreach($allteacher as $row)
                                      <?php $i++; ?>
                                      @endforeach
                                        <b><?php echo $i; ?></b>
                                    </div>
                                  </div>

                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-user-md"></i>
                                    <div class="container">
                                      <h4>Total Class</h4>
                                      <?php $i=0; ?>
                                      @foreach($allclass as $row)
                                      <?php $i++; ?>
                                      @endforeach
                                        <b><?php echo $i; ?></b>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="margin-top: 30px;">
                               <div class="card-columns">
                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-envelope"></i>
                                    <div class="container">
                                      <h4>Total Students</h4>
                                      <b>45</b> 
                                    </div>
                                  </div>

                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-phone-square"></i>
                                    <div class="container">
                                      <h4>Total Students</h4>
                                      <b>45</b> 
                                    </div>
                                  </div>

                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-users"></i>
                                    <div class="container">
                                      <h4>Total Students</h4>
                                      <b>45</b> 
                                    </div>
                                  </div>
                            </div>
                        </div>


                        <div class="col-md-12 col-xs-12" style="margin-top: 30px;">
                               <div class="card-columns">
                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-eye"></i>
                                    <div class="container">
                                      <h4>Total Students</h4>
                                      <b>45</b> 
                                    </div>
                                  </div>

                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-edit alias"></i>
                                    <div class="container">
                                      <h4>Total Students</h4>
                                      <b>45</b> 
                                    </div>
                                  </div>

                                  <div class="card"><br>
                                    <i style="font-size: 50px; color: #ffc107; margin: auto;" class="fa fa-certificate"></i>
                                    <div class="container">
                                      <h4>Total Students</h4>
                                      <b>45</b> 
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </section>
                </article>
        @include('../inc.footer')