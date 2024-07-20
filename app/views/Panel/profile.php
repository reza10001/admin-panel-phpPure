<?php include 'PostLayouts/header.php'; ?>

<div class="content-wrapper" style="min-height: 543px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>پروفایل</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?php echo BASE_URL.'dashboard'; ?>">خانه</a></li>
              <li class="breadcrumb-item active">پروفایل کاربری</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="<?php echo BASE_URL.$data['avatar']?>" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"> <?php echo $data['username']?></h3>

                <!-- <p class="text-muted text-center">مهندس نرم افزار</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>دنبال شونده</b> <a class="float-right">۱,۳۲۲</a>
                  </li>
                  <li class="list-group-item">
                    <b>دنبال کننده</b> <a class="float-right">۵۴۳</a>
                  </li>
                  <li class="list-group-item">
                    <b>دوستان</b> <a class="float-right">۱۳,۲۸۷</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>دنبال کردن</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 <li class="nav-item"><a class="nav-link active show" href="#settings" data-toggle="tab">تنظیمات</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
          
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="ccc">
                      <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
                          <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                       </form>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane active show" id="settings">
                    <form action="<?php echo BASE_URL.'home/profile'; ?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
             
                      <div class="form-group">
                      <?php \Traits\Session_helpers::csrf(); ?>

                        <label for="inputName2" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                          <input type="text" name= "username" class="form-control" id="inputName2" value="<?php echo $_SESSION['username']; ?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName2" class="col-sm-3control-label">تصویر کاربر</label>

                        <div class="col-sm-10">
                          <input type="file" accept="image/*" name="avatar" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                   
        
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <input type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</body>
</html>