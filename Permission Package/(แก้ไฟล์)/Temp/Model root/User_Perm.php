<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
#@
use Spatie\Permission\Traits\HasRoles;
#@
use App\Events\UserCreatedEvent;
class User_Perm extends Authenticatable
{
    use Notifiable;
    #@
    use HasRoles;
    #@
    protected $table = 'model_has_permissions';
}
