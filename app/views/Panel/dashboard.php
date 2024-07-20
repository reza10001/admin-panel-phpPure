<?php

use Traits\VisCounter;

 include "PostLayouts/header.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">داشبورد</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?php echo BASE_URL.'dashboard'; ?>">خانه</a></li>
              <li class="breadcrumb-item active">داشبورد  </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php foreach($results2 as $result): ?>
                <h3><?php  echo $result; ?></h3>
                <?php endforeach; ?> 
                <p> تعداد پست ها</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
           
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php foreach($results1 as $result): ?>
                <h3><?php  echo $result; ?></h3>
                <?php endforeach; ?> 
                <p>کاربران ثبت شده</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo VisCounter::getLastVisits(); ?></h3>

                <p>بازدید های امروز</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
         <section class="col-lg-7 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header d-flex p-0 ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title p-3">
                  <i class="fa fa-pie-chart mr-1"></i>
                  فروش
                </h3>
                <ul class="nav nav-pills mr-auto p-2">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">نمودار</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">چارت</a>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="377.25" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px; top: -0.640625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.529296875" y="261" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.029296875,261H352.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.529296875" y="202" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.029296875,202H352.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.529296875" y="143" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">18,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.029296875,143H352.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.529296875" y="84.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.029296875,84.00000000000003H352.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.529296875" y="25.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.029296875,25.00000000000003H352.25" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="299.01372804304214" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7</tspan></text><path fill="#579de7" stroke="none" d="M62.029296875,219.05493333333334C70.13669766226235,219.56626666666668,86.35149923678708,222.6231049981125,94.45890002404943,221.10026666666667C102.56997430509848,219.57673833144582,118.79212286719661,209.1350666666667,126.90319714824567,206.86946666666668C134.92978107220046,204.6274666666667,150.98294892011006,204.88256480506598,159.00953284406486,203.06986666666666C167.03244327423295,201.2579981383993,183.07826413456914,194.91349669779092,191.10117456473722,192.3712C199.20857535199957,189.80213003112425,215.4233769265243,182.51724094375237,223.53077771378665,182.6244C231.64185199483572,182.73160761041905,247.86400055693383,204.17807818499128,255.9750748379829,193.22866666666667C264.00165876193773,182.39331151832462,280.0548266098473,101.94542370540854,288.0814105338021,95.48533333333336C296.0161571130892,89.09915703874188,311.8856502716635,135.13648756583467,319.8203968509506,141.8436C327.92779763821295,148.69665423250134,344.14259921273765,147.7554,352.25,149.726L352.25,261L62.029296875,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#007cff" d="M62.029296875,219.05493333333334C70.13669766226235,219.56626666666668,86.35149923678708,222.6231049981125,94.45890002404943,221.10026666666667C102.56997430509848,219.57673833144582,118.79212286719661,209.1350666666667,126.90319714824567,206.86946666666668C134.92978107220046,204.6274666666667,150.98294892011006,204.88256480506598,159.00953284406486,203.06986666666666C167.03244327423295,201.2579981383993,183.07826413456914,194.91349669779092,191.10117456473722,192.3712C199.20857535199957,189.80213003112425,215.4233769265243,182.51724094375237,223.53077771378665,182.6244C231.64185199483572,182.73160761041905,247.86400055693383,204.17807818499128,255.9750748379829,193.22866666666667C264.00165876193773,182.39331151832462,280.0548266098473,101.94542370540854,288.0814105338021,95.48533333333336C296.0161571130892,89.09915703874188,311.8856502716635,135.13648756583467,319.8203968509506,141.8436C327.92779763821295,148.69665423250134,344.14259921273765,147.7554,352.25,149.726" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="62.029296875" cy="219.05493333333334" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="94.45890002404943" cy="221.10026666666667" r="4.12" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="126.90319714824567" cy="206.86946666666668" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.00953284406486" cy="203.06986666666666" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="191.10117456473722" cy="192.3712" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="223.53077771378665" cy="182.6244" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.9750748379829" cy="193.22866666666667" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="288.0814105338021" cy="95.48533333333336" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="319.8203968509506" cy="141.8436" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="352.25" cy="149.726" r="4" fill="#007cff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#5d646a" stroke="none" d="M62.029296875,240.02746666666667C70.13669766226235,239.8072,86.35149923678708,241.35446642506605,94.45890002404943,239.1464C102.56997430509848,236.93733309173274,118.79212286719661,223.3365417102967,126.90319714824567,222.35893333333334C134.92978107220046,221.39150837696334,150.98294892011006,233.23306051728085,159.00953284406486,231.36626666666666C167.03244327423295,229.5003271839475,183.07826413456914,209.28948157595082,191.10117456473722,207.428C199.20857535199957,205.54691490928414,215.4233769265243,214.43960989052474,223.53077771378665,216.39600000000002C231.64185199483572,218.3532765571914,247.86400055693383,232.37735986038396,255.9750748379829,223.08266666666668C264.00165876193773,213.8847931937173,280.0548266098473,148.22814457230533,288.0814105338021,142.42573333333334C296.0161571130892,136.689711238972,311.8856502716635,170.46889944279064,319.8203968509506,176.92893333333336C327.92779763821295,183.529532776124,344.14259921273765,190.23343333333335,352.25,194.66826666666668L352.25,261L62.029296875,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#495057" d="M62.029296875,240.02746666666667C70.13669766226235,239.8072,86.35149923678708,241.35446642506605,94.45890002404943,239.1464C102.56997430509848,236.93733309173274,118.79212286719661,223.3365417102967,126.90319714824567,222.35893333333334C134.92978107220046,221.39150837696334,150.98294892011006,233.23306051728085,159.00953284406486,231.36626666666666C167.03244327423295,229.5003271839475,183.07826413456914,209.28948157595082,191.10117456473722,207.428C199.20857535199957,205.54691490928414,215.4233769265243,214.43960989052474,223.53077771378665,216.39600000000002C231.64185199483572,218.3532765571914,247.86400055693383,232.37735986038396,255.9750748379829,223.08266666666668C264.00165876193773,213.8847931937173,280.0548266098473,148.22814457230533,288.0814105338021,142.42573333333334C296.0161571130892,136.689711238972,311.8856502716635,170.46889944279064,319.8203968509506,176.92893333333336C327.92779763821295,183.529532776124,344.14259921273765,190.23343333333335,352.25,194.66826666666668" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="62.029296875" cy="240.02746666666667" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="94.45890002404943" cy="239.1464" r="4.24" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="126.90319714824567" cy="222.35893333333334" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.00953284406486" cy="231.36626666666666" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="191.10117456473722" cy="207.428" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="223.53077771378665" cy="216.39600000000002" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="255.9750748379829" cy="223.08266666666668" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="288.0814105338021" cy="142.42573333333334" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="319.8203968509506" cy="176.92893333333336" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="352.25" cy="194.66826666666668" r="4" fill="#495057" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 44.3964px; top: 140px;"><div class="morris-hover-row-label">2011 Q2</div><div class="morris-hover-point" style="color: #495057">
  Item 1:
  2,778
