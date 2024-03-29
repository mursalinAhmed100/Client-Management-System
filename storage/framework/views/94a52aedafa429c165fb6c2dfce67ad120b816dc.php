<?php $__env->startSection('title', 'Meetings'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-12">

                <h3>Meetings</h3>

            </div>

        </div>


        <hr>

        
        <div class="row">

            <div class="col-12">

                <h4>View</h4>

            </div>

        </div>


        


        <form name="filter_form" method="POST" action="<?php echo e(route('meetings.filter')); ?>">

            <?php echo csrf_field(); ?>

            <div class="row mb-2 ml-2">

                <div class="col-1 mt-1">
                    <label><h5>From:</h5></label>
                </div>

                <div class="col-md-4 mb-2">
                    <input type="date" name="from_date" value="<?php echo e(isset($from_date) ? $from_date : $pre_from_date); ?>" class="form-control">
                </div>

                <div class="col-md-3">
                    <input type="time" name="from_time" value="<?php echo e(isset($from_time) ? $from_time : '09:00:00'); ?>" class="form-control">
                </div>

            </div>

            <div class="row mb-2 ml-2">

                <div class="col-1 mt-1">
                    <label><h5>To:</h5></label>
                </div>

                <div class="col-md-4 mb-2">
                    <input type="date" name="to_date" value="<?php echo e(isset($to_date) ? $to_date : $pre_to_date); ?>" class="form-control">
                </div>

                <div class="col-md-3 mb-2">
                    <input type="time" name="to_time" value="<?php echo e(isset($to_time) ? $to_time : '19:00:00'); ?>" class="form-control">
                </div>

            </div>

            <div class="row mb-2 ml-2">

                <div class="col-md-2 mt-1">
                    <label><h5>Meeting Status:</h5></label>
                </div>

                <div class="col-md-2 mb-2">

                    <select name="meeting_status" class="form-control">
                        <option value="Pending, Expired" <?php echo e((isset($old_meeting_status) ? ($old_meeting_status == "Pending, Expired" ? "selected" : "") : "selected")); ?>>All</option>
                        <option value="Pending" <?php echo e((isset($old_meeting_status) ? ($old_meeting_status == "Pending" ? "selected" : "") : "")); ?>>Pending</option>
                        <option value="Expired" <?php echo e((isset($old_meeting_status) ? ($old_meeting_status == "Expired" ? "selected" : "") : "")); ?>>Expired</option>
                    <select>

                </div>

                <div class="col-md-2 mt-1">
                    <label><h5>Lead Status:</h5></label>
                </div>

                <div class="col-md-2 mb-2">

                    <select name="lead_status" class="form-control">

                        <option value="1" <?php echo e((isset($old_lead_status) ? ($old_lead_status == "1" ? "selected" : "") : "selected")); ?>>All</option>

                        <?php $__currentLoopData = $lead_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lead_status->name); ?>" <?php echo e((isset($old_lead_status) ? ($old_lead_status == $lead_status->name ? "selected" : "") : "")); ?> ><?php echo e($lead_status->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>

                <div class="col-md-1 mt-1">
                    <label><h5>Service:</h5></label>
                </div>

                <div class="col-md-2">

                    <select name="service" class="form-control">

                        <option value="1" <?php echo e((isset($old_service) ? ($old_service == "1" ? "selected" : "") : "selected")); ?>>All</option>

                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($service->name); ?>" <?php echo e((isset($old_service) ? ($old_service == $service->name ? "selected" : "") : "")); ?> ><?php echo e($service->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>

            </div>

            <div class="row mb-2 ml-2">

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

                <div class="col-md-2 mt-1">
                    <label><h5>Client ID:</h5></label>
                </div>

                <div class="col-md-1 mb-2">
                    <input type="text" name="client_id" onkeyup="changeLetterCase(this.value)" value="<?php echo e(isset($old_client_id) ? $old_client_id : old('client_id')); ?>" placeholder="Enter ID" class="form-control" style="width: 100px;">
                </div>

                <div class="col-lg-1 mb-2">
                    <input type="button" onclick="clearID()" value="Clear ID" class="btn btn-secondary">
                </div>

                <div class="col-lg-1 mb-2">
                    <input type="button" onclick="clearAll()" value="Clear All" class="btn btn-dark">
                </div>

                <div class="col-lg-2 mb-2">
                    <input type="submit" value="Filter Meetings" class="btn btn-primary">
                </div>

                <div class="col-lg-1 mb-2">
                    <a href="<?php echo e(route('meetings')); ?>" class="btn btn-light" style="background-color: lightgray;">Reload</a>
                </div>

            </div>

        </form>


        <hr>


        <div class="row">

            <div class="col-12">

                <table class="table table-bordered table-hover">

                    <thead class="thead-dark">

                        <tr>
                            <th>Sl. No.</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Client ID</th>
                            <th>Client Name</th>
                            <th>Assigned Person</th>
                            <th>Title</th>
                            <th>Agenda</th>
                            <th>Service</th>
                            <th>Lead Status</th>
                            <th>Meeting Status</th>
                            <th></th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e(++$serial); ?></td>
                                <td><?php echo e(date_format(date_create($meeting->date), 'M-d-Y')); ?></td>
                                <td><?php echo e(date_format(date_create($meeting->time), 'h:i A')); ?></td>
                                <td><?php echo e($meeting->client->custom_id); ?></td>
                                <td><?php echo e($meeting->client->name); ?></td>
                                <td><?php echo e($meeting->client->person->name); ?></td>
                                <td><?php echo e($meeting->title); ?></td>
                                <td><?php echo e($meeting->agenda); ?></td>
                                <td><?php echo e($meeting->client->service->name); ?></td>
                                <td><?php echo e($meeting->client->leadStatus->name); ?></td>
                                <td><?php echo e($meeting->status); ?></td>

                                <td>

                                    <a href="<?php echo e(route('meeting.edit', $meeting->id)); ?>" class="btn btn-info mr-2 mb-2" style="font-size: 12px;">Edit</a>

                                    <button class="btn btn-danger" data-toggle="modal" data-target="#meeting<?php echo e($meeting->id); ?>" style="font-size: 12px;">Remove</button>

                                    <div class="modal fade" id="meeting<?php echo e($meeting->id); ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Remove Meeting</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure ?</p>
                                                </div>
                                                <div class="modal-footer">

                                                    <form method="POST" action="<?php echo e(route('meeting.remove', $meeting->id)); ?>">

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

        function changeLetterCase(text)
        {
            document.forms["filter_form"]["client_id"].value = text.toUpperCase()
        }

        function clearID()
        {
            document.forms["filter_form"]["client_id"].value = ""
        }

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



            document.forms["filter_form"]["from_time"].value = "09:00:00"

            document.forms["filter_form"]["to_time"].value = "19:00:00"



            document.forms["filter_form"]["meeting_status"].selectedIndex = "0"

            document.forms["filter_form"]["lead_status"].selectedIndex = "0"

            document.forms["filter_form"]["service"].selectedIndex = "0"

            document.forms["filter_form"]["assigned_person"].selectedIndex = "0"

            document.forms["filter_form"]["client_id"].value = ""
        }

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/meetings.blade.php ENDPATH**/ ?>