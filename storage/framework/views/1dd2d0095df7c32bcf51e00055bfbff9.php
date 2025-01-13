<?php $__env->startSection('content'); ?>

<style>
   .full-height {
      height: 60vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
   }
   .icon-wrapper i {
      font-size: 200px;
      color: #ccc;
   }
   .icon-wrapper p {
      position: absolute;
      left: 50%;
      transform: translate(-50%, 0%);
      margin: 0;
      font-size: 1.5rem;
      color: black;
      text-align: center;
   }
</style>

<!-- Content Wrapper. Contains page content -->
<!-- START TABEL -->
<?php if(sizeof($data['gradeTeacher']) != 0): ?>
   <div class="container-fluid">
      <div class="row">
         <div class="col">
               <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-2">
                  <ol class="breadcrumb mb-0">
                     <li class="breadcrumb-item">Home</li>
                     <li class="breadcrumb-item active" aria-current="page">Grades</li>
                  </ol>
               </nav>
         </div>
      </div>
      <?php $__currentLoopData = $data['gradeTeacher']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dgt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="card card-dark">
               <div class="card-header">
                  <h3 class="card-title"><?php echo e($dgt->name . ' - ' . $dgt->class); ?></h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                     </button>
                  </div>
               </div>
               <div class="card-body p-0">
                  <table class="table table-striped projects">
                     <thead>
                           <tr>
                              <th style="width: 10%">
                                 #
                              </th>
                              <th style="width: 25%">
                                 Student
                              </th>
                              <th>
                                 NISN
                              </th>
                              <th>
                                 Gender
                              </th>
                              <th>
                                 Religion
                              </th>
                              <th>
                                 Place Birth
                              </th>
                           </tr>
                     </thead>
                     <tbody>
                           <?php if(sizeof($dgt->students) != 0): ?>
                              <?php $__currentLoopData = $dgt->students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <tr id="<?php echo e('index_grade_' . $el->id); ?>">
                                       <td>
                                          <?php echo e($loop->index + 1); ?>

                                       </td>
                                       <td>
                                          <a>
                                             <?php echo e($el->name); ?>

                                          </a>
                                       </td>
                                       <td>
                                          <a>
                                             <?php echo e($el->unique_id); ?>

                                          </a>
                                       </td>
                                       <td>
                                          <?php echo e($el->gender); ?>

                                       </td>
                                       <td>
                                          <?php echo e($el->religion); ?>

                                       </td>
                                       <td>
                                          <?php echo e($el->place_birth); ?>

                                       </td>
                                 </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php else: ?>
                              <tr>
                                 <td colspan="7" class="text-center">No student in this grade!!!</td>
                              </tr>
                           <?php endif; ?>
                     </tbody>
                  </table>
               </div>
         </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <!-- END TABLE -->
   </div>
<?php else: ?>
   <div class="container-fluid full-height">
      <div class="icon-wrapper">
         <i class="fa-regular fa-face-laugh-wink"></i>
         <p> Oops... <br> This page can only be accessed by class teachers</p>
      </div>
   </div>
<?php endif; ?>

<link rel="stylesheet" href="<?php echo e(asset('template')); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<script src="<?php echo e(asset('template')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

   <?php if(session('after_create_grade')): ?> 
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Successfully',
            text: 'Successfully created new grade in the database.',
        });
      </script>
  <?php endif; ?>

  <?php if(session('after_update_grade')): ?> 
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Successfully ',
            text: 'Successfully updated the grade in the database.',
         });
    </script>
   <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portalsiamik\resources\views/components/teacher/data-grade-teacher.blade.php ENDPATH**/ ?>