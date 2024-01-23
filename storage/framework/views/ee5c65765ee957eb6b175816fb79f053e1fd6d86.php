<?php $__env->startSection('title', 'Edit Office Member'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row">

            <h3 class="mb-4">Edit Office Member</h3>

        </div>

        <div class="row">

            <?php if(session('status')): ?>

                <div class="alert alert-success col-sm-8" role="alert">

                    <?php echo e(session('status')); ?>


                </div>

            <?php endif; ?>

        </div>

        <div class="row">

            <form class="col-sm-8" method="POST" action="<?php echo e(route('person.edit.submit', $person->id)); ?>">

                <?php echo csrf_field(); ?>

                <div class="form-group">

                    <label>Name:</label>

                    <input type="text" name="name" value="<?php echo e(old('name') ? old('name') : $person->name); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('name')); ?></div>

                </div>

                <div class="form-group">

                    <label>Designation:</label>

                    <input type="text" name="designation" value="<?php echo e(old('designation') ? old('designation') : $person->designation); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('designation')); ?></div>

                </div>
    
                <div class="form-group">

                    <label>Phone Number (Mobile):</label>

                    <input type="text" name="contact_number" value="<?php echo e(old('contact_number') ? old('contact_number') : $person->contact_number); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('contact_number')); ?></div>

                    <?php if(Session::has('error_contact_number')): ?>

                        <div class="text-danger">

                            <?php echo e(Session::get('error_contact_number')); ?>


                        </div>

                    <?php endif; ?>

                </div>

                <div class="form-group">

                    <label>Email:</label>

                    <input type="text" name="email" value="<?php echo e(old('email') ? old('email') : $person->email); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('email')); ?></div>

                    <?php if(Session::has('error_email')): ?>

                        <div class="text-danger">

                            <?php echo e(Session::get('error_email')); ?>


                        </div>

                    <?php endif; ?>

                </div>

                <input type="submit" value="Save" class="btn btn-primary">

            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/editperson.blade.php ENDPATH**/ ?>