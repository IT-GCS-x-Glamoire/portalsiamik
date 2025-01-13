<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">Home</li>
            <?php if(session('role') == 'superadmin'): ?>
              <li class="breadcrumb-item"><a href="<?php echo e(url('/superadmin/reports')); ?>">Reports</a></li>
            <?php elseif(session('role') == 'admin'): ?>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/reports')); ?>">Reports</a></li>
            <?php elseif(session('role') == 'teacher'): ?>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/teacher/dashboard/report/class/teacher')); ?>">Reports </a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active" aria-current="page">Detail Acar</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-bold">Summary of Academic Assessment</p>
            <table>
                <tr>
                    <td>Class</td>
                    <td> : <?php echo e($data['grade']->grade_name); ?> - <?php echo e($data['grade']->grade_class); ?></td>
                </tr>
                <tr>
                    <td>Class Teacher</td>
                    <td> : <?php echo e($data['classTeacher']->teacher_name); ?></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td> : <?php echo e(\Carbon\Carbon::now()->translatedFormat('l, d F Y')); ?></td>
                </tr>
            </table>
            
        </div>
    </div>

    <div style="overflow-x: auto;">
        <table class="table table-striped table-bordered bg-white" style=" width: 2000px;">
            <thead>
                <tr>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Academic</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA 1</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA 2</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Self-Development</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">ECA Average</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Behavior</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Attendance</th>
                    <th colspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Participation</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Total</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Grades</th>
                    <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Rank</th>
                </tr>

                <tr>
                    <!-- Major Subjects -->
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <!-- END MAJOR SUBJECTS -->
                    
                    <!-- MINOR SUBJECTS -->
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <!-- END MINOR SUBJECTS -->
                    
                    <!-- SUPPLEMENTARY SUBJECTS -->
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <!-- END SUPPLEMENTARY SUBJECTS -->
                </tr>
            </thead>

            <tbody>
            <?php if(!empty($data['students'])): ?>
                <?php $__currentLoopData = $data['students']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($student['student_name']); ?></td>

                    <?php if($data['status'] == null): ?>
                        <?php $__currentLoopData = $student['scores']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <!-- ACADEMIC -->
                            <td class="text-center"><?php echo e($score['academic']); ?></td>
                            <td class="text-center"><?php echo e($score['grades_academic']); ?></td>

                            <!-- Choice -->
                            <td class="text-center">   
                                <input name="choice[]" min="0" max="100" type="number" class="form-control required-input " id="choice" value="<?php echo e($score['choice'] ? : ''); ?>" autocomplete="off" required>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_choice']); ?></td>

                            <!-- Language & Art -->
                            <td class="text-center">
                                    <input name="language_and_art[]" min="0" max="100" type="number" class="form-control required-input " id="language_and_art" value="<?php echo e($score['language_and_art'] ? : ''); ?>" autocomplete="off" required>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_language_and_art'] ?? ''); ?></td>

                            <!-- Self-Development -->
                            <td class="text-center">
                                <input name="self_development[]" min="0" max="100" type="number" class="form-control required-input " id="self_development" value="<?php echo e($score['self_development'] ?: ''); ?>" autocomplete="off" required>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_self_development'] ?? ''); ?></td>

                            <!-- ECA Aver -->
                            <td class="text-center">
                                <?php echo e($score['eca_aver']); ?>

                            </td>
                            <td class="text-center"><?php echo e($score['grades_eca_aver'] ?? ''); ?></td>

                            <!-- Behavior -->
                            <td class="text-center">
                                <input name="behavior[]" min="0" max="100" type="number" class="form-control required-input " id="behavior" value="<?php echo e($score['behavior'] ?: ''); ?>" autocomplete="off" required>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_behavior'] ?? ''); ?></td>

                            <!-- Attendance -->
                            <td class="text-center"><?php echo e($score['attendance']); ?></td>
                            <td class="text-center"><?php echo e($score['grades_attendance']); ?></td>

                            <!-- Participation -->
                            <td class="text-center">
                                <input name="participation[]"  min="0" max="100" type="number" class="form-control required-input " id="participation"value="<?php echo e($score['participation'] ?: ''); ?>" autocomplete="off" required></td>
                            <td class="text-center"><?php echo e($score['grades_participation']); ?></td>

                            <input name="student_id[]" type="number" class="form-control required-input  d-none" id="student_id" value="<?php echo e($student['student_id']); ?>">
                                            
                            <td class="text-center"><?php echo e($score['final_score']); ?></td>
                            <td class="text-center"><?php echo e($score['grades_final_score']); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php elseif($data['status']->status != null && $data['status']->status == 1): ?> 
                    <?php $__currentLoopData = $student['scores']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <!-- ACADEMIC -->
                            <td class="text-center"><?php echo e($score['academic']); ?></td>
                            <td class="text-center"><?php echo e($score['grades_academic']); ?></td>

                            <!-- Choice -->
                            <td class="text-center">
                                <?php if(isset($score['choice'])): ?>
                                    <?php echo e($score['choice']); ?>

                                <?php else: ?>
                                    <input name="choice[]" min="0" max="100" type="number" class="form-control required-input " id="choice" value="<?php echo e($score['choice'] ? : ''); ?>" autocomplete="off" required>
                                <?php endif; ?>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_choice']); ?></td>

                            <!-- Language & Art -->
                            <td class="text-center">
                                <?php if(isset($score['language_and_art'])): ?>
                                    <?php echo e($score['language_and_art']); ?>

                                <?php else: ?>
                                    <input name="language_and_art[]" min="0" max="100" type="number" class="form-control required-input " id="language_and_art" value="<?php echo e($score['language_and_art'] ? : ''); ?>" autocomplete="off" required>
                                <?php endif; ?>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_language_and_art'] ?? ''); ?></td>

                            <!-- Self-Development -->
                            <td class="text-center">
                                <?php if(isset($score['self_development'])): ?>
                                    <?php echo e($score['self_development']); ?>

                                <?php else: ?>
                                    <input name="self_development[]" min="0" max="100" type="number" class="form-control required-input " id="self_development" value="<?php echo e($score['self_development'] ?: ''); ?>" autocomplete="off" required>
                                <?php endif; ?>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_self_development'] ?? ''); ?></td>

                            <!-- ECA Aver -->
                            <td class="text-center">
                                <?php if(isset($score['eca_aver'])): ?>
                                    <?php echo e($score['eca_aver']); ?>

                                <?php else: ?>
                                    <?php echo e($score['eca_aver']); ?>    
                                <?php endif; ?>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_eca_aver'] ?? ''); ?></td>

                            <!-- Behavior -->
                            <td class="text-center">
                                <?php if(isset($score['behavior'])): ?>
                                    <?php echo e($score['behavior']); ?>

                                <?php else: ?>
                                    <input name="behavior[]" min="0" max="100" type="number" class="form-control required-input " id="behavior" value="<?php echo e($score['behavior'] ?: ''); ?>" autocomplete="off" required>
                                <?php endif; ?>
                            </td>
                            <td class="text-center"><?php echo e($score['grades_behavior'] ?? ''); ?></td>

                            <!-- Attendance -->
                            <td class="text-center"><?php echo e($score['attendance']); ?></td>
                            <td class="text-center"><?php echo e($score['grades_attendance']); ?></td>

                            <!-- Participation -->
                            <td class="text-center">
                                <?php if(isset($score['participation'])): ?>
                                    <?php echo e($score['participation']); ?>

                                <?php else: ?>
                                    <input name="participation[]"  min="0" max="100" type="number" class="form-control required-input " id="participation"value="<?php echo e($score['participation'] ?: ''); ?>" autocomplete="off" required></td>
                                <?php endif; ?>
                            <td class="text-center"><?php echo e($score['grades_participation']); ?></td>

                            <input name="student_id[]" type="number" class="form-control required-input  d-none" id="student_id" value="<?php echo e($student['student_id']); ?>">
                                            
                            <td class="text-center"><?php echo e($score['final_score']); ?></td>
                            <td class="text-center"><?php echo e($score['grades_final_score']); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    <?php endif; ?>
                    
                    <td class="text-center"><?php echo e($student['ranking']); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            <?php else: ?>
                <tr>
                    <td colspan="33" class="text-center text-danger">
                        Teacher doesnt submit academic assessment report      
                    </td>    
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portalsiamik\resources\views/components/report/sooa_primary.blade.php ENDPATH**/ ?>