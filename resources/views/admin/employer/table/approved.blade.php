             <div class="card card-bordered card-preview">
                 <div class="card-inner">
                     <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                         <thead>
                             <tr class="nk-tb-item nk-tb-head">
                                 <th class="nk-tb-col"><span class="sub-text">S.N</span></th>
                                 <th class="nk-tb-col tb-col-mb"><span class="sub-text">Name</span></th>
                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Total Posts</span></th>
                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                 <th class="nk-tb-col tb-col-md"><span class="sub-text"></span></th>


                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($approvedEmployers as $employer)
                                 <tr class="nk-tb-item" id="row{{ $employer->id }}">
                                     <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                         <span class="tb-amount">{{ $loop->iteration }}</span>
                                     </td>
                                     <td class="nk-tb-col tb-col-md">
                                         <span>{{ $employer->name }}</span>
                                     </td>
                                     <td class="nk-tb-col tb-col-md">
                                         <span>{{ $employer->email }}</span>
                                     </td>
                                     <td class="nk-tb-col tb-col-md">
                                         <span>Total posts</span>
                                     </td>
                                     <td class="nk-tb-col tb-col-md">

                                         <span class="badge rounded-pill bg-success">approved</span>

                                     </td>
                                     <td class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-1">
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                         data-bs-toggle="dropdown"><em
                                                             class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">

                                                             <li><a href="{{ route('admin.employer.show',$employer->id) }}"><em
                                                                         class="icon ni ni-eye"></em><span>View
                                                                         Details</span></a></li>
                                                             <li><a data-bs-toggle="modal"
                                                                     data-bs-target="#approved"><em
                                                                         class="icon ni ni-repeat"></em><span>Approve</span></a>
                                                             </li>
                                                             <li><a class="deleteButton" data-id="{{ $employer->id }}"><em
                                                                         class="icon ni ni-activity-round"></em><span>Delete</span></a>
                                                             </li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </td>
                                 </tr>
                                 <!-- Modal Content Code -->
                                 <div class="modal fade" tabindex="-1" id="approved">
                                     <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                             <a href="#" class="close" data-bs-dismiss="modal"
                                                 aria-label="Close">
                                                 <em class="icon ni ni-cross"></em>
                                             </a>
                                             <div class="modal-header">
                                                 <h5 class="modal-title">Employer Approval</h5>
                                             </div>
                                             <div class="modal-body">
                                                 <p>Do you want to approve ?
                                                 </p>
                                             </div>
                                             <div class="modal-footer bg-light">
                                                 <span class="sub-text">
                                                     <form style="display:inline" method="POST"
                                                         action="{{ route('admin.employer.approval', $employer->id) }}">
                                                         @csrf
                                                         @method('put')
                                                         <input type="hidden" value="1" name="is_approved">
                                                         <button class="btn btn-primary">Yes</button>
                                                     </form>
                                                     <form style="display:inline" method="POST"
                                                         action="{{ route('admin.employer.approval', $employer->id) }}">
                                                         @csrf
                                                         @method('put')
                                                         <input type="hidden" value="2" name="is_approved">
                                                         <button class="btn btn-danger">No</button>
                                                     </form>
                                                 </span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
