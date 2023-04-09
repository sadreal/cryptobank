<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header d-flex align-items-center">
                <h4 class="header-title"><?php echo e(_lang('User List')); ?></h4>
                <a class="btn btn-primary btn-sm ml-auto ajax-modal" data-title="<?php echo e(_lang('Create System User')); ?>"
                    href="<?php echo e(route('system_users.create')); ?>"><i class="icofont-plus-circle"></i> <?php echo e(_lang('Add New')); ?></a>
            </div>

            <div class="card-body">
                <table id="users_table" class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th><?php echo e(_lang('Name')); ?></th>
                            <th><?php echo e(_lang('Email')); ?></th>
                            <th><?php echo e(_lang('User Type')); ?></th>
                            <th><?php echo e(_lang('Role')); ?></th>
                            <th><?php echo e(_lang('Status')); ?></th>
                            <th class="text-center"><?php echo e(_lang('Action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-id="row_<?php echo e($user->id); ?>">
                            <td class='profile_picture text-center'><img
                                    src="<?php echo e(profile_picture($user->profile_picture)); ?>" class="thumb-sm img-thumbnail">
                            </td>
                            <td class='name'><?php echo e($user->name); ?></td>
                            <td class='email'><?php echo e($user->email); ?></td>
                            <td class='user_type'><?php echo e(strtoupper($user->user_type)); ?></td>
                            <td class='role_id'><?php echo e($user->role->name); ?></td>
                            <td class='status'><?php echo xss_clean(status($user->status)); ?></td>
                            <td class="text-center">
                                <span class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown">
                                        <?php echo e(_lang('Action')); ?>

                                    </button>
                                    <form action="<?php echo e(action('SystemUserController@destroy', $user['id'])); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <input name="_method" type="hidden" value="DELETE">

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a href="<?php echo e(action('SystemUserController@edit', $user['id'])); ?>"
                                                data-title="<?php echo e(_lang('Update User')); ?>"
                                                class="dropdown-item ajax-modal"><i class="icofont-ui-edit"></i>
                                                <?php echo e(_lang('Edit')); ?></a>
                                            <a href="<?php echo e(action('SystemUserController@show', $user['id'])); ?>"
                                                data-title="<?php echo e(_lang('View User')); ?>"
                                                class="dropdown-item ajax-modal"><i class="icofont-eye-alt"></i>
                                                <?php echo e(_lang('View')); ?></a>
                                            <button class="btn-remove dropdown-item" type="submit"><i
                                                    class="icofont-trash"></i> <?php echo e(_lang('Delete')); ?></button>
                                        </div>
                                    </form>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/system_user/list.blade.php ENDPATH**/ ?>