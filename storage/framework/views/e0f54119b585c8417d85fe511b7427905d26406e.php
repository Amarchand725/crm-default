<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div id="kt_app_content" class="app-content " style="margin-top:2%">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container ">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Card widget 18-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body py-9">
                            <!--begin::Row-->
                            <div class="row gx-9 h-100">
                                <!--begin::Col-->
                                <div class="col-sm-12">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column h-100">
                                        <!--begin::Header-->
                                        <div class="mb-7">
                                            <!--begin::Headin-->
                                            <div class="d-flex flex-stack mb-6">
                                                <!--begin::Title-->
                                                <div class="flex-shrink-0 me-5">
                                                    <span class="text-gray-800 fs-1 fw-bold"><?php echo e(count($data['users'])); ?> USERS</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                    <!--begin::Date-->
                                                    <span class="fs-6 text-gray-700 fw-bold">ACTIVE USERS</span>
                                                    <!--end::Date-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold text-gray-400"><?php echo e(count($data['active_users'])); ?></div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                    <!--begin::Number-->
                                                    <span class="fs-6 text-gray-700 fw-bold">IN-ACTIVE USERS</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold text-gray-400"><?php echo e(count($data['in_active_users'])); ?></div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Body-->

                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack mt-auto bd-highlight">
                                            <!--begin::Users group-->
                                            <div class="symbol-group symbol-hover flex-nowrap">
                                                <?php $__currentLoopData = $data['new_users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php $avatar = ''; ?>
                                                    <?php if(!empty($user->hasProfile->avatar)): ?>
                                                        <?php
                                                            $avatar = asset('public/avatar').'/'.$user->hasProfile->avatar;
                                                        ?>
                                                    <?php endif; ?>
                                                    <div class="symbol symbol-35px symbol-circle" title="<?php echo e($user->name); ?>" data-bs-toggle="tooltip" aria-label="<?php echo e($user->name); ?>" data-kt-initialized="1">
                                                        <?php if($avatar): ?>
                                                            <img alt="Pic" src="<?php echo e($avatar); ?>">
                                                        <?php else: ?>
                                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">
                                                                <?php echo e(Str::upper(mb_substr($user->name, 0, 1))); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <!--end::Users group-->
                                            <!--begin::Actions-->
                                            <a href="<?php echo e(route('user.index')); ?>" class="text-primary opacity-75-hover fs-6 fw-semibold">View All Users
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                            <span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"></path>
                                                    <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"></rect>
                                                    <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon--></a>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 18-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xxl-6">
                    <!--begin::Card widget 18-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body py-9">
                            <!--begin::Row-->
                            <div class="row gx-9 h-100">
                                <!--begin::Col-->
                                <div class="col-sm-12">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column h-100">
                                        <!--begin::Header-->
                                        <div class="mb-7">
                                            <!--begin::Headin-->
                                            <div class="d-flex flex-stack mb-6">
                                                <!--begin::Title-->
                                                <div class="flex-shrink-0 me-5">
                                                    <span class="text-gray-800 fs-1 fw-bold"><?php echo e(count($data['roles'])); ?> ROLES</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                    <!--begin::Date-->
                                                    <span class="fs-6 text-gray-700 fw-bold">ACTIVE ROLES</span>
                                                    <!--end::Date-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold text-gray-400"><?php echo e(count($data['active_roles'])); ?></div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                    <!--begin::Number-->
                                                    <span class="fs-6 text-gray-700 fw-bold">IN-ACTIVE ROLES</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold text-gray-400"><?php echo e(count($data['in_active_roles'])); ?></div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Body-->

                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack mt-auto bd-highlight">
                                            <!--begin::Users group-->
                                            <div class="symbol-group symbol-hover flex-nowrap">
                                                <?php $__currentLoopData = $data['new_roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="symbol symbol-35px symbol-circle" title="<?php echo e($role->name); ?>" data-bs-toggle="tooltip" aria-label="<?php echo e($role->name); ?>" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">
                                                            <?php echo e(Str::upper(mb_substr($role->name, 0, 1))); ?>

                                                        </span>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <!--end::Users group-->
                                            <!--begin::Actions-->
                                            <a href="<?php echo e(route('role.index')); ?>" class="text-primary opacity-75-hover fs-6 fw-semibold">View All Roles
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                            <span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"></path>
                                                    <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"></rect>
                                                    <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon--></a>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 18-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\crm-default\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>