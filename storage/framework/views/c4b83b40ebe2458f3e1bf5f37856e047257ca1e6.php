<?php $__env->startSection('title', 'Detail Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-4">Daftar Mahasiswa</h2>
    </div>
</div>

<div class="container">
    <div class="card my-3">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($student->nama); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo e($student->nrp); ?></h6>
            <p class="card-text"><?php echo e($student->email); ?></p>
            <p class="card-text"><?php echo e($student->jurusan); ?></p>
        <a href="<?php echo e($student->id); ?>/edit" class="btn btn-md btn-rounded btn-primary">Edit</a>
            <form action="<?php echo e($student->id); ?>" method="POST">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-md btn-rounded btn-danger">Delate</button>
            </form>
            <a href="/students" class="btn btn-md btn-rounded btn-info">Kembali</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\crud-mahasiswa\resources\views/students/show.blade.php ENDPATH**/ ?>