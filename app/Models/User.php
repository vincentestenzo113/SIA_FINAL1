<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'tblteacher';
public $timestamps = false;
// column sa table
protected $fillable = [
'tblteacherid','firstname', 'lastname', 'middlename', 'age'
];
}