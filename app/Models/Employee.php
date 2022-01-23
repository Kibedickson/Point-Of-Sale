<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'payroll_number',
        'phone',
        'email',
        'designation',
        'id_number',
        'joined_at',
        'kra_pin',
        'nhif_no',
        'nssf_no',
        'salary',
        'daily_rate',
        'payment_type',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'joined_at' => 'date',
    ];

    public function getPayrollNumberAttribute($value): string
    {
        return $value . '-DG';
    }

    public static function generatePayrollNumber()
    {
        $lastEmployee = Employee::query()->orderBy('id', 'desc')->first();

        if ($lastEmployee) {
            return $lastEmployee->id + 1;
        }
        return 1;
    }

    public function payrolls(): HasMany
    {
        return $this->hasMany(Payroll::class);
    }
}
