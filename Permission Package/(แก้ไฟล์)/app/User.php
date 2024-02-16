<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
#@
use Spatie\Permission\Traits\HasRoles;
#@
use App\Events\UserCreatedEvent;
class User extends Authenticatable
{
    use Notifiable;
    #@
    use HasRoles;
    #@
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'provider_name', 'provider_id', 'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    #Admin
    protected $table = 'users'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
    #Edmin

    /**
     * The event map for the model.
     *
     * @var array
     */
    // protected $dispatchesEvents = [
    //     'created' => UserCreatedEvent::class,        
    // ];






}
