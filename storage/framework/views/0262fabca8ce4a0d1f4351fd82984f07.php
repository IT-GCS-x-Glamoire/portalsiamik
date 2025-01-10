<?php $__env->startSection('content'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
    <div class="row breadcrumb-container">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-white rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Scorings</li>
                </ol>
            </nav>
        </div>
    </div>

    <form class="row align-items-center" action="<?php echo e(route('student.dashboard.exam')); ?>" method="GET">
        <div class="col-md-3 align-items-center">
            <div class="form-group">
                <label for="subject-select">Sort By :</label>
                
                <select name="order" class="custom-select form-control-border" id="subject-select" onchange="this.form.submit()">
                    <?php
                        $selectedOrder = $form->sort;
                    ?>
                    <option value="all" <?php echo e($selectedOrder === 'all' ? 'selected' : ''); ?>>All Subject</option>
                    <?php $__currentLoopData = $subjects->subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($subject['id']); ?>" <?php echo e($selectedOrder == $subject['id'] ? 'selected' : ''); ?>>
                            <?php echo e(ucwords($subject['name_subject'])); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </form>
    
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Assessments</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width:5%;">#</th>
                            <th style="width:10%;">Type</th>
                            <th style="width:20%;">Name</th>
                            <th style="width:10%;">Date</th>
                            <th style="width:15%;">Subject</th>
                            <th style="width:5%;">Score</th>
                            <th style="width:10%;">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($data) !== 0): ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id=<?php echo e('index_grade_' . $el->id); ?>>
                                <td><?php echo e($loop->index + 1); ?></td>
                                <td><a><?php echo e($el->type_exam); ?></a></td>
                                <td><a><?php echo e($el->name_exam); ?></a></td>
                                <td>
                                    <a><?php echo e($el->date_exam); ?></a>
                                    <br>
                                    <?php
                                        $currentDate = now();
                                        $dateExam = $el->date_exam;
                                        $currentDateTime = new DateTime($currentDate);
                                        $dateExamDateTime = new DateTime($dateExam);
                                        $interval = $currentDateTime->diff($dateExamDateTime);
                                        $days = $interval->days;
                                        if ($dateExamDateTime < $currentDateTime) {
                                            $days = -$days;
                                        } else if ($dateExamDateTime > $currentDateTime && $days == 0) {
                                            $days = 1;
                                        }
                                    ?>
                                    <?php if($el->is_active): ?>
                                        <span class="badge badge-danger"><?php echo e($days); ?> days again</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($el->subject_name); ?></td>
                                <td><?php echo e($el->score); ?></td>
                                <td>
                                    <?php if($el->is_active): ?>
                                        <span class="badge badge-danger">On Progress</span>
                                    <?php else: ?>
                                        <span class="badge badge-success"> Done </span>
                                    <?php endif; ?>
                                </td>
                                <td class="project-actions text-left">
                                    <a class="btn btn-primary btn" id="view" data-id="<?php echo e($el->id); ?>">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="9" class="text-center text-red">No Exam</td>    
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- /.card-body -->
    </div>
</div>



<div class="d-flex justify-content-end my-5">
    <nav aria-label="...">
        <ul class="pagination" max-size="2">
            
            <?php
            $role = session('role');
            $link = "/{$role}/dashboard/exam?";
            $previousLink = $link . '&page=' . ($data->currentPage() - 1);
            $nextLink = $link . '&page=' . ($data->currentPage() + 1);
            $firstLink = $link . '&page=1';
            $lastLink = $link . '&page=' . $data->lastPage();
            
            $arrPagination = [];
            $flag = false;
            
            if ($data->lastPage() - 5 > 0) {
                if ($data->currentPage() <= 4) {
                    for ($i = 1; $i <= 5; $i++) {
                        $temp = (object) [
                            'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];
                        array_push($arrPagination, $temp);
                    }
                } else if ($data->lastPage() - $data->currentPage() > 2) {
                    $flag = true;
                    $idx = [$data->currentPage() - 2, $data->currentPage() - 1, $data->currentPage(), $data->currentPage() + 1, $data->currentPage() + 2];
                    foreach ($idx as $value) {
                        $temp = (object) [
                            'page' => $value,
                            'link' => $link . '&page=' . $value,
                        ];
                        array_push($arrPagination, $temp);
                    }
                } else {
                    $arrFirst = [];
                    for ($i = $data->currentPage(); $i <= $data->lastPage(); $i++) {
                        $temp = (object) [
                            'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];
                        array_push($arrFirst, $temp);
                    }
                    
                    $arrLast = [];
                    $diff = $data->currentPage() - (5 - sizeof($arrFirst));
                    for ($i = $diff; $i < $data->currentPage(); $i++) {
                        $temp = (object) [
                            'page' => $i,
                            'link' => $link . '&page=' . $i,
                        ];
                        array_push($arrLast, $temp);
                    }
                    
                    $arrPagination = array_merge($arrLast, $arrFirst);
                }
            } else {
                for ($i = 1; $i <= $data->lastPage(); $i++) {
                    $temp = (object) [
                        'page' => $i,
                        'link' => $link . '&page=' . $i,
                    ];
                    array_push($arrPagination, $temp);
                }
            }
            ?>

            <li class="mr-1 page-item <?php echo e($data->previousPageUrl() ? '' : 'disabled'); ?>">
                <a class="page-link" href="<?php echo e($firstLink); ?>" tabindex="+1">
                    First
                </a>
            </li>

            <li class="page-item <?php echo e($data->previousPageUrl() ? '' : 'disabled'); ?>">
                <a class="page-link" href="<?php echo e($previousLink); ?>" tabindex="-1">
                    Previous
                </a>
            </li>

            <?php $__currentLoopData = $arrPagination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="page-item <?php echo e($el->page === $data->currentPage() ? 'active' : ''); ?>">
                <a class="page-link" href="<?php echo e($el->link); ?>">
                    <?php echo e($el->page); ?>

                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <li class="page-item <?php echo e($data->nextPageUrl() ? '' : 'disabled'); ?>">
                <a class="page-link" href="<?php echo e($nextLink); ?>" tabindex="+1">
                    Next
                </a>
            </li>

            <li class="ml-1 page-item <?php echo e($data->nextPageUrl() ? '' : 'disabled'); ?>">
                <a class="page-link" href="<?php echo e($lastLink); ?>" tabindex="+1">
                    Last
                </a>
            </li>

        </ul>   
    </nav>
</div>

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

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\siamik-portal-gcs\resources\views/components/student/data-exam-student.blade.php ENDPATH**/ ?>