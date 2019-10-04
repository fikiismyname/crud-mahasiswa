<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h2 class="display-4">Daftar Mahasiswa</h2>
    </div>
</div>

<div class="container">

    <!-- Editable table -->
    <div class="card mb-4">
        <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NRP</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Jurusan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td class="pt-3-half"><?php echo e($loop->iteration); ?></td>
                    <td class="pt-3-half"><?php echo e($mhs->nama); ?></td>
                    <td class="pt-3-half"><?php echo e($mhs->nrp); ?></td>
                    <td class="pt-3-half"><?php echo e($mhs->email); ?></td>
                    <td class="pt-3-half"><?php echo e($mhs->jurusan); ?></td>
                    <td><a class="btn btn-success btn-rounded btn-sm m-1">Edit</a><a
                            class="btn btn-danger btn-rounded btn-sm m-1">Delate</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\project\crud-mahasiswa\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>