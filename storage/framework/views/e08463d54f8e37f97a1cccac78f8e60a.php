<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php if(session('preloader')): ?>  
   <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo e(asset('images')); ?>/logo-school.png" alt="SchoolLogo" height="120" width="290">
   </div>
   <?php endif; ?>
   
  <?php echo $__env->make('layouts.admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
   <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
   </symbol>
</svg>



  

      <?php echo $__env->make('layouts.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
           <div class="container-fluid">
             <div class="row mb-2">
               <div class="col-sm-6">
                 <h1 class="m-0"><?php echo e(session('page') && session('page')->child? ucwords(str_replace("-", " ", session('page')->child)) : ''); ?></h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                   <li class="breadcrumb-item active"><?php echo e(session('page') && session('page')->child? ucwords(session('page')->child) : ''); ?></li>
                 </ol>
               </div><!-- /.col -->
             </div><!-- /.row -->
           </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->
         
         <!-- Main content -->
         <section class="content ">
            <?php echo $__env->yieldContent('content'); ?>
         </section>
      </div>
      
      <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <!-- /.content -->
   </div>
      <!-- /.content-wrapper -->
</body>
</html>



<?php /**PATH C:\xampp\htdocs\siamik-portal-gcs\resources\views/layouts/admin/master.blade.php ENDPATH**/ ?>