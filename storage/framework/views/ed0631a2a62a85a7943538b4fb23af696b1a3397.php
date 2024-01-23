<?php $__env->startSection('title', 'Add New Lead Status'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row">

            <h3 class="mb-4">Add New Lead Status</h3>

        </div>

        <div class="row">

            <?php if(session('status')): ?>

                <div class="alert alert-success col-sm-8" role="alert">

                    <?php echo e(session('status')); ?>


                </div>

            <?php endif; ?>

        </div>

        <div class="row">

            <form class="col-sm-8" method="POST" action="<?php echo e(route('leadstatus.add.submit')); ?>">

                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <span style="color: crimson; font-size: 18px;">*</span> - Required
                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Name:
                    </label>

                    <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">

                    <div class="text-danger"><?php echo e($errors->first('name')); ?></div>

                </div>

                <input type="submit" value="Add" class="btn btn-primary">

            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/addleadstatus.blade.php ENDPATH**/ ?>