<?php include 'header.php'; ?>

	<!-- <form action="<?php echo BASE_URL.'home/posts'; ?>" method="post">
            <?php \Traits\Session_helpers::csrf(); ?>
            <input name="title">
            <textarea name="content" id="editor1" rows="10" cols="80">
            </textarea>
            <input type="submit">
        </form> -->
<div class="content-wrapper" style="min-height: 543px;">
    <!-- Content Header (Page header) -->
  
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>صورتحساب</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">صورتحساب</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">
                CKEditor۵
                <small>پیشرفته به همراه همه امکانات</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form role="form" action="<?php echo BASE_URL.'home/posts'; ?>" method="post">
                <?php \Traits\Session_helpers::csrf(); ?>
                <!-- text input -->
                  <div class="form-group">
                    <label>عنوان نوشته</label>
                    <input type="text" name="title" class="form-control" placeholder="">
                  </div>
                       <div class="mb-3">
                <textarea id="editor1" name="content" style="width: 100%; display: none;">لطفا متن مورد نظر خودتان را وارد کنید</textarea><div class="ck ck-reset ck-editor ck-rounded-corners" role="application" dir="ltr" lang="en" aria-labelledby="ck-editor__aria-label_e818482a2752d16ef1b6e69d7039af368"><label class="ck ck-label ck-voice-label" id="ck-editor__aria-label_e818482a2752d16ef1b6e69d7039af368">Rich Text Editor</label><div class="ck ck-editor__top ck-reset_all" role="presentation"><div class="ck ck-sticky-panel"><div class="ck ck-sticky-panel__placeholder" style="display: none;"></div><div class="ck ck-sticky-panel__content"></div></div></div><div class="ck ck-editor__main" role="presentation"><div class="ck ck-content ck-editor__editable ck-rounded-corners ck-blurred ck-editor__editable_inline" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main"></div></div></div>
              </div>
              <div class="form-group">
                   
                    <input type="submit" class="btn-primary button btn" style="width: 80px;">
                  </div>
              <p class="text-sm mb-0">مشاهده مستندات مربوط به این ویرایشگر متن <a href="https://ckeditor.com/ckeditor-5-builds/#classic">CKEditor</a>
              </p>

                </form>
        
            </div>
          </div>


       
            
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
  </div>
  <script src="<?php echo PUB_URL?>plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo PUB_URL?>plugins/ckeditor/ckeditor.js"></script>
  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#editor1'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

      $('.textarea').wysihtml5({
          toolbar: { fa: true }
      })
  })
</script>
    </body>
</html>

    </body>
</html>