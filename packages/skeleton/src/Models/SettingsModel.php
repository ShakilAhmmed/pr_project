<?php

namespace SoftArch\PrProject\Skeleton\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsModel extends Model
{
    use HasFactory;

    protected $table = "settings";
    protected $primaryKey = "id";
    protected $fillable = ["company", "logo", "status"];
}
