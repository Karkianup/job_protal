<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employer;
use App\Enums\AccountStatusEnum;

class EmployerController extends Controller
{
    public function index()
    {
        $pendingEmployers=Employer::where('is_approved',0)->latest()->get();
        $approvedEmployers=Employer::where('is_approved',AccountStatusEnum::Approve)->latest()->get();
        $rejectedEmployers=Employer::where('is_approved',AccountStatusEnum::Reject)->latest()->get();
        return view('admin.employer.index',compact('approvedEmployers','pendingEmployers','rejectedEmployers'));
    }

    public function approval(Request $request,Employer $employer)
    {
        if($request->is_approved==1)
        {
            $employer->is_approved=AccountStatusEnum::Approve;
            session()->flash('approval_message','Employer Account has been Approved');
        }else{
            $employer->is_approved=AccountStatusEnum::Reject;
            session()->flash('approval_message','Employer Account has been disApproved');
        }
        $employer->update();
        return redirect()->route('admin.employer.index');
    }

    public function destroy(Employer $employer)
    {
        $employer->delete();
    }

    public function show(Employer $employer)
    {
        return view('admin.employer.show',compact('employer'));
    }


}
