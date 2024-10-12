<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Register extends Authenticatable
{
    use Notifiable;

    protected $table = 'register';
    public $timestamps = false;
    // تأكد من إضافة الحقول هنا
    protected $fillable = [
        'userName',
        'Pass',
        'Gender',
        'Phone',
        'Adress',
        'Email',
    ];

    protected $hidden = [
        'Pass', // إذا كنت ترغب في إخفاء كلمة المرور
    ];
    
}
?>