@extends('layouts.admin')
@section('content')
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">User Manage</a></li>
            <li class="breadcrumb-item active"><a href="#">Job Seeker</a></li>
            {{--  <li class="breadcrumb-item active" aria-current="page">Data</li>  --}}
        </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1">Approval Pending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" data-bs-toggle="tab" href="#tabItem2">Approved</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" data-bs-toggle="tab" href="#tabItem3">Rejected</a>
                    </li>
                </ul>
                <br>
                @if (Session::has('approval_message'))
                    <div class="alert alert-fill alert-icon alert-primary" role="alert">
                        <em class="icon ni ni-alert-circle"></em>
                        {{ Session::get('approval_message') }}
                    </div>
                @endif
                <div class="tab-content">

                    {{-- for pending employee's accounnt --}}
                    <div class="tab-pane active" id="tabItem1">
                        @include('admin.job-seeker.table.pending', [
                            'pendingJobSeekers' => $pendingJobSeekers,
                        ]);
                    </div>


                    <div class="tab-pane" id="tabItem2">
                        @include('admin.job-seeker.table.approved', [
                            'approvedJobSeekers' => $approvedJobSeekers,
                        ]);
                    </div>
                    <div class="tab-pane" id="tabItem3">
                        @include('admin.job-seeker.table.rejected', [
                            'rejectedJobSeekers' => $rejectedJobSeekers,
                        ]);

                    </div>

                </div>
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
                    'url': `/admin/employer/${id}`,
                    data: {
                        id: id,
                    },
                    success: function() {
                        $('#row' + id).remove();
                        toastr.error('Successfully destroyed');
                    }
                })
            });
        });
    </script>
@endpush
