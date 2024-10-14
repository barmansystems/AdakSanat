<?php

namespace App\Http\Controllers\Panel;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetadFee extends Model
{
    use HasFactory;

    protected $guarded = [];
    const STATUS = [
        'pending' => 'در حال بررسی',
        'approved' => 'پرداخت شد',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
