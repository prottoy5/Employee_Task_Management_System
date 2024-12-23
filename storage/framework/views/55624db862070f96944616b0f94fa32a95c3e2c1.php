

<?php $__env->startSection('title'); ?>
    Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Admin Create</h5>
                                <form class="" id="create_admin">
                                    <input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Name</label>
                                        <input name="name" id="admin_name" placeholder="Enter Admin Name" type="text"
                                            class="form-control">
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Email</label>
                                        <input name="email" id="admin_email" placeholder="Enter Admin Email" type="email"
                                            class="form-control">
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Phone</label>
                                        <input name="phone" id="admin_phone" placeholder="Enter Admin phone" type="text"
                                            class="form-control">
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="">Password</label>
                                        <input name="password" id="admin_password" placeholder="Enter Admin password" type="password"
                                            class="form-control">
                                    </div>
                                    <button type="submit" class="mt-1 btn btn-primary">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <script>
   $("#create_admin").submit( function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: '<?php echo e(route("admin.admin.store")); ?>',
            data: formData,
            dataType:'json',
            contentType: false,
            processData: false,
            success: (data) => {
                if(data.success==true){
                    alert(data.message)
                }else{
                    alert(data.message)
                }
            }
        })

    })
       
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\y\project-1-employee-task-management-system\resources\views/admin/admin/create.blade.php ENDPATH**/ ?>