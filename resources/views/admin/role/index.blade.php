@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">User Manage</a></li>
            <li class="breadcrumb-item active"><a href="#">Role</a></li>
            {{--  <li class="breadcrumb-item active" aria-current="page">Data</li>  --}}
        </ol>
    </nav>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Role</h4>

            </div>
        </div>
        <a href="{{ route('admin.role.create') }}" class="btn btn-primary mb-1">Create</a>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col"><span class="sub-text">S.N</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Title</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr class="nk-tb-item" id="row{{ $role->id }}">
                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                    <span class="tb-amount">{{ $loop->iteration }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span>{{ $role->title }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    @if ($role->is_super_admin)
                                        --
                                    @else
                                        <span>
                                            <a class="btn btn-success"
                                                href="{{ route('admin.role.edit', $role->id) }}">Edit</a>
                                        </span>
                                        <span class="ml-5">
                                            <a class="btn btn-danger deleteButton" data-id={{ $role->id }}>Delete</a>
                                        </span>
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.deleteButton').click(function() {
                confirm('Are you sure ?')
                let id = $(this).data('id');
                $.ajax({
                    type: 'delete',
                    'url': `/admin/role/${id}`,
                    data: {
                        id: id,
                    },
                    success: function() {
                        $('#row' + id).remove();
                    }
                })
            });

            @if (Session::has('message'))

                toastr.success('{{ Session('message') }}')
            @endif
        });
    </script>
@endpush
