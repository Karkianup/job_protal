<?php

namespace App\Enums;

//enum for whether employer's and jobseeker's account is approved by admin or not
enum AccountStatusEnum:int
{
    case Approve = 1;
    case Reject = 2;
}
