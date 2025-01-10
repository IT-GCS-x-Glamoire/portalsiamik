<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">Home</li>
            <?php if(session('role') == 'superadmin'): ?>
              <li class="breadcrumb-item"><a href="<?php echo e(url('/superadmin/reports')); ?>">Report Card</a></li>
            <?php elseif(session('role') == 'admin'): ?>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/reports')); ?>">Report Card</a></li>
            <?php elseif(session('role') == 'teacher'): ?>
            <li class="breadcrumb-item"><a href="<?php echo e(url('/teacher/dashboard/report/class/teacher')); ?>">Reports </a></li>     
            <?php endif; ?>
            <li class="breadcrumb-item active" aria-current="page">Detail Report Card</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
        <div class="col">
            <p class="text-bold">Report Card Semester 2</p>
            
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
        <?php if(!empty($data['students'])): ?>
        
        <table class="table table-striped table-bordered bg-white" style=" width: 2200px;">
            <?php if($data['status'] == null): ?>
                <!-- JIKA DATA BELUM DI SUBMIT OLEH TEACHER -->
                <thead>
                    <tr>
                        <th colspan="2" style="vertical-align : middle;text-align:center;">Legend</th>
                        <th colspan="11" style="vertical-align : middle;text-align:left;">E – Excellent   G – Good   S – Satisfactory   N – Needs Improvement</th>
                    </tr>
                    <tr>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Independent work</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Initiative</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Homework Completion</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Use of Information</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Cooperation with Others</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Conflict Resolution</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Class Participation</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Problem Solving</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Goal setting to improve work</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Strengths/Weeakness/Next Steps</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Promotion Status</th>
                    </tr>
                </thead>

                <!-- JIKA TEACHER MEMINTA EDIT SETELAH SUBMIT -->
                <?php if(!empty($data['result'])): ?>
                    <tbody>
                        <?php $__currentLoopData = $data['result']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($student['student_name']); ?></td>
                                <?php $__currentLoopData = $student['scores']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                    <!-- Independent_work -->
                                    <td class="text-center">
                                        <input name="independent_work[]" type="text" class="form-control required-input" id="iw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['independent_work']); ?>" onkeyup="validateInput(this)"></td>

                                    <!-- Initiative -->
                                    <td class="text-center">
                                        <input name="initiative[]" type="text" class="form-control required-input" id="in" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['use_of_information']); ?>" onkeyup="validateInput(this)"></td>

                                    <!-- Homework_completion -->
                                    <td class="text-center">
                                    <input name="homework_completion[]" type="text" class="form-control required-input" id="hc" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['homework_completion']); ?>" onkeyup="validateInput(this)"></td>


                                    <!-- Use_of_information -->
                                    <td class="text-center">
                                    <input name="use_of_information[]" type="text" class="form-control required-input" id="uoi" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['use_of_information']); ?>" onkeyup="validateInput(this)"></td>


                                    <!-- Cooperation_with_other -->
                                    <td class="text-center">
                                    <input name="cooperation_with_other[]" type="text" class="form-control required-input" id="cwo" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['cooperation_with_other']); ?>" onkeyup="validateInput(this)"></td>


                                    <!-- Conflict_resolution -->
                                    <td class="text-center">
                                    <input name="conflict_resolution[]" type="text" class="form-control required-input" id="cr" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['conflict_resolution']); ?>" onkeyup="validateInput(this)"></td>


                                    <!-- Class_participation -->
                                    <td class="text-center">
                                    <input name="class_participation[]" type="text" class="form-control required-input" id="cp" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['class_participation']); ?>" onkeyup="validateInput(this)"></td>


                                    <!-- Problem_solving -->
                                    <td class="text-center">
                                    <input name="problem_solving[]" type="text" class="form-control required-input" id="ps" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['problem_solving']); ?>" onkeyup="validateInput(this)"></td>


                                    <!-- Goal_setting_to_improve_work -->
                                    <td class="text-center">
                                    <input name="goal_setting_to_improve_work[]" type="text" class="form-control required-input" id="gstiw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" value="<?php echo e($score['goal_setting_to_improve_work']); ?>" onkeyup="validateInput(this)"></td>


                                    <!-- Strengths/weakness/nextstep -->
                                    <td class="text-center">
                                    <input name="strength_weakness_nextstep[]" type="text" class="form-control required-input"  autocomplete="off" value="<?php echo e($score['strength_weakness_nextstep']); ?>" required></td>

                                    <td class="text-left text-xs">
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus1" name="status[]" class="form-check-input status-type" type="checkbox" value="1" id="promotion1" <?php echo e($score['promotion_status'] == 1 ? "checked" : ""); ?>>
                                            <label class="form-check-label" for="present">
                                                Progressing well towards promotion
                                            </label>
                                        </div>
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus2" name="status[]" class="form-check-input status-type" type="checkbox" value="2" id="promotion2" <?php echo e($score['promotion_status'] == 2 ? "checked" : ""); ?>>
                                            <label class="form-check-label" for="present">
                                                Progressing with some difficulty towards promotion
                                            </label>
                                        </div>
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus3" name="status[]" class="form-check-input status-type" type="checkbox" value="3" id="promotion3" <?php echo e($score['promotion_status'] == 3 ? "checked" : ""); ?>>
                                            <label class="form-check-label" for="present">
                                                No Promotion
                                            </label>
                                        </div>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <input name="student_id[]" type="number" class="form-control required-input d-none" id="student_id" value="<?php echo e($student['student_id']); ?>">
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <input name="grade_id" type="number" class="form-control required-input d-none" id="grade_id" value="<?php echo e($data['grade']->grade_id); ?>">    
                    <input name="teacher_id" type="number" class="form-control required-input d-none" id="class_teacher_id" value="<?php echo e($data['classTeacher']->teacher_id); ?>">    
                    <input name="semester" type="number" class="form-control required-input d-none" id="semester" value="<?php echo e($data['semester']); ?>"> 
                
                <!-- JIKA TEACHER BELUM INPUT NILAI -->
                <?php else: ?>
                    <tbody>
                        <?php $__currentLoopData = $data['students']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($student['name']); ?></td>
        
                                    <!-- Independent_work -->
                                    <td class="text-center">
                                        <input name="independent_work[]" type="text" class="form-control required-input" id="iw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                    <!-- Initiative -->
                                    <td class="text-center">
                                        <input name="initiative[]" type="text" class="form-control required-input" id="in" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                    <!-- Homework_completion -->
                                    <td class="text-center">
                                    <input name="homework_completion[]" type="text" class="form-control required-input" id="hc" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Use_of_information -->
                                    <td class="text-center">
                                    <input name="use_of_information[]" type="text" class="form-control required-input" id="uoi" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Cooperation_with_other -->
                                    <td class="text-center">
                                    <input name="cooperation_with_other[]" type="text" class="form-control required-input" id="cwo" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Conflict_resolution -->
                                    <td class="text-center">
                                    <input name="conflict_resolution[]" type="text" class="form-control required-input" id="cr" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Class_participation -->
                                    <td class="text-center">
                                    <input name="class_participation[]" type="text" class="form-control required-input" id="cp" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
                                    <!-- Problem_solving -->
                                    <td class="text-center">
                                    <input name="problem_solving[]" type="text" class="form-control required-input" id="ps" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Goal_setting_to_improve_work -->
                                    <td class="text-center">
                                    <input name="goal_setting_to_improve_work[]" type="text" class="form-control required-input" id="gstiw" autocomplete="off" required placeholder="E, G, S, or N." maxlength="1" onkeyup="validateInput(this)"></td>
        
        
                                    <!-- Strengths/weakness/nextstep -->
                                    <td class="text-center">
                                    <input name="strength_weakness_nextstep[]" type="text" class="form-control required-input"  autocomplete="off" required></td>
        
                                    <td class="text-left text-xs">
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus1" name="status[]" class="form-check-input status-type" type="checkbox" value="1" id="promotion1">
                                            <label class="form-check-label" for="present">
                                                Progressing well towards promotion
                                            </label>
                                        </div>
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus2" name="status[]" class="form-check-input status-type" type="checkbox" value="2" id="promotion2">
                                            <label class="form-check-label" for="present">
                                                Progressing with some difficulty towards promotion
                                            </label>
                                        </div>
                                        <div class="form-check me-2 mx-2">
                                            <input id="promotionstatus3" name="status[]" class="form-check-input status-type" type="checkbox" value="3" id="promotion3">
                                            <label class="form-check-label" for="present">
                                                No Promotion
                                            </label>
                                        </div>
                                    </td>
                            
                                    <input name="student_id[]" type="number" class="form-control required-input d-none" id="student_id" value="<?php echo e($student['id']); ?>">
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <input name="grade_id" type="number" class="form-control required-input d-none" id="grade_id" value="<?php echo e($data['grade']->grade_id); ?>">    
                    <input name="teacher_id" type="number" class="form-control required-input d-none" id="class_teacher_id" value="<?php echo e($data['classTeacher']->teacher_id); ?>">    
                    <input name="semester" type="number" class="form-control required-input d-none" id="semester" value="<?php echo e($data['semester']); ?>"> 
                <?php endif; ?>  
            
            <!-- JIKA DATA SUDAH DI SUBMIT OLEH TEACHER -->
            <?php elseif($data['status']->status != null && $data['status']->status == 1): ?>
                <thead>
                    <tr>
                        <th colspan="2" style="vertical-align : middle;text-align:center;">Legend</th>
                        <th colspan="12" style="vertical-align : middle;text-align:left;">E – Excellent   G – Good   S – Satisfactory   N – Needs Improvement</th>
                    </tr>
                    <tr>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Independent work</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Initiative</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Homework Completion</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Use of Information</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Cooperation with Others</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Conflict Resolution</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Class Participation</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Problem Solving</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Goal setting to improve work</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Strengths/Weeakness/Next Steps</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Promotion Status</th>
                        <th class="text-center" style="vertical-align : middle;text-align:center;">Print Report Card</th>
                    </tr>
                </thead>

                <tbody>
                <?php if(!empty($data['result'])): ?>
                    <?php $__currentLoopData = $data['result']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($student['student_name']); ?></td>
                            <?php $__currentLoopData = $student['scores']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Independent Work -->
                                <td class="text-center"><?php echo e(strtoupper($score['independent_work'])); ?></td>

                                <!-- Initiative -->
                                <td class="text-center"><?php echo e(strtoupper($score['initiative'])); ?></td>

                                <!-- Homework_completion -->
                                <td class="text-center"><?php echo e(strtoupper($score['homework_completion'])); ?></td>
            

                                <!-- Use_of_information -->
                                <td class="text-center"><?php echo e(strtoupper($score['use_of_information'])); ?></td>
            

                                <!-- Cooperation_with_other -->
                                <td class="text-center"><?php echo e(strtoupper($score['cooperation_with_other'])); ?></td>
            

                                <!-- Conflict_resolution -->
                                <td class="text-center"><?php echo e(strtoupper($score['conflict_resolution'])); ?></td>
            

                                <!-- Class_participation -->
                                <td class="text-center"><?php echo e(strtoupper($score['class_participation'])); ?></td>

                                <!-- Problem_solving -->
                                <td class="text-center"><?php echo e(strtoupper($score['problem_solving'])); ?></td>
            

                                <!-- Goal_setting_to_improve_work -->
                                <td class="text-center"><?php echo e(strtoupper($score['goal_setting_to_improve_work'])); ?></td>
            

                                <!-- Strengths/weakness/nextstep -->
                                <td class="text-left"><?php echo e($score['strength_weakness_nextstep']); ?></td>

                                <td class="text-left">
                                    <?php if($score['promotion_status'] === 1): ?>
                                        <span class="badge badge-success">Progressing well towards promotion</span>
                                    <?php elseif($score['promotion_status'] === 2): ?>
                                        <span class="badge badge-warning">Progressing with some difficulty towards promotion</span>
                                    <?php elseif($score['promotion_status'] === 3): ?>
                                    <span class="badge badge-danger">No Promotion</span>
                                    <?php endif; ?>
                                </td>

                                <?php if($data['status'] !== null): ?>
                                    <?php if(session('role') == "superadmin" || session('role') == "admin"): ?>
                                        <td>
                                            <a class="btn btn-primary btn"
                                                href="<?php echo e(url(session('role') . '/reports/semester2/print') . '/' . $student['student_id']); ?>">
                                                Print
                                            </a>
                                        </td>
                                    <?php elseif(session('role') == "teacher"): ?>
                                        <td>
                                            <a class="btn btn-primary btn"
                                                href="<?php echo e(url('teacher/dashboard/report/semester2/print') . '/' . $student['student_id']); ?>">
                                                Print
                                            </a>
                                        </td>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>  
                </tbody>
            <?php endif; ?>

        </table>
        <?php else: ?>
            <p>Empty Data Student !!!</p>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\siamik-portal-gcs\resources\views/components/report/semester2.blade.php ENDPATH**/ ?>