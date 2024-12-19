<?php

namespace App\Enum;

enum PermissionEnum:string
{
    case RoomsManagement='RoomsManagement';
    case UserManagement='userManagement';
    case bookingManagement='bookingManagement';
    
}
