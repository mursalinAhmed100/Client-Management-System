<?php $__env->startSection('title', 'Add New Client'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mb-4">

        <div class="row">

            <h3 class="mb-4">Add New Client</h3>

        </div>

        <div class="row">

            <?php if(session('status')): ?>

                <div class="alert alert-success col-sm-8" role="alert">

                    <?php echo e(session('status')); ?>


                </div>

            <?php endif; ?>

        </div>

        <div class="row">

            

            <form class="col-sm-8" method="POST" action="<?php echo e(route('client.add.submit')); ?>">

                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <span style="color: crimson; font-size: 18px;">*</span> - Required
                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Client Name:
                    </label>

                    <input type="text" name="client_name" value="<?php echo e(old('client_name')); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('client_name')); ?></div>

                </div>

                <div class="form-group">

                    <label>Company Name:</label>

                    <input type="text" name="company_name" value="<?php echo e(old('company_name')); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('company_name')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Conversion Date:
                    </label>

                    <input type="date" name="conversion_date" value="<?php echo e(old('conversion_date')); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('conversion_date')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Source:
                    </label>

                    <select class="form-control" name="source_id">

                        <option selected disabled>Select</option>

                        <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($source->id); ?>" <?php echo e(old('source_id') == $source->id ? "selected" : ""); ?>><?php echo e($source->name); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                    <div class="text-danger"><?php echo e($errors->first('source_id')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Assigned Person:
                    </label>

                    <select class="form-control" name="assigned_person_id">

                        <option selected disabled>Select</option>

                        <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($person->id); ?>" <?php echo e(old('assigned_person_id') == $person->id ? "selected" : ""); ?>><?php echo e($person->name); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                    <div class="text-danger"><?php echo e($errors->first('assigned_person_id')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Service Requirement:
                    </label>

                    <select class="form-control" name="service_id">

                        <option selected disabled>Select</option>

                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($service->id); ?>" <?php echo e(old('service_id') == $service->id ? "selected" : ""); ?>><?php echo e($service->name); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                    <div class="text-danger"><?php echo e($errors->first('service_id')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Phone Number (Mobile):
                    </label>

                    <input type="text" name="contact_number" value="<?php echo e(old('contact_number')); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('contact_number')); ?></div>

                </div>

                <div class="form-group">

                    <label>Email:</label>

                    <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('email')); ?></div>

                </div>

                <div class="form-group">

                    <label>Address:</label>

                    <textarea name="address" class="form-control" rows="3"><?php echo e(old('address')); ?></textarea>

                    <div class="text-danger"><?php echo e($errors->first('address')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Lead Status:
                    </label>

                    <select class="form-control" name="lead_status_id">

                        <option selected disabled>Select</option>

                        <?php $__currentLoopData = $leadStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leadStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($leadStatus->id); ?>" <?php echo e(old('lead_status_id') == $leadStatus->id ? "selected" : ""); ?>><?php echo e($leadStatus->name); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                    <div class="text-danger"><?php echo e($errors->first('lead_status_id')); ?></div>

                </div>

                <div class="form-group">

                    <label>Comment-1:</label>

                    <textarea name="comment_1" class="form-control" rows="3"><?php echo e(old('comment_1')); ?></textarea>

                    <div class="text-danger"><?php echo e($errors->first('comment_1')); ?></div>

                </div>

                <div class="form-group">

                    <label>Comment-2:</label>

                    <textarea name="comment_2" class="form-control" rows="3"><?php echo e(old('comment_2')); ?></textarea>

                    <div class="text-danger"><?php echo e($errors->first('comment_2')); ?></div>

                </div>





                <input type="submit" value="Add" class="btn btn-primary">





            </form>

            

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/addclient.blade.php ENDPATH**/ ?>