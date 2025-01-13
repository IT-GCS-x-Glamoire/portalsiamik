<?php $__env->startSection('content'); ?>

<section class="content">
  <div class="container-fluid">
    
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?php echo e($data['totalAbsent']); ?></h3>
            <p>Total Absent Student</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-chalkboard-user"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?php echo e($data['totalLate']); ?></h3>
            <p>Total Late Student</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-chalkboard-user"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
        </div>
      </div>
      <!-- ./col -->

      <!-- EXAM ACTIVE -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?php echo e($data['totalExam']); ?></h3>

            <p>Total Assessment</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-pencil"></i>
          </div>
          
          <a href="/parent/dashboard/assessment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="row">
      
      <div class="col-md-3">
        <div class="card card-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-info">
            <h3 class="widget-user-username text-lg"><?php echo e(session('name_user')); ?></h3>
            <h5 class="widget-user-desc"><?php echo e(ucwords($data['parent']->relation)); ?></h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle elevation-1" src="<?php echo e(asset('images/admin.png')); ?>" alt="User Avatar">
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-12">
                <div class="description-block ">
                  <h5 class="description-header">Children</h5>
                  <?php $__currentLoopData = $data['totalRelation']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dtr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <span class=""><?php echo e(ucwords(strtolower($dtr->student_name))); ?> (<?php echo e($dtr->grade_name); ?> - <?php echo e($dtr->grade_class); ?>)</span><br>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card bg-info">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fa-solid fa-person mr-1"></i>
              Detail Relationship
            </h3>
          </div>
  
          <div class="pt-3 px-4 px-md-3">
            <select required name="studentId" class="form-control" id="studentId" onchange="saveStudentId()">
              <option value="">-- Your Relation -- </option>
              <?php $__currentLoopData = $data['totalRelation']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dtr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($dtr->student_id); ?>" <?php echo e(session('studentId') == $dtr->student_id ? "selected" : ""); ?>> <?php echo e(ucwords(strtolower($dtr->student_name))); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
  
          <div class="card-body">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2 shadow-xl">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <div class="widget-user-image">
                  <?php if($data['detailStudent']->gender == "Male"): ?>
                    <img class="img-circle elevation-2" src="<?php echo e(asset('images/user_male.png')); ?>" alt="User Avatar">
                  <?php elseif($data['detailStudent']->gender == "Female"): ?>
                    <img class="img-circle elevation-2" src="<?php echo e(asset('images/user_female.png')); ?>" alt="User Avatar">
                  <?php endif; ?>
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo e(ucwords(strtolower($data['detailStudent']->student_name))); ?></h3>
                <h5 class="widget-user-desc"><?php echo e($data['detailStudent']->grade_name); ?> - <?php echo e($data['detailStudent']->grade_class); ?></h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Total Assessment <span class="float-right badge bg-primary"><?php echo e($data['totalExam']); ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Assessment Completed <span class="float-right badge bg-info"><?php echo e($data['examCompleted']); ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Assessment On Process <span class="float-right badge bg-info"><?php echo e($data['examProcess']); ?></span>
                    </a>
                  </li>
                  <?php $__currentLoopData = $data['eca']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $de): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      ECA <?php echo e($loop->index+1); ?><span class="float-right badge bg-success"><?php echo e($de->eca_name); ?></span>
                    </a>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-warning">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fa-solid fa-book"></i>
              Subjects
            </h3>
          </div>
          
          <div class="card-body" style="position: relative; max-height: 405px; overflow-y: auto;">
            <table class="table table-borderless">      
                <?php if(sizeof($data['dataStudent']->subject) != 0): ?>
                  <thead>
                    <tr>
                      <th style="width: 10%;">#</th>
                      <th>Name</th>
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
                  <p>Subject Grade is empty !!!</p>
                <?php endif; ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <section class="col-lg-12 connectedSortable">
        <div class="card bg-danger">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fa-solid fa-calendar-xmark mr-1"></i>
                List Assessments
            </h3>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart"
                    style="position: relative; max-height: 500px; overflow-y: auto;">

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
      </section>
    </div>
  </div>
</section>

<script>
  function saveStudentId() {
    var studentIdSelect = document.getElementById('studentId');
    var selectedStudentId = studentIdSelect.value;
    
    // Simpan nilai semester ke dalam session
    $.ajax({
        url: '<?php echo e(route('save.student.session')); ?>',
        type: 'POST',
        data: {
          studentId: selectedStudentId,
          _token: '<?php echo e(csrf_token()); ?>'
        },
        success: function(response) {
          console.log('Student ID saved to session:', response.studentId);
          window.location.href = '/parent/dashboard/';
        },
        error: function(xhr, status, error) {
          console.error('Error saving semester to session:', error);
        }
    });
  }

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
                          window.location.href = '/' + sessionRole + '/dashboard/assessment/detail';
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

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portalsiamik\resources\views/components/dashboard-parent.blade.php ENDPATH**/ ?>