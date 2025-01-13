<?php $__env->startSection('content'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
      <div class="row">
         <div class="col">
            <nav aria-label="breadcrumb" class="bg-white rounded-3 p-3 mb-3">
               <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item"><a href="<?php echo e(url('/teacher/dashboard/attendance/class/teacher')); ?>">Attendance</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Student Attend</li>
               </ol>
            </nav>
         </div>
      </div>
      <div class="card card-dark mt-2">
         <div class="card-header">
            <h3 class="card-title"><?php echo e($data['nameGrade']); ?> / <?php echo e(\Carbon\Carbon::now()->translatedFormat('l, d F Y')); ?></h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
               </button>
            </div>
         </div>
         <div class="card-body ">
            <div id="calendar">
            </div>
         </div>
      </div>
   <!-- END TABLE -->
</div>

<link rel="stylesheet" href="<?php echo e(asset('template')); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<script src="<?php echo e(asset('template')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
   document.addEventListener('DOMContentLoaded', function() {
         var calendarEl = document.getElementById('calendar');

         // Data dari server
         var eventsData = <?php echo json_encode($calendarData, 15, 512) ?>;
         var startSemester = new Date(<?php echo json_encode($startSemester, 15, 512) ?>);  // Awal semester
         var today = new Date();  // Hari Ini
         var endSemester = new Date(<?php echo json_encode($endSemester, 15, 512) ?>);  // Akhir Semester
         // Ambil list event yang sudah ada (misalnya Done)
         var eventDates = eventsData.map(function(event) {
            return event.start;
         });

         // Loop melalui rentang semester untuk menambahkan "Not Yet" jika tidak ada "Done"
         var currentDate = new Date(startSemester); // Mulai dari awal semester
         while (currentDate <= today) {
            var formattedDate = currentDate.toISOString().split('T')[0]; // Format ke yyyy-mm-dd

            // Jika tanggal belum ada di eventDates, tambahkan "Not Yet"
            if (!eventDates.includes(formattedDate)) {
               eventsData.push({
                     title: 'Not Yet',
                     start: formattedDate,
                     color: 'red',
                     // Tidak mengatur URL di sini, karena kita akan mengatur saat klik
               });
            }

            // Pindahkan ke hari berikutnya
            currentDate.setDate(currentDate.getDate() + 1);
         }

         // Inisialisasi FullCalendar
         var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: 'dayGridMonth,dayGridWeek,dayGridDay'
            },
            selectable: true,
            events: eventsData,  // Masukkan data event yang sudah di-update
            // Batasi kalender hanya bisa menampilkan hingga akhir semester
            validRange: {
               start: startSemester.toISOString().split('T')[0], // Format ke yyyy-mm-dd
               end: endSemester.toISOString().split('T')[0], // Format ke yyyy-mm-dd
            },
            hiddenDays: [0, 6],
            eventClick: function(info) {
               // Ambil tanggal yang diklik
               var clickedDate = info.event.start;

               // Tambahkan 1 hari
               clickedDate.setDate(clickedDate.getDate() + 1);

               // Format tanggal ke yyyy-mm-dd
               var formattedClickedDate = clickedDate.toISOString().split('T')[0];

               var role = '<?php echo e(session('role')); ?>';  // Ambil role dari session
               var teacherId = '<?php echo e($data['teacherId']); ?>';  // Ambil ID user dari session
               var gradeId = '<?php echo e($gradeId); ?>';  // Ambil grade ID dari variabel PHP
               var semester = '<?php echo e(session('semester')); ?>';
               var userId = '<?php echo e(session('id_user')); ?>'; 
               // Buat URL dengan tanggal yang diklik + 1 hari
               var urlDone = "<?php echo e(url('/' . session('role') . '/dashboard/attendance/edit/detail')); ?>/" + formattedClickedDate + "/" + gradeId + "/" + teacherId + "/" + semester; // untuk status done
               var urlNotYet = "<?php echo e(url('/' . session('role') . '/dashboard/attendance/')); ?>/" + userId + "/" + gradeId + "/" + formattedClickedDate; // untuk status done

               // Arahkan ke URL tersebut
               if (info.event.title === 'Done') {
                window.location.href = urlDone;
               } else if (info.event.title === 'Not Yet') {
                  window.location.href = urlNotYet;
               }
         }
      });

      calendar.render();
   });
</script>


<?php if(session('failed_attend')): ?> 
   <script>
         Swal.fire({
            icon: 'error',
            title: 'Oops..',
            text: 'Attendance already recorded for this day.',
      });
   </script>
<?php endif; ?>

<?php if(session('success_attend')): ?> 
   <script> 
      Swal.fire({
            icon: 'success',
            title: 'Successfully',
            text: 'Successfully Attend Student',
      });
   </script>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portalsiamik\resources\views/components/attendance/detail-attendance-all.blade.php ENDPATH**/ ?>