<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchLog extends Model
{
    protected $table = 'purchLogs'; // Specify the table name

    protected $primaryKey = 'log_id'; // Specify the primary key

    protected $fillable = [
        'log_date',
        'log_time',
        'amount',
        'desc',
        'logType',
    ]; // Specify the fields that can be mass assigned
}
