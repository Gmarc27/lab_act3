<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
protected $table = 'students';
// column sa table
protected $fillable = [
'studentID', 'studentFname','studnetLname', 'studentMname'
];
}