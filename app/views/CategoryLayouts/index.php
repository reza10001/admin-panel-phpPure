<?php include '../Panel/PostLayouts/header.php'; ?>

<div class="content-wrapper" style="min-height: 543px;">
      
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>فرم‌های عمومی</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-left">
          <li class="breadcrumb-item"><a href="#">خانه</a></li>
          <li class="breadcrumb-item active">فرم‌های عمومی</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
 <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">مثال ساده</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">نام دسته بندی</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل را وارد کنید">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">نام انگلیسی</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="پسورد را وارد کنید">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">دسته بندی پدر </label>
        
                <select multiple="" class="form-control">
                  <option>گزینه ۱</option>
                  <option>گزینه ۲</option>
                  <option>گزینه ۳</option>
                  <option>گزینه ۴</option>
                  <option>گزینه ۵</option>
                </select>
              </div>
          
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">ارسال</button>
            </div>
          </form>
        </div>

      </div>
      <!--/.col (left) -->
      <!-- right column -->
 <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">جدول ۱</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <tbody><tr>
                <th style="width: 10px">#</th>
                <th>فعالیت</th>
                <th>پیشرفت</th>
                <th style="width: 40px">درصد</th>
              </tr>
              <tr>
                <td>۱.</td>
                <td>آپدیت نرم افزار</td>
                <td>
                  <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                  </div>
                </td>
                <td><span class="badge bg-danger">۵۵%</span></td>
              </tr>
              <tr>
                <td>۲.</td>
                <td>بهینه سازی دیتابیس</td>
                <td>
                  <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                  </div>
                </td>
                <td><span class="badge bg-warning">۷۰%</span></td>
              </tr>
              <tr>
                <td>۳.</td>
                <td>اجرای کرون جابز‌</td>
                <td>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                  </div>
                </td>
                <td><span class="badge bg-primary">۳۰%</span></td>
              </tr>
              <tr>
                <td>۴.</td>
                <td>	رفع باگ های نرم افزاری</td>
                <td>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 90%"></div>
                  </div>
                </td>
                <td><span class="badge bg-success">۹۰%</span></td>
              </tr>
            </tbody></table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">۱</a></li>
              <li class="page-item"><a class="page-link" href="#">۲</a></li>
              <li class="page-item"><a class="page-link" href="#">۳</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>


</div>
</body>
</html>
