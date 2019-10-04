<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h2 class="display-4">Daftar Mahasiswa</h2>
        <a href="/students/create" class="btn btn-md btn-rounded btn-success">Tambah data mahasiswa</a>
    </div>
</div>

<div class="container">
    <div class="card mb-4">
        <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
        <ul class="list-group">
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo e($mhs->nama); ?>

                <a href="students/<?php echo e($mhs->id); ?>" class="badge badge-primary badge-pill">detail</a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\crud-mahasiswa\resources\views/students/index.blade.php ENDPATH**/ ?>