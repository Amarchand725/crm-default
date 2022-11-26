@extends('admin.layouts.app')
@section('title', $page_title)
@section('content')
<div id="kt_app_content" class="app-content" style="margin-top:5px">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container ">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" >
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">{{ $page_title }}</h3>
                </div>
                <div class="content-header-right mt-3">
                    <a href="{{ route('role.index') }}" title="All Roles" class="btn btn-primary btn-sm">View All</a>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="" class="collapse show">
                <!--begin::Form-->
                <form action="{{ route('permission.store')}}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf

                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Group Name</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-lg form-control-solid" placeholder="Enter permission group name e.g User"/>
                                <span style="color: red">{{ $errors->first('name') }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Sub Permissions</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!-- Default checkbox -->
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="all" id="checkAll"/>
                                        <label class="form-check-label" for="checkAll"> <strong>All</strong> </label>
                                    </div>
                                </div>

								<!-- Default checkbox -->
                                <div class="col-lg-3 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" name="permissions[]" type="checkbox" value="list" id="list" checked/>
                                        <label class="form-check-label" for="list"> <strong>List</strong></label>
                                    </div>
                                </div>

								<!-- Checked checkbox -->
                                <div class="col-lg-3 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" name="permissions[]" type="checkbox" value="create" id="create"/>
                                        <label class="form-check-label" for="create"> <strong>Create</strong></label>
                                    </div>
                                </div>

								<!-- Checked checkbox -->
                                <div class="col-lg-3 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" name="permissions[]" type="checkbox" value="edit" id="edit"/>
                                        <label class="form-check-label" for="edit"> <strong>Edit</strong></label>
                                    </div>
                                </div>

								<!-- Checked checkbox -->
                                <div class="col-lg-3 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" name="permissions[]" type="checkbox" value="delete" id="delete"/>
                                        <label class="form-check-label" for="delete"> <strong>Delete</strong></label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->

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
@endsection
@push('js')
<script>
	$("#checkAll").click(function () {
		$('input:checkbox').not(this).prop('checked', this.checked);
	});
</script>

@endpush
