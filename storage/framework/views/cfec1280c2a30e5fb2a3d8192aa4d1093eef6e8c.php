<?php $__env->startSection('title', 'Upload Excel File'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row">

            <h3 class="mb-4">Upload Excel File</h3>

        </div>

        <div class="row">

            <?php if(session('status')): ?>

                <div class="alert alert-success col-sm-8" role="alert">

                    <?php echo e(session('status')); ?>


                </div>
                
            <?php endif; ?>

        </div>

        <div class="row">

            <form class="col-sm-8" method="POST" enctype="multipart/form-data" action="<?php echo e(route('clients.import')); ?>">

                <?php echo csrf_field(); ?>

                <div class="form-group">

                    <input type="file" name="my_file">

                    <div class="text-danger"><?php echo e($errors->first('my_file')); ?></div>

                </div>
                
                <input type="submit" value="Upload" class="btn btn-primary">

            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/uploadclients.blade.php ENDPATH**/ ?>