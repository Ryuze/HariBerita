<?php

namespace App\Models;

use App\Http\Controllers\UserController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

class AllUser extends UserController
{
	public $username;
	public $first_name;
	public $last_name;
	public $email;
	public $password;

	public function find($id)
	{
		$this->db->select('users.*');
		$this->db->from('users');
		$this->db->where('users.id', $id);
	
		return $this->db->get()->row();
	}

	public function all()
	{
		$this->db->select('id, name, email, created_at, updated_at');
		$this->db->from('users');
		$this->db->order_by('name', 'asc');

		return $this->db->get()->result();
	}

	public function count()
	{
		return $this->db->count_all_results('users');
	}

    // public function create()
    // {
        
    // }

	public function hapus($id)
	{
        // DB::table('users')->where('id',$id)->delete();
         
	}


}

