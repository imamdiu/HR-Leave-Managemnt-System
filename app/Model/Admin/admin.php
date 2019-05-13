<?php

namespace App\Model\admin;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    use Notifiable;

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'emp_id', 'name', 'email', 'role_id', 'password', 'status',
        'department','designation','joining_date','emp_leave_enjoy','emp_leave_balance','last_leave_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //  protected $fillable = [
    //     'name', 'email','status'
    // ];
}
