<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobSeeker;
use App\Enums\AccountStatusEnum;

class JobSeekerController extends Controller
{
    public function index()
    {
        $pendingJobSeekers=JobSeeker::where('is_approved',0)->latest()->get();
        $approvedJobSeekers=JobSeeker::where('is_approved',AccountStatusEnum::Approve)->latest()->get();
        $rejectedJobSeekers=JobSeeker::where('is_approved',AccountStatusEnum::Reject)->latest()->get();
        return view('admin.job-seeker.index',compact('approvedJobSeekers','pendingJobSeekers','rejectedJobSeekers'));
    }

    public function approval(Request $request,JobSeeker $jobSeeker)
    {
        if($request->is_approved==1)
        {
            $jobSeeker->is_approved=AccountStatusEnum::Approve;
            session()->flash('approval_message','Job Seeker Account has been Approved');
        }else{
            $jobSeeker->is_approved=AccountStatusEnum::Reject;
            session()->flash('approval_message','Job Seeker Account has been disApproved');
        }
        $jobSeeker->update();
        return redirect()->route('admin.jobSeeker.index');
    }

    public function destroy(JobSeeker $jobSeeker)
    {
        $jobSeeker->delete();
    }

    public function show(JobSeeker $jobSeeker)
    {
        return view('admin.jobSeeker.show',compact('jobSeeker'));
    }


}