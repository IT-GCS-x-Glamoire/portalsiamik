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

<?php if(sizeof($data['classTeacher']) != 0): ?>
   <div class="container-fluid">
      <!-- START TABEL -->
      
            <div class="card card-dark mt-2">
                  <div class="card-header">
                     <h3 class="card-title">Your Class Teacher</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                        </button>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <table class="table table-striped dgtojects">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th style="width:15%;">Name</th>
                              <th style="width:85%;">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $data['classTeacher']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dgt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr id="<?php echo e('index_grade_' . $dgt->id); ?>">
                                 <td>
                                    <?php echo e($loop->index + 1); ?>

                                 </td>
                                 <td>
                                    <?php echo e($dgt->name); ?> - <?php echo e($dgt->class); ?>

                                 </td>
                                 <td>
                                    <div class="grid md:flex flex-wrap gap-2">
                                       <?php if(strtolower($dgt->name) === "toddler"): ?>
                                          <a class="btn btn-secondary btn-sm" href="<?php echo e(url('teacher/dashboard/report/mid/cardToddler') . '/' . $dgt->id); ?>">
                                             Mid Report Card
                                          </a>
                                          <a class="btn btn-primary btn-sm" href="<?php echo e(url('teacher/dashboard/report/cardToddler') . '/' . $dgt->id); ?>">
                                             Report Card
                                          </a>
                                       <?php elseif(strtolower($dgt->name) === "nursery"): ?>
                                          <a class="btn btn-secondary btn-sm" href="<?php echo e(url('teacher/dashboard/report/mid/cardNursery') . '/' . $dgt->id); ?>">
                                             Mid Report Card
                                          </a>
                                          <a class="btn btn-primary btn-sm" href="<?php echo e(url('teacher/dashboard/report/cardNursery') . '/' . $dgt->id); ?>">
                                             Report Card
                                          </a>
                                       <?php elseif(strtolower($dgt->name) === "kindergarten"): ?>
                                          <a class="btn btn-secondary btn-sm" href="<?php echo e(url('teacher/dashboard/report/mid/cardKindergarten') . '/' . $dgt->id); ?>">
                                             Mid Report Card
                                          </a>
                                          <a class="btn btn-primary btn-sm" href="<?php echo e(url('teacher/dashboard/report/cardKindergarten') . '/' . $dgt->id); ?>">
                                             Report Card
                                          </a>
                                       <?php elseif(strtolower($dgt->name) === "primary"): ?>
                                          <a class="btn btn-success btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/acar/detail/' . $dgt->id); ?>">
                                             ACAR
                                          </a>
                                          <a class="btn btn-warning btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/sooa/detail/' . $dgt->id); ?>">
                                             SOOA
                                          </a>
                                          <a class="btn btn-warning btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/tcop/detail/' . $dgt->id); ?>">
                                             TCOP
                                          </a>
                                          <?php if(session('semester') == 1): ?>
                                             <a class="btn btn-secondary btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/midcard/semestersatu/' . $dgt->id); ?>">
                                                Mid Report Card
                                             </a>
                                             <a class="btn btn-primary btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/card/semestersatu/' . $dgt->id); ?>">
                                                Report Card
                                             </a>
                                          <?php elseif(session('semester') == 2): ?>
                                             <a class="btn btn-secondary btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/midcard/semestersatu/' . $dgt->id); ?>">
                                                Mid Report Card
                                             </a>   
                                             <a class="btn btn-primary btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/card/semesterdua/' . $dgt->id); ?>">
                                                Report Card
                                             </a>   
                                          <?php endif; ?>
                                       <?php elseif(strtolower($dgt->name) === "secondary"): ?>
                                          <a class="btn btn-success btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/acar/detailSec/' . $dgt->id); ?>">
                                             ACAR
                                          </a>
                                          <a class="btn btn-warning btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/sooa/detailSec/' . $dgt->id); ?>">
                                             SOOA
                                          </a>
                                          <a class="btn btn-warning btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/tcop/detailSec/' . $dgt->id); ?>">
                                             TCOP
                                          </a>
                                          <?php if(session('semester') == 1): ?>
                                             <a class="btn btn-secondary btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/midcard/semestersatu/' . $dgt->id); ?>">
                                                Mid Report Card
                                             </a>
                                             <a class="btn btn-primary btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/cardSec/semestersatu/' . $dgt->id); ?>">
                                                Report Card
                                             </a>
                                          <?php endif; ?>
                                          <?php if(session('semester') == 2): ?>
                                             <a class="btn btn-secondary btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/midcard/semestersatu/' . $dgt->id); ?>">
                                                Mid Report Card
                                             </a>
                                             <a class="btn btn-primary btn-sm" href="<?php echo e(url('teacher/dashboard/report') . '/cardSec/semesterdua/' . $dgt->id); ?>">
                                                Report Card
                                             </a>                              
                                          <?php endif; ?>
                                       <?php endif; ?>
                                    </div>
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
<!-- END TABEL -->

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

<script>
   <?php if(session('swal')): ?>
      Swal.fire({
            icon: '<?php echo e(session('swal.type')); ?>', // 'success', 'error', 'warning', 'info', 'question'
            title: '<?php echo e(session('swal.title')); ?>',
            text: '<?php echo e(session('swal.text')); ?>'
      });
   <?php endif; ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portalsiamik\resources\views/components/teacher/data-report-teacher.blade.php ENDPATH**/ ?>