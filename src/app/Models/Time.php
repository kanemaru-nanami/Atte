<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'work-start',
        'work-end',
        'user_id',
    ];

    // リレーション
    public function user()
    {
        $this->belongsTo('App\User');
    }

    //任意の月の勤怠をスコープ
    public function scopeGetMonthAttendance($query,$month) {
        return $query->where('month',$month);
    }

    //任意の月の勤怠をスコープ
    public function scopeGetDayAttendance($query,$day) {
        return $query->where('day',$day);
    }
}
