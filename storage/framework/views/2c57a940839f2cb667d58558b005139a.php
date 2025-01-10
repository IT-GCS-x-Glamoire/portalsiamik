<?php $__env->startSection('content'); ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- STUDENT ACTIVE -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo e($data['totalStudent']); ?></h3>

              <p>Total Students Active</p>
            </div>
            <div class="icon">
              
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            <div class="small-box-footer" style="padding: 0.93rem"></div>
          </div>
        </div>
        <!-- ./col -->

        <!-- GRADE ACTIVE -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo e($data['totalAbsent']); ?>

              
            </h3>

              <p>Total Absent Student</p>
            </div>
            <div class="icon">
              
              <i class="fa-solid fa-chalkboard-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            <div class="small-box-footer" style="padding: 0.93rem"></div>
          </div>
        </div>
        <!-- ./col -->

        <!-- SUBJECT ACTIVE -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo e($data['totalSubject']); ?>

              
              </h3>

              <p>Total Subject Active</p>
            </div>
            <div class="icon">
              
              <i class="fa-solid fa-receipt"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            <div class="small-box-footer" style="padding:0.93rem;"></div>
          </div>
        </div>
        <!-- ./col -->

        <!-- EXAM ACTIVE -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo e($data['totalExam']); ?></h3>

              <p>Total Exams</p>
            </div>
            <div class="icon">
              
              <i class="fa-solid fa-calendar-xmark"></i>
            </div>
            
            <a href="/student/dashboard/exam/<?php echo e(session('id_user')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            <div class="small-box-footer" style="padding:0.93rem;"></div>
            
          </div>
        </div>
        <!-- ./col -->
      </div>

    
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          
        <!-- Custom tabs (Charts with tabs) List Exam-->
        <div class="card bg-danger">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fa-solid fa-calendar-xmark mr-1"></i>
                List Exams
            </h3>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart"
                    style="position: relative; height: 500px; overflow-y: auto;">

                    <?php if(sizeof($data['dataStudent']->exam) == 0): ?>
                    <div class="d-flex justify-content-center">
                      <h2>This grade don't have any exam!!!</h2>
                    </div>
                    <?php else: ?>
  
                    
                    <div>
                      <!-- /.card-header -->
                      <div>
                        <ul class="todo-list bg-danger" data-widget="todo-list">
  
                          <?php
                            $currentDate = date('y-m-d');
                          ?> 
  
                          <?php $__currentLoopData = $data['exam']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li id="view" data-id="<?php echo e($el->id); ?>" class="hover:cursor-pointer">
                              <span class="handle">
                                  <i class="fas fa-ellipsis-v"></i>
                                  <i class="fas fa-ellipsis-v"></i>
                              </span>
                              <!-- checkbox -->
                              <div class="icheck-primary d-inline ml-2">
                                  <span class="text-muted">[<?php echo e(date('d F Y', strtotime($el->date_exam))); ?>]</span>
                              </div>
                              <!-- todo text -->
                              <span class="text text-sm">( <?php echo e($el->type_exam_name); ?> ) (<?php echo e($el->subject); ?>) <?php echo e($el->name_exam); ?> </span>
                              
                              <span>
                                <?php if($el->is_active): ?>
                                  <?php
                                  $currentDate = now(); // Tanggal saat ini
                                  $dateExam = $el->date_exam; // Tanggal ujian dari data

                                  // Buat objek DateTime dari tanggal saat ini dan tanggal ujian
                                  $currentDateTime = new DateTime($currentDate);
                                  $dateExamDateTime = new DateTime($dateExam);

                                  // Hitung selisih antara kedua tanggal
                                  $interval = $currentDateTime->diff($dateExamDateTime);

                                  // Ambil jumlah hari dari selisih tersebut
                                  $days = $interval->days;

                                  // Jika tanggal ujian lebih kecil dari tanggal saat ini, buat selisih menjadi negatif
                                  if ($dateExamDateTime < $currentDateTime) {
                                    $days = -$days;
                                  } else if ($dateExamDateTime > $currentDateTime && $days == 0) {
                                    // Jika tanggal ujian di masa depan dan selisih kurang dari 1 hari, anggap 1 hari
                                    $days = 1;
                                  }
                                  ?>
                                  
                                  <span class="badge badge-warning"><?php echo e($days); ?> days again</span>
                                <?php else: ?>
                                  <span class="badge badge-success">Done</span>
                                <?php endif; ?>
                              </span>

                              <div class="tools">
                                <i class="fas fa-search hover:cursor-pointer"></i>
                              </div>
                            </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </div>
                    </div>
  
                    <?php endif; ?>
                

                </div>
            </div>
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- Map card -->
        <div class=" card bg-info">
          <div class="card-header border-0">
            <h3 class="card-title">
              <i class="fa-solid fa-graduation-cap mr-1"></i>
              Student's
            </h3>
            <!-- card tools -->
            <div class="card-tools">
              <button type="button" class="btn btn-info btn-sm" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <div class="card-body" style="position: relative; height: 500px; overflow-y: auto;">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Grade</th>
                </tr>
              </thead>
              <tbody>

              <?php $__currentLoopData = $data['dataStudent']->student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td scope="row"><?php echo e($loop->index+1); ?></td>
                  <td><?php echo e($el->name); ?></td>
                  <td><?php echo e($el->gender); ?></td>
                  <td><?php echo e($data['dataStudent']->name); ?> - <?php echo e($data['dataStudent']->class); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                
              </tbody>
            </table>
          </div>
          <div class="card-footer bg-transparent">
            <div class="d-none row">
              <div class="col-4 text-center">
                <div id="sparkline-1"></div>
                <div class="text-white">Visitors</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-2"></div>
                <div class="text-white">Online</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-3"></div>
                <div class="text-white">Sales</div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.card -->
      
        </section>
        <!-- /.Left col -->

        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">        
        <!-- Subject List -->
        <div class="card bg-warning">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fa-solid fa-receipt mr-1"></i>
              Subject's
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="position: relative; height: 500px; overflow-y: auto;">
            <table class="table table-borderless">      
            <?php if(sizeof($data['dataStudent']->subject) != 0): ?>
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                </tr>
              </thead>
              <tbody>
              <?php $__currentLoopData = $data['dataStudent']->subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td scope="row"><?php echo e($loop->index+1); ?></td>
                  <td><?php echo e($el->name_subject); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            <?php else: ?>
              <p>Teacher dont have data subject !!!</p>
            <?php endif; ?>
                
              </tbody>
            </table>
          </div>
        </div>

        <!-- Grade List -->
        <div class=" card bg-success">
          <div class="card-header border-0">
            <h3 class="card-title">
              <i class="fa-solid fa-chalkboard-user mr-1"></i>
              Grade's
            </h3>
            <!-- card tools -->
            <div class="card-tools">
              <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <div class="card-body">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Class</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row"><?php echo e(1); ?></td>
                  <td><?php echo e($data['dataStudent']->name); ?></td>
                  <td><?php echo e($data['dataStudent']->class); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <div class="d-none row">
              <div class="col-4 text-center">
                <div id="sparkline-1"></div>
                <div class="text-white">Visitors</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-2"></div>
                <div class="text-white">Online</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-3"></div>
                <div class="text-white">Sales</div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
    </div>
</section>
<!-- /.content-wrapper -->

<script>
   document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('#view').forEach(function(button) {
         button.addEventListener('click', function() {
               var assessmentId = this.getAttribute('data-id');
               var sessionRole = <?php echo json_encode(session('role'), 15, 512) ?>;
               var url;
                if (sessionRole === "parent") {
                    url = "<?php echo e(route('set.assessment.id')); ?>";
                } else if (sessionRole === "student") {
                    url = "<?php echo e(route('set.assessment.id.student')); ?>";
                }
               
               $.ajax({
                  url: url,
                  method: 'POST',
                  data: {
                     id: assessmentId,
                     _token: '<?php echo e(csrf_token()); ?>'
                  },
                  success: function(response) {
                     if (response.success) {
                           window.location.href = '/' + sessionRole + '/dashboard/exam/detail';
                     } else {
                           alert('Failed to set exam ID in session.');
                     }
                  },
                  error: function(xhr, status, error) {
                     alert('Error: ' + error);
                  }
               });
         });
      });
   });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\siamik-portal-gcs\resources\views/components/dashboard-student.blade.php ENDPATH**/ ?>