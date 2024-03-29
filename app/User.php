<?php

namespace App;

use App\Model\Order;
use App\Model\ShippingAddress;
use App\Model\Wishlist;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'f_name', 'l_name', 'name', 'email','dob', 'password', 'phone', 'image', 'login_medium','is_active','social_id','role','is_phone_verified','temporary_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'integer',
        'is_phone_verified'=>'integer',
        'is_email_verified' => 'integer'
    ];

    public function wish_list()
    {
        return $this->hasMany(Wishlist::class, 'customer_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function shipping()
    {
        return $this->belongsTo(ShippingAddress::class, 'shipping_address');
    }
    public function isSubscription()
    {
        $date = Subscrption::where('user_id', '=', $this->id)->orderBy('id', 'DESC')->first();
        $currentDatee = date('Y-m-d');
        $currentDate = date('Y-m-d', strtotime($currentDatee));
        $startDate = date('Y-m-d', strtotime($date->start_date ?? '12-2-2021'));
        $endDate = date('Y-m-d', strtotime($date->end_date ?? '12-2-2021'));
        if (($currentDate >= $startDate) && ($currentDate <= $endDate)) {
            return true;
        } else {
            return false;
        }
    }

}
