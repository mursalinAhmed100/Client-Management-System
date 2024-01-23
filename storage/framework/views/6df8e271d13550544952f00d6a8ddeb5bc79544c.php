<?php $__env->startSection('title', 'Create New Meeting'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mb-4">

        <div class="row">

            <h3 class="mb-4">Create New Meeting</h3>

        </div>

        <div class="row">

            <?php if(session('status')): ?>

                <div class="alert alert-success col-sm-8" role="alert">

                    <?php echo e(session('status')); ?>


                </div>

            <?php endif; ?>

        </div>

        <div class="row">

            

            <form class="col-sm-8" method="POST" action="<?php echo e(route('meeting.add.submit')); ?>">

                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <span style="color: crimson; font-size: 18px;">*</span> - Required
                </div>




                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Client:
                    </label>

                    <div class="row">

                        <div class="col-4">

                            <input type="text" id="client_custom_id" name="client_custom_id" onkeyup="search(this.value)" value="<?php echo e(old('client_custom_id')); ?>" placeholder="Enter Client ID" class="form-control">

                        </div>

                        <div class="col-8">

                            <input type="text" id="client_name" name="client_name" value="<?php echo e(old('client_name')); ?>" placeholder="Enter Client ID to see Client Name here" disabled style="font-weight: 500; background-color: white;" class="form-control">

                        </div>

                    </div>

                    <input type="hidden" id="client_id" name="client_id" value="<?php echo e(old('client_id')); ?>">

                    <div class="text-danger"><?php echo e($errors->first('client_custom_id')); ?></div>

                    <?php if(Session::has('error_client_custom_id')): ?>

                        <div class="text-danger">

                            <?php echo e(Session::get('error_client_custom_id')); ?>


                        </div>

                    <?php endif; ?>

                </div>




                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Title:
                    </label>

                    <input type="text" name="title" value="<?php echo e(old('title') ? old('title') : Session::get('title')); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('title')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Agenda:
                    </label>

                    <textarea name="agenda" class="form-control" rows="3"><?php echo e(old('agenda') ? old('agenda') : Session::get('agenda')); ?></textarea>

                    <div class="text-danger"><?php echo e($errors->first('agenda')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Date:
                    </label>

                    <input type="date" name="date" value="<?php echo e(old('date') ? old('date') : Session::get('date')); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('date')); ?></div>

                </div>

                <div class="form-group">

                    <label>
                        <span style="color: crimson; font-size: 18px;">*</span>
                        Time:
                    </label>

                    <input type="time" name="time" value="<?php echo e(old('time') ? old('time') : Session::get('time')); ?>" class="form-control">

                    <div class="text-danger"><?php echo e($errors->first('time')); ?></div>

                </div>





                <input type="submit" value="Create" class="btn btn-primary">





            </form>

            

        </div>

    </div>


    <script>

        function search(text)
        {
            let ajax = new XMLHttpRequest()

            ajax.onreadystatechange = function() {
                if(ajax.readyState == 4 && ajax.status == 200)
                {
                    let client_name = document.getElementById("client_name")
                    let client_id = document.getElementById("client_id")
                    let client_custom_id = document.getElementById("client_custom_id")

                    let obj = JSON.parse(ajax.responseText);

                    if(obj.count == 1)
                    {
                        client_name.placeholder = obj.name
                        client_id.value = obj.id
                    }
                    else if(obj.count == 0)
                    {
                        client_id.value = "";

                        if(client_custom_id.value != "")
                        {
                            client_name.placeholder = obj.msg
                        }
                        else
                        {
                            client_name.placeholder = "Enter Client ID to see Client Name here"
                        }
                    }
                }
            }

            ajax.open("POST", "http://127.0.0.1:8000/api/meeting/check", true)

            ajax.setRequestHeader("content-type", "application/x-www-form-urlencoded")

            ajax.send("custom_id=" + text)
        }

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.baselayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\CSE_470_Tousif_Project\Client_Management\resources\views/addmeeting.blade.php ENDPATH**/ ?>