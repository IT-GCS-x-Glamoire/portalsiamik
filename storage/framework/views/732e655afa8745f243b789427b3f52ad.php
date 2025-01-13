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
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/teacher/dashboard/report/class/teacher')); ?>">Reports</a></li>
                    <?php endif; ?>
                    <li class="breadcrumb-item active" aria-current="page">Detail Acar</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">   
        <div class="col">
            <p class="text-bold">Academic Assessment Report</p>
            <table>
                <tr>
                    <td>Class</td>
                    <td> : <?php echo e($data['grade']->grade_name); ?> - <?php echo e($data['grade']->grade_class); ?></td>
                </tr>
                <tr>
                    <td>Teacher</td>
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
        

        <table class="table table-striped table-bordered bg-white border-black" style=" width: 2800px;">
            <thead>
                <tr>
                    <th rowspan="3" class="text-center" style="vertical-align : middle;text-align:center;">S/N</th>
                    <th rowspan="3" class="text-center" style="vertical-align : middle;text-align:center;">First Name</th>
                    <th colspan="9" class="text-center" style="vertical-align : middle;text-align:center;">Major Subjects</th>
                    <th colspan="7" class="text-center" style="vertical-align : middle;text-align:center;">Minor Subjects</th>
                    <?php if($data['healthEducation'] !== null): ?>
                    <th colspan="13" class="text-center" style="vertical-align : middle;text-align:center;">Supplementary Subjects</th>
                    <?php else: ?>
                    <th colspan="11" class="text-center" style="vertical-align : middle;text-align:center;">Supplementary Subjects</th>
                    <?php endif; ?>
                    <th class="text-center">Academic</th>
                    <th rowspan="3" class="text-center" style="width: 25%;vertical-align : middle;text-align:center;">Remarks</th>
                </tr>
                <tr>
                    <!-- Major Subjects -->
                    <td class="text-center" colspan="2">English</td>
                    <td class="text-center" colspan="2">Chinese</td>
                    <td class="text-center" colspan="2">Math</td>
                    <td class="text-center" colspan="2">Science</td>
                    <td class="text-center">Avg</td>
                    <!-- END MAJOR SUBJECTS -->
                    
                    <!-- MINOR SUBJECTS -->
                    <td class="text-center" colspan="2">PPKN</td>
                    <td class="text-center" colspan="2">Religion</td>
                    <td class="text-center" colspan="2">BI</td>
                    <td class="text-center">Avg</td>
                    <!-- END MINOR SUBJECTS -->
                    
                    <!-- SUPPLEMENTARY SUBJECTS -->
                    <td class="text-center" colspan="2">PE</td>
                    <td class="text-center" colspan="2">IT</td>
                    <td class="text-center" colspan="2">FL</td>
                    <td class="text-center" colspan="2">A/C</td>
                    <td class="text-center" colspan="2">CB</td>
                    <?php if($data['healthEducation'] !== null): ?>
                    <td class="text-center" colspan="2">HE</td>
                    <?php else: ?>
                    <?php endif; ?>
                    <td class="text-center">Avg</td>
                    <!-- END SUPPLEMENTARY SUBJECTS -->

                    <td class="text-center">Total</td>
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
                    <td class="text-center">70%</td>
                    <!-- END MAJOR SUBJECTS -->
                    
                    <!-- MINOR SUBJECTS -->
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">20%</td>
                    <!-- END MINOR SUBJECTS -->
                    
                    <!-- SUPPLEMENTARY SUBJECTS -->
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <?php if($data['healthEducation'] !== null): ?>
                    <td class="text-center">Mks</td>
                    <td class="text-center">Grs</td>
                    <?php else: ?>
                    <?php endif; ?>
                    <td class="text-center">10%</td>
                    <!-- END SUPPLEMENTARY SUBJECTS -->

                    <td class="text-center">100%</td>
                </tr>
            </thead>

            <tbody>
                <?php if(!empty($data['students'])): ?>
                    <?php $__currentLoopData = $data['students']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>  <!-- nomer -->
                            <td><?php echo e(ucwords(strtolower($dt['student_name']))); ?></td> <!-- name -->

                            <?php
                                $subjects = [
                                    3 => ['mks' => null, 'grs' => null], // English
                                    1 => ['mks' => null, 'grs' => null], // Chinese
                                    2 => ['mks' => null, 'grs' => null], // Math
                                    5 => ['mks' => null, 'grs' => null], // Science
                                    7 => ['mks' => null, 'grs' => null], // PPKN
                                    20 => ['mks' => null, 'grs' => null], // Religion
                                    4 => ['mks' => null, 'grs' => null], // Bhs.Indonesia
                                    18 => ['mks' => null, 'grs' => null], // PE
                                    6 => ['mks' => null, 'grs' => null], // IT
                                    62 => ['mks' => null, 'grs' => null], // GK
                                    15 => ['mks' => null, 'grs' => null], // A/C
                                    16 => ['mks' => null, 'grs' => null], // CB
                                    19 => ['mks' => null, 'grs' => null], // HE
                                ];
                            ?>

                            <?php $__currentLoopData = $dt['scores']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(array_key_exists($score['subject_id'], $subjects)): ?>
                                    <?php
                                        $subjects[$score['subject_id']]['mks'] = $score['final_score'];
                                        $subjects[$score['subject_id']]['grs'] = $score['grades'];
                                    ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php $__currentLoopData = [3, 1, 2, 5]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="text-center"><?php echo e($subjects[$subject_id]['mks']); ?></td>
                                <td class="text-center"><?php echo e($subjects[$subject_id]['grs']); ?></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <td class="text-center"><?php echo e($dt['percent_majorSubjects']); ?></td>

                            <?php $__currentLoopData = [7, 20, 4]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="text-center"><?php echo e($subjects[$subject_id]['mks']); ?></td>
                                <td class="text-center"><?php echo e($subjects[$subject_id]['grs']); ?></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <td class="text-center"><?php echo e($dt['percent_minorSubjects']); ?></td>

                            <?php if($data['healthEducation'] !== null): ?>
                            <?php $__currentLoopData = [18, 6, 62, 15, 16, 19]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="text-center"><?php echo e($subjects[$subject_id]['mks']); ?></td>
                                <td class="text-center"><?php echo e($subjects[$subject_id]['grs']); ?></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>    
                            <?php $__currentLoopData = [18, 6, 62, 15, 16]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="text-center"><?php echo e($subjects[$subject_id]['mks']); ?></td>
                                <td class="text-center"><?php echo e($subjects[$subject_id]['grs']); ?></td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            <td class="text-center"><?php echo e($dt['percent_supplementarySubjects']); ?></td>
                            <td class="text-center"><?php echo e($dt['total_score']); ?></td>
                            <td class="project-actions text-left">
                                <div class="input-group">
                                    <?php if($data['status'] == null): ?>
                                        <input name="comment[]" type="text" class="form-control" id="comment" placeholder="<?php echo e($dt['comment'] ? '' : 'Write your comment'); ?>" value="<?php echo e($dt['comment'] ?: ''); ?>" autocomplete="off" required>
                                    <?php else: ?> 
                                        <?php echo e($dt['comment']); ?>

                                    <?php endif; ?>
                                    <input name="student_id[]" type="number" class="form-control d-none" id="student_id" value="<?php echo e($dt['student_id']); ?>">
                                    <input name="final_score[]" type="number" class="form-control d-none" id="final_score" value="<?php echo e($dt['total_score']); ?>">
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="33" class="text-center text-danger">
                            Teacher doesnt submit subject scoring      
                        </td>    
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        
</div>
</div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirm Acc ACAR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to acc ACAR?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmAcarScoring">Yes, Acc ACAR</button>
            </div>
        </div>
    </div>
