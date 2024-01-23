<?php $__env->startSection('title', 'Clients'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-12">

                <h3>Clients</h3>

            </div>

        </div>


        <hr>


        <div class="row">

            <div class="col-12">

                <h4>View</h4>

            </div>

        </div>


        


        






        <form name="filter_form" method="POST" action="<?php echo e(route('clients.filter')); ?>">

            <?php echo csrf_field(); ?>

            <div class="row mb-2 ml-2">

                <div class="col-1 mt-1">
                    <label><h5>From:</h5></label>
                </div>

                <div class="col-md-3 mb-2">
                    <input type="date" name="from_date" value="<?php echo e(isset($from_date) ? $from_date : $pre_from_date); ?>" class="form-control">
                </div>

                <div class="col-md-1 mt-1">
                    <label><h5>To:</h5></label>
                </div>

                <div class="col-md-3 mb-2">
                    <input type="date" name="to_date" value="<?php echo e(isset($to_date) ? $to_date : $pre_to_date); ?>" class="form-control">
                </div>

                <div class="col-md-2 mt-1">
                    <label><h5>Lead Status:</h5></label>
                </div>

                <div class="col-md-2">

                    <select name="lead_status" class="form-control">

                        <option value="1" <?php echo e((isset($old_lead_status) ? ($old_lead_status == "1" ? "selected" : "") : "selected")); ?>>All</option>

                        <?php $__currentLoopData = $leadStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lead_status->name); ?>" <?php echo e((isset($old_lead_status) ? ($old_lead_status == $lead_status->name ? "selected" : "") : "")); ?> ><?php echo e($lead_status->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>

            </div>


            <div class="row mb-2 ml-2">

                <div class="col-1 mt-1">
                    <label><h5>Source:</h5></label>
                </div>

                <div class="col-md-2 mb-2">

                    <select name="source" class="form-control">

                        <option value="1" <?php echo e((isset($old_source) ? ($old_source == "1" ? "selected" : "") : "selected")); ?>>All</option>

                        <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($source->name); ?>" <?php echo e((isset($old_source) ? ($old_source == $source->name ? "selected" : "") : "")); ?> ><?php echo e($source->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>

                <div class="col-md-1 mt-1">
                    <label><h5>Service:</h5></label>
                </div>

                <div class="col-md-2 mb-2">

                    <select name="service" class="form-control">

                        <option value="1" <?php echo e((isset($old_service) ? ($old_service == "1" ? "selected" : "") : "selected")); ?>>All</option>

                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($service->name); ?>" <?php echo e((isset($old_service) ? ($old_service == $service->name ? "selected" : "") : "")); ?> ><?php echo e($service->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>

                <div class="col-md-2 mt-1">
                    <label><h5>Assigned Person:</h5></label>
                </div>

                <div class="col-md-2 mb-2">

                    <select name="assigned_person" class="form-control">

                        <option value="1" <?php echo e((isset($old_assigned_person) ? ($old_assigned_person == "1" ? "selected" : "") : "selected")); ?>>All</option>

                        <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($person->name); ?>" <?php echo e((isset($old_assigned_person) ? ($old_assigned_person == $person->name ? "selected" : "") : "")); ?> ><?php echo e($person->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>

                <div class="col-2">
                    <input type="button" onclick="clearAll()" value="Clear All" class="btn btn-dark">
                </div>

            </div>


            <div class="row mb-2 ml-2">

                <div class="col-2 mb-2">
                    <input type="submit" value="Filter Clients" class="btn btn-primary">
                </div>

                <div class="col-md-2">
                    <a href="<?php echo e(route('clients')); ?>" class="btn btn-secondary">Reload</a>
                </div>

            </div>

        </form>


        <form name="download_form" onsubmit="download()" method="POST" action="<?php echo e(route('clients.export')); ?>">

            <?php echo csrf_field(); ?>

            <div class="row ml-2">

                <div class="col-9"></div>

                <div class="col-3" style="margin-top: -55px;">

                    <input type="hidden" name="download_criteria">

                    <input type="submit" value="Download Clients" class="btn btn-success">

                </div>

            </div>

        </form>


        <hr>


        <div class="row">

            <div class="col-12">

                <table class="table table-bordered table-sm">

                    <thead class="thead-dark">

                        <tr>
                            <th>Sl. No.</th>
                            <th>ID</th>
                            <th>Client Name</th>
                            <th>Company Name</th>
                            <th>Conversion Date</th>
                            <th>Source</th>
                            <th>Assigned Person</th>
                            <th>Service Requirement</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Lead Status</th>
                            <th>Comment-1</th>
                            <th>Comment-2</th>
                            <th></th>
                            <th></th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>

                                <td><?php echo e(++$serial); ?></td>

                                <td><?php echo e($client->custom_id); ?></td>

                                <td><input class="<?php echo e($client->id); ?>" type="text" disabled name="client_name" value="<?php echo e($client->name); ?>"></td>

                                <td><input class="<?php echo e($client->id); ?>" type="text" disabled name="company_name" value="<?php echo e($client->company_name); ?>"></td>

                                <td><input class="<?php echo e($client->id); ?>" type="date" disabled name="conversion_date" value="<?php echo e($client->conversion_date); ?>"></td>

                                <td>

                                    <select class="<?php echo e($client->id); ?>" disabled name="source_id">

                                        <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php if($source->id == $client->source_id): ?>

                                                <option selected value="<?php echo e($source->id); ?>"><?php echo e($source->name); ?></option>

                                            <?php else: ?>

                                                <option value="<?php echo e($source->id); ?>"><?php echo e($source->name); ?></option>

                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                </td>

                                <td>

                                    <select class="<?php echo e($client->id); ?>" disabled name="assigned_person_id">

                                        <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php if($person->id == $client->person_id): ?>

                                                <option selected value="<?php echo e($person->id); ?>"><?php echo e($person->name); ?></option>

                                            <?php else: ?>

                                                <option value="<?php echo e($person->id); ?>"><?php echo e($person->name); ?></option>

                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                </td>

                                <td>

                                    <select class="<?php echo e($client->id); ?>" disabled name="service_id">

                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php if($service->id == $client->service_id): ?>

                                                <option selected value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?></option>

                                            <?php else: ?>

                                                <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?></option>

                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                </td>

                                <td><input class="<?php echo e($client->id); ?>" type="text" disabled name="contact_number" value="<?php echo e($client->contact_number); ?>"></td>

                                <td><input class="<?php echo e($client->id); ?>" type="email" disabled name="email" value="<?php echo e($client->email); ?>"></td>

                                <td>
                                    <textarea class="<?php echo e($client->id); ?>" disabled name="address" rows="3"><?php echo e($client->address); ?></textarea>
                                </td>

                                <td>

                                    <select class="<?php echo e($client->id); ?>" disabled name="lead_status_id">

                                        <?php $__currentLoopData = $leadStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leadStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php if($leadStatus->id == $client->lead_status_id): ?>

                                                <option selected value="<?php echo e($leadStatus->id); ?>"><?php echo e($leadStatus->name); ?></option>

                                            <?php else: ?>

                                                <option value="<?php echo e($leadStatus->id); ?>"><?php echo e($leadStatus->name); ?></option>

                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                </td>

                                <td>
                                    <textarea class="<?php echo e($client->id); ?>" disabled name="comment_1" rows="3"><?php echo e($client->comment_1); ?></textarea>
                                </td>

                                <td>
                                    <textarea class="<?php echo e($client->id); ?>" disabled name="comment_2" rows="3"><?php echo e($client->comment_2); ?></textarea>
                                </td>




                                <td><button id="<?php echo e($client->id); ?>" onclick="change(this.id)" class="btn btn-info" style="font-size: 14px">Edit</button></td>




                                <td>

                                    <button class="btn btn-danger" data-toggle="modal" data-target="#client<?php echo e($client->id); ?>" style="font-size: 14px;">Remove</button>

                                    <div class="modal fade" id="client<?php echo e($client->id); ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Remove Client</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure ?</p>
                                                </div>
                                                <div class="modal-footer">

                                                    <form method="POST" action="<?php echo e(route('client.remove', [$client->id, 1])); ?>">

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

    </div>

    <script>

        function clearAll()
        {
            let from_date = new Date()
            from_date.setDate(from_date.getDate() - 7)

            let str1 = from_date.getFullYear() + "-" + ("0" + (from_date.getMonth() + 1)).slice(-2) + "-" + ("0" + from_date.getDate()).slice(-2)

            document.forms["filter_form"]["from_date"].value = str1


            let to_date = new Date()
            to_date.setDate(to_date.getDate() + 7)

            let str2 = to_date.getFullYear() + "-" + ("0" + (to_date.getMonth() + 1)).slice(-2) + "-" + ("0" + to_date.getDate()).slice(-2)

            document.forms["filter_form"]["to_date"].value = str2



            document.forms["filter_form"]["lead_status"].selectedIndex = "0"

            document.forms["filter_form"]["source"].selectedIndex = "0"

            document.forms["filter_form"]["service"].selectedIndex = "0"

            document.forms["filter_form"]["assigned_person"].selectedIndex = "0"
        }

        function download()
        {
            document.forms['download_form']['download_criteria'].value = document.forms['filter_form']['from_date'].value
                                                                + ", " + document.forms['filter_form']['to_date'].value
                                                                + ", " + document.forms['filter_form']['lead_status'].value
                                                                + ", " + document.forms['filter_form']['source'].value
                                                                + ", " + document.forms['filter_form']['service'].value
                                                                + ", " + document.forms['filter_form']['assigned_person'].value
        }

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.clientslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/clients.blade.php ENDPATH**/ ?>