</div><div class="morris-hover-point" style="color: #007cff">
  Item 2:
  2,294
</div></div></div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="512" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#007bff" d="M256,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,344.2277551949771,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#007bff" stroke="#ffffff" d="M256,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,347.06364732624417,181.4248826052307L383.6151459070204,194.03833029452744A135,135,0,0,1,256,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#dc3545" d="M344.2277551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,172.28484627831412,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#dc3545" stroke="#ffffff" d="M347.06364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,169.59400205154566,107.40757544301087L130.42726941747117,88.10097469226493A140,140,0,0,1,388.3416327924656,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#28a745" d="M172.28484627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,255.97067846904883,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#28a745" stroke="#ffffff" d="M169.59400205154566,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,255.96973599126827,246.3333285794739L255.9575884998742,284.9999933380171A135,135,0,0,1,134.9120097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="256" y="140" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="15px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-weight="800" transform="matrix(1,0,0,1,0,0)"><tspan dy="140" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="256" y="160" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="14px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" transform="matrix(1,0,0,1,0,0)"><tspan dy="160" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
            <!--/.direct-chat -->

            <!-- TO DO List -->
            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <div class="card w-100">
              <div class="card-header border-transparent">
                <h3 class="card-title">آخرین نوشته ها</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" style="display: block;">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ای دی نوشته</th>
                      <th>نوشته</th>
                      <!-- <th>وضعیت</th> -->
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($results3 as $result): ?>
                    <tr>
                      <td><a href="#"><?php  echo $result['id']; ?></a></td>
                      <td><?php  echo $result['title']; ?></td>
                      <!-- <td><span class="badge badge-success">ارسال شده</span></td> -->
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                      </td>
                    </tr>
                    <?php endforeach; ?>
            
               
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix" style="display: block;">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">سفارش جدید</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">مشاهده همه سفار</a>
              </div>
              <!-- /.card-footer -->
            </div>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</body>
</html>
