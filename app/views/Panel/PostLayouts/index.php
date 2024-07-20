<?php include 'header.php'; ?>
  
  <div class="content-wrapper" style="min-height: 543px;">
    <!-- Content Header (Page header) -->
  
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">پست ها </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>شماره</th>
                    <th>کاربر</th>
                    <th>تاریخ</th>
                    <th>عنوان</th>
                    <th>عملیات</th>
                  </tr>
                  <?php foreach($data1 as $val): 
                       foreach($data2 as $val2):
                    // foreach(){ ?>
                  <tr>
                    <td id='counter'></td>
                    <td><?php echo $val2['username']; ?></td>
                    <td>۱۱-۷-۲۰۱۴</td>
                    <td><span class="badge badge-success"><?php echo $val['title']; ?></span></td>
                    <td><a href="#" onclick="destroyCategory(event, <?php echo $val['id']; ?>)"><img src="<?php echo BASE_URL."public/assets/img/trash30.png"?>" /></a>
                      <form action="<?php echo BASE_URL.'home/delete/'.$val['id']; ?>" method="post" id="destroy-post-<?php echo $val['id']; ?>"></form>
                    </td> 
                    </tr>
                    <?php endforeach;
                         endforeach; ?>
                         
                </tbody></table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    
    
  </div>
  <script>
    function destroyCategory(event, id) {
      event.preventDefault();
      document.getElementById('destroy-post-' + id).submit();
    }

      </script>
    </body>
</html>


