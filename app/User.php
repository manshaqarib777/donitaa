<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use App\Models\Cart;
use App\Notifications\EmailVerificationNotification;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasApiTokens;

    public function sendEmailVerificationNotification()
    {
        $this->notify(new EmailVerificationNotification());
    }

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'city', 'postal_code', 'phone', 'country', 'provider_id', 'email_verified_at', 'verification_code','country_id','state_id','area_id'
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function wishlists()
    {
    return $this->hasMany(Wishlist::class)->withoutGlobalScope('restriction');
    }

    public function customer()
    {
    return $this->hasOne(Customer::class)->withoutGlobalScope('restriction');
    }

    public function affiliate_user()
    {
    return $this->hasOne(AffiliateUser::class)->withoutGlobalScope('restriction');
    }

    public function affiliate_withdraw_request()
    {
    return $this->hasMany(AffiliateWithdrawRequest::class)->withoutGlobalScope('restriction');
    }
    public function staff()
    {
    return $this->hasOne(Staff::class)->withoutGlobalScope('restriction');
    }

    public function orders()
    {
    return $this->hasMany(Order::class)->withoutGlobalScope('restriction');
    }

    public function wallets()
    {
    return $this->hasMany(Wallet::class)->orderBy('created_at', 'desc')->withoutGlobalScope('restriction');
    }

    public function club_point()
    {
    return $this->hasOne(ClubPoint::class)->withoutGlobalScope('restriction');
    }

    public function customer_package()
    {
        return $this->belongsTo(CustomerPackage::class)->withoutGlobalScope('restriction');
    }

    public function customer_package_payments()
    {
        return $this->hasMany(CustomerPackagePayment::class)->withoutGlobalScope('restriction');
    }

    public function customer_products()
    {
        return $this->hasMany(CustomerProduct::class)->withoutGlobalScope('restriction');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->withoutGlobalScope('restriction');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class)->withoutGlobalScope('restriction');
    }


    public function routeNotificationForEbernate()
    {
        return $this->phone;
    }

    public function userClient(){
		return $this->hasOne('App\UserClient', 'user_id' , 'id')->withoutGlobalScope('restriction');
	}
    public function userReceiver(){
		return $this->hasOne('App\UserReceiver', 'user_id' , 'id')->withoutGlobalScope('restriction');
	}

    public function userCaptain(){
		return $this->hasOne('App\UserCaptain', 'user_id' , 'id')->withoutGlobalScope('restriction');
	}

    public function userBranch(){
		return $this->hasOne('App\UserBranch', 'user_id' , 'id')->withoutGlobalScope('restriction');
	}
    public function country(){
		return $this->belongsTo('App\Country', 'country_id','id');
	}
    public function state(){
		return $this->belongsTo('App\State', 'state_id','id');
	}
    public function area(){
		return $this->belongsTo('App\Area', 'area_id','id');
	}
}
