<?php $__env->startSection('title', 'Edit Meeting'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mb-4">

        <div class="row">

            <h3 class="mb-4">Edit Meeting</h3>

        </div>

        <div class="row">

            <?php if(session('status')): ?>

                <div class="alert alert-success col-sm-8" role="alert">

                    <?php echo e(session('status')); ?>


                </div>

            <?php endif; ?>

        </div>

        <div class="row">

            <form class="col-sm-8" method="POST" action="<?php echo e(route('meeting.edit.submit', $meeting->id)); ?>">

                <?php echo csrf_field(); ?>

                <div class="form-group">

                    <label>Title:</label>

                    <input type="text" name="title" value="<?php echo e(old('title') ? old('title') : $meeting->title); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('title')); ?></div>

                </div>

                <div class="form-group">

                    <label>Agenda:</label>

                    <textarea name="agenda" class="form-control" rows="3"><?php echo e(old('agenda') ? old('agenda') : $meeting->agenda); ?></textarea>

                    <div class="text-danger"><?php echo e($errors->first('agenda')); ?></div>

                </div>

                <div class="form-group">

                    <label>Client:</label>

                    <input type="text" disabled value="<?php echo e($meeting->client->name); ?>" class="form-control" style="font-weight: 500; background-color: white;">

                </div>

                <div class="form-group">

                    <label>Assigned Person:</label>

                    <select class="form-control" name="person_id">

                        <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($person->id); ?>" <?php echo e((old('person_id') ? (old('person_id') == $person->id ? "selected" : "") : ($person->id == $meeting->client->person->id ? "selected" : ""))); ?>><?php echo e($person->name); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                    <div class="text-danger"><?php echo e($errors->first('person_id')); ?></div>

                </div>

                <div class="form-group">

                    <label>Service:</label>

                    <input type="text" disabled value="<?php echo e($meeting->client->service->name); ?>" class="form-control" style="font-weight: 500; background-color: white;">

                </div>

                <div class="form-group">

                    <label>Lead Status:</label>

                    <select class="form-control" name="lead_status_id">

                        <?php $__currentLoopData = $leadStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leadStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($leadStatus->id); ?>" <?php echo e((old('lead_status_id') ? (old('lead_status_id') == $leadStatus->id ? "selected" : "") : ($leadStatus->id == $meeting->client->leadStatus->id ? "selected" : ""))); ?>><?php echo e($leadStatus->name); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                    <div class="text-danger"><?php echo e($errors->first('lead_status_id')); ?></div>

                </div>

                <div class="form-group">

                    <label>Date:</label>

                    <input type="date" name="date" value="<?php echo e(old('date') ? old('date') : $meeting->date); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('date')); ?></div>

                </div>

                <div class="form-group">

                    <label>Time:</label>

                    <input type="time" name="time" value="<?php echo e(old('time') ? old('time') : $meeting->time); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('time')); ?></div>

                </div>





                <input type="submit" value="Save" class="btn btn-primary">





            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/editmeeting.blade.php ENDPATH**/ ?>