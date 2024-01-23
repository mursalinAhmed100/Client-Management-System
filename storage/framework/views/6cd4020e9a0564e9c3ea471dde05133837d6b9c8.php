<?php $__env->startSection('title', 'Search Client'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row">

            <h3 class="mb-4">Search Client</h3>

        </div>

        <div class="row">

            <?php if(isset($msg)): ?>

                <div class="col-sm-12 alert alert-info alert-dismissible fade show" role="alert">

                    <strong><?php echo e($msg); ?></strong>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

            <?php endif; ?>

        </div>

        <div class="row">

            <form class="col-sm-8" method="POST" action="<?php echo e(route('client.search.submit')); ?>">

                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <span style="color: crimson; font-size: 18px;">*</span> - Required
                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Client Name:
                    </label>

                    <input type="text" name="search_index" class="form-control" placeholder="Enter Client Name" value="<?php echo e(isset($old_search_index) ? $old_search_index : old('search_index')); ?>">

                    <div class="text-danger"><?php echo e($errors->first('search_index')); ?></div>

                </div>

                <input type="submit" value="Search" class="btn btn-primary">

            </form>

        </div>

        <div class="row mt-4">

            <?php if(isset($clients)): ?>


            <table class="table table-bordered table-hover">

                <thead class="thead-dark">

                    <tr>
                        <th>Sl. No.</th>
                        <th>Client ID</th>
                        <th>Client Name</th>
                        <th></th>
                    </tr>

                </thead>

                <tbody>

                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e(++$serial); ?></td>
                        <td><?php echo e($client->custom_id); ?></td>
                        <td><?php echo e($client->name); ?></td>
                        <td>
                            <a href="<?php echo e(route('client.edit', $client->id)); ?>" class="btn btn-info" style="font-size: 12px;">View</a>
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>


            <?php endif; ?>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/searchclient.blade.php ENDPATH**/ ?>