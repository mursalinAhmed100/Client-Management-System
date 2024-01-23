<?php $__env->startSection('title', 'Office Members'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row">

            <h3>Office Members</h3>

            <table class="table table-bordered table-hover">

                <thead class="thead-dark">

                    <tr>
                        <th>Sl. No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th></th>
                    </tr>

                </thead>

                <tbody>

                    <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e(++$serial); ?></td>
                            <td><?php echo e($person->name); ?></td>
                            <td><?php echo e($person->designation); ?></td>
                            <td><?php echo e($person->contact_number); ?></td>
                            <td><?php echo e($person->email); ?></td>

                            <td>

                                <a href="<?php echo e(route('person.edit', $person->id)); ?>" class="btn btn-info mr-2" style="font-size: 12px;">Edit</a>

                                <button class="btn btn-danger" data-toggle="modal" data-target="#person<?php echo e($person->id); ?>" style="font-size: 12px;">Remove</button>

                                <div class="modal fade" id="person<?php echo e($person->id); ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Remove Office Member</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure ?</p>
                                            </div>
                                            <div class="modal-footer">

                                                <form method="POST" action="<?php echo e(route('person.remove', $person->id)); ?>">

                                                    <?php echo csrf_field(); ?>

                                                    <input type="submit" class="btn btn-primary" value="Yes">

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/persons.blade.php ENDPATH**/ ?>