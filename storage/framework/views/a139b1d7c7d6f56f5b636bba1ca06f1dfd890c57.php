<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<div id="kt_app_content" class="app-content" style="margin-top:5px">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container ">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0"><?php echo e($page_title); ?></h3>
                </div>
                <div class="content-header-right mt-3">
                    <a href="<?php echo e(route('menu.index')); ?>" title="All Menus" class="btn btn-primary btn-sm">View All</a>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="" class="collapse show">
                <!--begin::Form-->
                <form action="<?php echo e(route('menu.update', $menu->id)); ?>" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PATCH')); ?>


                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Menu of</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="menu_of" class="selectpicker" data-live-search="true">
                                    <option value="general" <?php echo e($menu->menu_of=='general'?'selected':''); ?>>General</option>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(Str::lower($role->name)); ?>" <?php echo e($menu->menu_of==Str::lower($role->name)?'selected':''); ?>><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <br />
                                <span style="color: red"><?php echo e($errors->first('menu_of')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Icon</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="icon" value="<?php echo e($menu->icon); ?>" class="form-control form-control-lg form-control-solid" placeholder="Copy font awesome tag from library and paste here e.g <i class='fa fa-user' aria-hidden='true'></i>"/>
                                <a href="https://fontawesome.com/v4/icons/" style="margin-top: 5px" target="_blank" class="btn btn-success">Choose Icon</a><br />
                                <br />
                                <span style="color: red"><?php echo e($errors->first('icon')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Label</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="label" value="<?php echo e($menu->label); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter label e.g All Users"/>
                                <br />
                                <span style="color: red"><?php echo e($errors->first('label')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Menu</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="menu" value="<?php echo e($menu->menu); ?>" class="form-control form-control-lg form-control-solid" placeholder="Enter Menu e.g user"/>
                                <br />
                                <span style="color: red"><?php echo e($errors->first('menu')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Columns</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <table class="table" id="columns">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Default</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="column_names[]" value="" placeholder="Enter column name">
                                                <span style="color: red"><?php echo e($errors->first('column_names.*')); ?></span>
                                            </td>
                                            <td style="width:250px">
                                                <select name="types[]" id="" class="form-control js-example-basic-single">
                                                    <option value="integer" selected>INT</option>
                                                    <option value="string">VARCHAR</option>
                                                    <option value="boolean">BOOLEAN</option>
                                                    <option value="date">DATE</option>
                                                    <option value="time">TIME</option>
                                                    <option value="datetime">DATETIME</option>
                                                    <option value="text">TEXT</option>
                                                    <option value="bigInteger">BIGINT</option>
                                                    <option value="decimal">DECIMAL</option>
                                                    <option value="float">FLOAT</option>
                                                    <option value="double">DOUBLE</option>
                                                    <option value="binary">BLOB (Image or other attachments)</option>
                                                </select>
                                            </td>
                                            <td style="width:130px">
                                                <select name="default_types[]" id="" class="form-control default_selection js-example-basic-single">
                                                    <option value="none" selected>None</option>
                                                    <option value="nullable">Null</option>
                                                    <option value="default">Default</option>
                                                </select>
                                                <span class="default-field"></span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm add-more-btn"><i class="fa fa-plus"></i></button>
                                            </td>
                                        </tr>
                                        <?php if($table_columns): ?>
                                            <?php $__currentLoopData = $table_columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" name="column_names[]" value="<?php echo e($column['field']); ?>" placeholder="Enter Menu e.g user">
                                                    </td>
                                                    <?php
                                                        $data_types = [
                                                            'integer'=>'INT',
                                                            'string'=>'VARCHAR',
                                                            'boolean'=>'BOOLEAN',
                                                            'date'=>'DATE',
                                                            'text'=>'TEXT',
                                                            'bigInteger'=>'BIGINT',
                                                            'float'=>'FLOAT',
                                                            'binary'=>'BLOB (Image or other attachments)'
                                                        ];
                                                    ?>
                                                    <td>
                                                        <select name="types[]" id="" class="form-control js-example-basic-single">
                                                            <?php $__currentLoopData = $data_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($key); ?>" <?php echo e($key==$column['type']?'selected':''); ?>><?php echo e($data_type); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </td>
                                                    <?php
                                                        $default_type = '';
                                                        if($column['default_type']=='NO'){
                                                            if($column['default_value'] != ''){
                                                                $default_type = 'default';
                                                            }else{
                                                                $default_type = 'none';
                                                            }
                                                        }elseif($column['default_type']=='YES'){
                                                            $default_type = 'nullable';
                                                        }else{
                                                            $default_type = 'default';
                                                        }
                                                    ?>
                                                    <td>
                                                        <select name="default_types[]" id="" class="form-control default_selection js-example-basic-single">
                                                            <option value="none" <?php echo e($default_type=='none'?'selected':''); ?>>None</option>
                                                            <option value="nullable" <?php echo e($default_type=='nullable'?'selected':''); ?>>Null</option>
                                                            <option value="default" <?php echo e($default_type=='default'?'selected':''); ?>>Default</option>
                                                        </select>
                                                        <span class="default-field">
                                                            <?php if($column['default_value'] != ''): ?>
                                                                <input type="text" name="defaults[]" value="<?php echo e($column['default_value']); ?>" class="form-control" style="margin-top:5px" placeholder="Enter default value">
                                                            <?php endif; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="fa fa-times"></i></button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Relations</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <button type="button" class="btn btn-success btn-sm add-rel-tab-btn" data-auto="0"><i class="fa fa-plus"></i> Add Relation Model</button>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <span id="relation-tables">
                            <?php
                                $rel_tab_data = json_decode($menu->rel_tab_data);
                                $rel_tab_names = $rel_tab_data->rel_tab_names;
                                $rel_tab_foreign_keys = $rel_tab_data->rel_tab_foreign_keys;
                                $rel_tab_relations = $rel_tab_data->rel_tab_relations;
                                $rel_tab_column_names = $rel_tab_data->rel_tab_column_names;
                                $rel_tab_column_types = $rel_tab_data->rel_tab_column_types;
                                $rel_tab_column_default_types = $rel_tab_data->rel_tab_column_default_types;
                            ?>
                            <?php if(count($rel_tab_names)>0): ?>
                                <?php $__currentLoopData = $rel_tab_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_tab_key=>$rel_tab_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="rel-table" data-auto="<?php echo e($r_tab_key); ?>">
                                        <div class="row mb-6">
                                            <label class="col-lg-2 col-form-label required fw-bold fs-6"> Relation Model Name</label>
                                            <div class="col-lg-3 fv-row">
                                                <input type="text" class="form-control" value="<?php echo e($rel_tab_name); ?>" name="rel_tab_names[]" placeholder="Enter relation model name e.g User">
                                            </div>
                                            <div class="col-lg-2 fv-row">
                                                <input type="text" class="form-control" value="<?php echo e($rel_tab_foreign_keys[$r_tab_key]); ?>" name="rel_tab_foreign_keys[]" placeholder="Enter foreign key">
                                            </div>
                                            <div class="col-lg-2 fv-row">
                                                <?php
                                                    $relations = ['hasOne'=>'Has One', 'hasMany'=>'Has Many', 'belongsTo'=>'Belongs To', 'belongsToMany'=>'Belongs To Many'];
                                                ?>
                                                <select class="form-control" multiple name="rel_tab_relations[<?php echo e($r_tab_key); ?>][]">
                                                    <?php $__currentLoopData = $relations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel_key=>$relation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php $bool = true; ?>
                                                        <?php $__currentLoopData = $rel_tab_relations[$r_tab_key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel_tab_relation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($rel_tab_relation==$rel_key): ?>
                                                                <option value="<?php echo e($rel_key); ?>" selected><?php echo e($relation); ?></option>
                                                                <?php $bool = false; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($bool): ?>
                                                            <option value="<?php echo e($rel_key); ?>"><?php echo e($relation); ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-1 fv-row">
                                                <button title="Remove Table" class="btn btn-danger btn-sm remove-tbl"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="row mb-6">
                                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Columns</label>
                                            <div class="col-lg-8 fv-row">
                                                <table class="table" id="columns">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Type</th>
                                                            <th>Default</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody">
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" name="rel_tab_column_names[<?php echo e($r_tab_key); ?>][]" value="" placeholder="Enter column name">
                                                                <span style="color: red"><?php echo e($errors->first("column_names.*")); ?></span>
                                                            </td>
                                                            <td style="width:250px">
                                                                <select name="rel_tab_column_types[<?php echo e($r_tab_key); ?>][]" id="" class="form-control js-example-basic-single">
                                                                    <option value="integer" selected>INT</option>
                                                                    <option value="string">VARCHAR</option>
                                                                    <option value="boolean">BOOLEAN</option>
                                                                    <option value="date">DATE</option>
                                                                    <option value="time">TIME</option>
                                                                    <option value="datetime">DATETIME</option>
                                                                    <option value="text">TEXT</option>
                                                                    <option value="bigInteger">BIGINT</option>
                                                                    <option value="decimal">DECIMAL</option>
                                                                    <option value="float">FLOAT</option>
                                                                    <option value="double">DOUBLE</option>
                                                                    <option value="binary">BLOB (Image or other attachments)</option>
                                                                </select>
                                                            </td>
                                                            <td style="width:130px">
                                                                <select name="rel_tab_column_default_types[<?php echo e($r_tab_key); ?>][]" id="" class="form-control default_selection js-example-basic-single">
                                                                    <option value="none" selected>None</option>
                                                                    <option value="nullable">Null</option>
                                                                    <option value="default">Default</option>
                                                                </select>
                                                                <span class="default-field"></span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-sm rel-add-more-btn"><i class="fa fa-plus"></i></button>
                                                            </td>
                                                        </tr>
                                                        <?php $__currentLoopData = $rel_tab_column_names[$r_tab_key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel_tab_col_key=>$rel_tab_column_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" name="rel_tab_column_names[<?php echo e($r_tab_key); ?>][]" value="<?php echo e($rel_tab_column_name); ?>" placeholder="Enter column name">
                                                                <span style="color: red"><?php echo e($errors->first("column_names.*")); ?></span>
                                                            </td>
                                                            <td style="width:250px">
                                                                <select name="rel_tab_column_types[<?php echo e($r_tab_key); ?>][]" id="" class="form-control js-example-basic-single">
                                                                    <option value="integer" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='integer'?'selected':''); ?>>INT</option>
                                                                    <option value="string" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='string'?'selected':''); ?>>VARCHAR</option>
                                                                    <option value="boolean" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='boolean'?'selected':''); ?>>BOOLEAN</option>
                                                                    <option value="date" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='date'?'selected':''); ?>>DATE</option>
                                                                    <option value="time" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='time'?'selected':''); ?>>TIME</option>
                                                                    <option value="datetime" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='datetime'?'selected':''); ?>>DATETIME</option>
                                                                    <option value="text" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='text'?'selected':''); ?>>TEXT</option>
                                                                    <option value="bigInteger" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='bigInteger'?'selected':''); ?>>BIGINT</option>
                                                                    <option value="decimal" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='decimal'?'selected':''); ?>>DECIMAL</option>
                                                                    <option value="float" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='float'?'selected':''); ?>>FLOAT</option>
                                                                    <option value="double" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='double'?'selected':''); ?>>DOUBLE</option>
                                                                    <option value="binary" <?php echo e($rel_tab_column_types[$r_tab_key][$rel_tab_col_key]=='binary'?'selected':''); ?>>BLOB (Image or other attachments)</option>
                                                                </select>
                                                            </td>
                                                            <td style="width:130px">
                                                                <select name="rel_tab_column_default_types[<?php echo e($r_tab_key); ?>][]" id="" class="form-control default_selection js-example-basic-single">
                                                                    <option value="none" <?php echo e($rel_tab_column_default_types[$r_tab_key][$rel_tab_col_key]=='none'?'selected':''); ?>>None</option>
                                                                    <option value="nullable" <?php echo e($rel_tab_column_default_types[$r_tab_key][$rel_tab_col_key]=='nullable'?'selected':''); ?>>Null</option>
                                                                    <option value="default" <?php echo e($rel_tab_column_default_types[$r_tab_key][$rel_tab_col_key]=='default'?'selected':''); ?>>Default</option>
                                                                </select>
                                                                <span class="default-field"></span>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger btn-sm remove-btn"><i class="fa fa-times"></i></button>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </span>
                    </div>

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button>

                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                            <!--begin::Indicator-->
                            <span class="indicator-label">
                                Save Changes
                            </span>
                            <span class="indicator-progress">
                                Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        $(document).on('click', '.rel-add-more-btn', function(){
            var rel_table_auto = $(this).parents('.rel-table').attr('data-auto');
            var html = '<tr>'+
                            '<td>'+
                                '<input type="text" class="form-control" name="rel_tab_column_names['+rel_table_auto+'][]" value="" placeholder="Enter Menu e.g user">'+
                            '</td>'+
                            '<td>'+
                                '<select name="rel_tab_column_types['+rel_table_auto+'][]" id="" class="form-control js-example-basic-single">'+
                                    '<option value="integer">INT</option>'+
                                    '<option value="string">VARCHAR</option>'+
                                    '<option value="boolean">BOOLEAN</option>'+
                                    '<option value="date">DATE</option>'+
                                    '<option value="text">TEXT</option>'+
                                    '<option value="bigInteger">BIGINT</option>'+
                                    '<option value="float">FLOAT</option>'+
                                    '<option value="binary">BLOB (Image or other attachments)</option>'+
                                '</select>'+
                            '</td>'+
                            '<td>'+
                                '<select name="rel_tab_column_default_types['+rel_table_auto+'][]" id="" class="form-control default_selection js-example-basic-single">'+
                                    '<option value="none" selected>None</option>'+
                                    '<option value="nullable">Null</option>'+
                                    '<option value="default">Default</option>'+
                                '</select>'+
                                '<span class="default-field"></span>'+
                            '</td>'+
                            '<td>'+
                                '<button type="button" class="btn btn-danger btn-sm remove-btn"><i class="fa fa-times"></i></button>'+
                            '</td>'+
                        '</tr>';
            $(this).parents("#columns > tbody").append(html);
        });
        $(document).on('click', '.add-rel-tab-btn', function(){
            var rel_table_auto = $(this).attr('data-auto');
            var rel_table_auto = parseInt(rel_table_auto);
            var html = '<div class="rel-table" data-auto="'+rel_table_auto+'">'+
                            '<div class="row mb-6">'+
                                '<label class="col-lg-2 col-form-label required fw-bold fs-6"> Relation Model Name</label>'+
                                '<div class="col-lg-3 fv-row">'+
                                    '<input type="text" class="form-control" name="rel_tab_names[]" placeholder="Enter relation model name e.g User">'+
                                '</div>'+
                                '<div class="col-lg-2 fv-row">'+
                                    '<input type="text" class="form-control" name="rel_tab_foreign_keys[]" placeholder="Enter foreign key">'+
                                '</div>'+
                                '<div class="col-lg-2 fv-row">'+
                                    '<select class="form-control" multiple name="rel_tab_relations['+rel_table_auto+'][]">'+
                                        '<option value="" selected>Select relation</option>'+
                                        '<option value="hasOne">Has One</option>'+
                                        '<option value="hasMany">Has Many</option>'+
                                        '<option value="belongsTo">Belongs To</option>'+
                                        '<option value="belongsToMany">Belongs To Many</option>'+
                                    '</select>'+
                                '</div>'+
                                '<div class="col-lg-1 fv-row">'+
                                    '<button title="Remove Table" class="btn btn-danger btn-sm remove-tbl"><i class="fa fa-times"></i></button>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row mb-6">'+
                                '<label class="col-lg-2 col-form-label required fw-bold fs-6">Columns</label>'+
                                '<div class="col-lg-8 fv-row">'+
                                    '<table class="table" id="columns">'+
                                        '<thead>'+
                                            '<tr>'+
                                                '<th>Name</th>'+
                                                '<th>Type</th>'+
                                                '<th>Default</th>'+
                                                '<th>Action</th>'+
                                            '</tr>'+
                                        '</thead>'+
                                        '<tbody id="tbody">'+
                                            '<tr>'+
                                                '<td>'+
                                                    '<input type="text" class="form-control" name="rel_tab_column_names['+rel_table_auto+'][]" value="" placeholder="Enter column name">'+
                                                    '<span style="color: red"><?php echo e($errors->first("column_names.*")); ?></span>'+
                                                '</td>'+
                                                '<td style="width:250px">'+
                                                    '<select name="rel_tab_column_types['+rel_table_auto+'][]" id="" class="form-control js-example-basic-single">'+
                                                        '<option value="integer" selected>INT</option>'+
                                                        '<option value="string">VARCHAR</option>'+
                                                        '<option value="boolean">BOOLEAN</option>'+
                                                        '<option value="date">DATE</option>'+
                                                        '<option value="time">TIME</option>'+
                                                        '<option value="datetime">DATETIME</option>'+
                                                        '<option value="text">TEXT</option>'+
                                                        '<option value="bigInteger">BIGINT</option>'+
                                                        '<option value="decimal">DECIMAL</option>'+
                                                        '<option value="float">FLOAT</option>'+
                                                        '<option value="double">DOUBLE</option>'+
                                                        '<option value="binary">BLOB (Image or other attachments)</option>'+
                                                    '</select>'+
                                                '</td>'+
                                                '<td style="width:130px">'+
                                                    '<select name="rel_tab_column_default_types['+rel_table_auto+'][]" id="" class="form-control default_selection js-example-basic-single">'+
                                                        '<option value="none" selected>None</option>'+
                                                        '<option value="nullable">Null</option>'+
                                                        '<option value="default">Default</option>'+
                                                    '</select>'+
                                                    '<span class="default-field"></span>'+
                                                '</td>'+
                                                '<td>'+
                                                    '<button type="button" class="btn btn-success btn-sm rel-add-more-btn"><i class="fa fa-plus"></i></button>'+
                                                '</td>'+
                                            '</tr>'+
                                        '</tbody>'+
                                    '</table>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
            rel_table_auto = parseInt(++rel_table_auto);
            $(this).attr('data-auto', rel_table_auto);
            $('#relation-tables').append(html);
        });
        $(document).on('click', '.remove-tbl', function(){
            $(this).parents('.rel-table').remove();
        });
        $(document).ready(function(){
            $('.default_selection').parents('td').find('.default-field').html('<input type="hidden" name="defaults[]" value="1" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
        });
        $(document).on('change', '.default_selection', function(){
            var default_val = $(this).val();
            if(default_val=='default'){
                $(this).parents('td').find('.default-field').html('<input type="text" name="defaults[]" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
            }else{
                $(this).parents('td').find('.default-field').html('<input type="hidden" name="defaults[]" value="1" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
            }
        });
        $(document).on('click', '.add-more-btn', function(){
            var html = '<tr>'+
                            '<td>'+
                                '<input type="text" class="form-control" name="column_names[]" value="" placeholder="Enter Menu e.g user">'+
                            '</td>'+
                            '<td>'+
                                '<select name="types[]" id="" class="form-control js-example-basic-single">'+
                                    '<option value="integer">INT</option>'+
                                    '<option value="string">VARCHAR</option>'+
                                    '<option value="boolean">BOOLEAN</option>'+
                                    '<option value="date">DATE</option>'+
                                    '<option value="text">TEXT</option>'+
                                    '<option value="bigInteger">BIGINT</option>'+
                                    '<option value="float">FLOAT</option>'+
                                    '<option value="binary">BLOB (Image or other attachments)</option>'+
                                '</select>'+
                            '</td>'+
                            '<td>'+
                                '<select name="default_types[]" id="" class="form-control default_selection js-example-basic-single">'+
                                    '<option value="none" selected>None</option>'+
                                    '<option value="nullable">Null</option>'+
                                    '<option value="default">Default</option>'+
                                '</select>'+
                                '<span class="default-field"></span>'+
                            '</td>'+
                            '<td>'+
                                '<button type="button" class="btn btn-danger btn-sm remove-btn"><i class="fa fa-times"></i></button>'+
                            '</td>'+
                        '</tr>';
            $("#columns > tbody").append(html);
        });

        $(document).on('click', '.remove-btn', function(){
            $(this).parents('tr').remove();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\crm-default\resources\views/admin/menus/edit.blade.php ENDPATH**/ ?>