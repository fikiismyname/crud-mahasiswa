<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h2 class="display-4">Hallo, <?php echo e($nama); ?></h2>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\crud-mahasiswa\resources\views/about.blade.php ENDPATH**/ ?>