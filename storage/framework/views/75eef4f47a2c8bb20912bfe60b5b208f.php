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
<?php if(sizeof($data['gradeTeacher']) != 0): ?>
   <div class="container-fluid">
   <!-- <div class="form-group row">
      <div class="col-md-2">
         <select required name="semester" class="form-control" id="semester" onchange="saveSemesterToSession()">
            <option value="">-- Semester -- </option>
            <option value="1" <?php echo e(session('semester') == '1' ? "selected" : ""); ?>>Semester 1</option>
            <option value="2" <?php echo e(session('semester') == '2' ? "selected" : ""); ?>>Semester 2</option>
         </select>
      </div>
   </div> -->

   <!-- START TABEL -->
         <div class="card card-dark mt-2">
               <div class="card-header"> 
                  <h3 class="card-title">Your Class</h3>
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
                              <th style="width: 5%">No </th>
                              <th style="width: 10%">Class</th>
                              <th style="width: 85%">Action</th>
                           </tr>
                     </thead>
                     <tbody>
                        <?php $__currentLoopData = $data['gradeTeacher']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr id="<?php echo e('index_grade_' . $el->id); ?>">
                                    <td>
                                       <?php echo e($loop->index + 1); ?>

                                    </td>
                                    <td>
                                       <a>
                                          <?php echo e($el->name); ?> - <?php echo e($el->class); ?>

                                       </a>
                                    </td>
                                    <td>
                                       <a class="btn btn-primary btn-sm"
                                          href="<?php echo e(url('/' . session('role') . '/dashboard/attendance/all') . '/' . session('id_user') . '/' . $el->id); ?>">
                                          <i class="fas fa-paper-plane">
                                          </i>
                                          Attend
                                       </a>
                                       <a class="btn btn-secondary btn-sm"
                                          href="<?php echo e(route('attendance.detail.teacher', ['id' => session('id_user'), 'gradeId' => $el->id])); ?>">
                                          <i class="fas fa-eye">
                                          </i>
                                          View
                                       </a>
                                       <!-- <a class="btn btn-warning btn-sm"
                                          href="<?php echo e(url('/' . session('role') . '/dashboard/attendance/edit') . '/' . session('id_user') . '/' . $el->id); ?>">
                                          <i class="fas fa-pencil">
                                          </i>
                                          Edit
                                       </a> -->
                                    </td>
                              </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
               </div>
         </div>
      <!-- END TABLE -->
   </div>
<?php else: ?>
   <div class="container-fluid full-height">
      <div class="icon-wrapper">
         <i class="fa-regular fa-face-laugh-wink"></i>  
         <p>Oops.. <br> This page can only be accessed by class teachers</p>
      </div>
   </div>
<?php endif; ?>

<link rel="stylesheet" href="<?php echo e(asset('template')); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<script src="<?php echo e(asset('template')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
   function saveSemesterToSession() {
      var semesterSelect = document.getElementById('semester');
      var selectedSemester = semesterSelect.value;
      
      // Simpan nilai semester ke dalam session
      $.ajax({
         url: '<?php echo e(route('save.semester.session')); ?>',
         type: 'POST',
         data: {
            semester: selectedSemester,
            _token: '<?php echo e(csrf_token()); ?>'
         },
         success: function(response) {
            console.log('Semester saved to session:', response.semester);
         },
         error: function(xhr, status, error) {
            console.error('Error saving semester to session:', error);
         }
      });
   }
</script>

   <?php if(session('after_create_attendance')): ?> 

      <script>
           Swal.fire({
               icon: 'success',
               title: 'Successfully',
               text: 'Successfully upload attendance in the database.',
            });
      </script>

   <?php endif; ?>

   <?php if(session('data_is_empty')): ?> 
      <script>
         Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: 'Data Attendance is empty !!!',
         });
      </script>
   <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portalsiamik\resources\views/components/attendance/grade-attendance.blade.php ENDPATH**/ ?>