</div>

<!-- Decline -->
<div class="modal fade" id="modalDecline" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Decline Acar <?php echo e($data['grade']->grade_name); ?> - <?php echo e($data['grade']->grade_class); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Are you sure want to decline ACAR <?php echo e($data['grade']->grade_name); ?> - <?php echo e($data['grade']->grade_class); ?> ?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger btn" id="confirmDecline">Yes decline</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#modalDecline').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = <?php echo json_encode($data['grade']->grade_id, 15, 512) ?>;
            var teacherId = <?php echo json_encode($data['classTeacher']->teacher_id, 15, 512) ?>;
            var semester = <?php echo json_encode($data['semester'], 15, 512) ?>;
            var role = <?php echo json_encode(session('role'), 15, 512) ?>;

            console.log("id=", id, "teacher=", teacherId, "semester=", semester);
            var confirmDecline = document.getElementById('confirmDecline');

            if(role == 'admin' || role == 'superadmin'){
                confirmDecline.href = "<?php echo e(url('/' . session('role') . '/reports/acar/decline')); ?>/" + id + "/" + teacherId + "/" + semester;
            }
            else if(role == 'teacher'){
                confirmDecline.href = "<?php echo e(url('/' . session('role') . '/dashboard/acar/decline')); ?>/" + id + "/" + teacherId + "/" + semester;
            }
        });
    });
</script>

<script>
    document.getElementById('confirmAcarScoring').addEventListener('click', function() {
        // Mengambil semua input komentar
        var comments = document.querySelectorAll('input[name="comment[]"]');
        var allFilled = true;
        
        // Memeriksa setiap komentar apakah kosong atau tidak
        comments.forEach(function(comment) {
            if (comment.value.trim() === '') {
                allFilled = false;
                // Menambahkan kelas untuk memberikan highlight pada input yang kosong
                comment.classList.add('is-invalid');
            } else {
                // Menghapus kelas jika input tidak kosong
                comment.classList.remove('is-invalid');
            }
        });
        
        // Jika semua komentar terisi, submit form
        if (allFilled) {
            document.getElementById('confirmForm').submit();
        } else {
            // Menampilkan pesan peringatan
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'All comments must be filled before submitting the form!',
            });
        }
    });
</script>

<link rel="stylesheet" href="<?php echo e(asset('template')); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<script src="<?php echo e(asset('template')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<?php if(session('after_post_final_score')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Successfully',
            text: 'Successfully post score academic assessment report primary in the database.',
        });
    </script>
<?php endif; ?>

<?php if(session('after_decline_acar')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Successfully',
            text: 'Successfully decline ACAR.',
        });
    </script>
<?php endif; ?>

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

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portalsiamik\resources\views/components/report/acar_primary.blade.php ENDPATH**/ ?>