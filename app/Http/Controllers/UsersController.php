<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
        request()->validate([
            'first_name' => ['required','string', 'min:2', 'max:255'],
            'last_name' => ['required','string', 'min:2', 'max:255'],
            'email' => ['required','email','unique:users'],
            'job_title' => ['required'],
            'employee_code' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'job_title' => request('job_title'),
            'employee_code' => request('employee_code'),
            'password' => request('password')
        ]);

        return redirect('/users')->with('userCreated', 'New user is successfully created.');
    }

    public function edit(User $user)
    {
    	return view('admin.users.edit', compact('user'));
    }

    public function update(User $user)
    {
    	request()->validate([
    		'first_name' => ['required','string', 'min:2', 'max:255'],
    		'last_name' => ['required','string', 'min:2', 'max:255'],
    		'email' => ['required','email','unique:users,email,'.$user->id],
    		'job_title' => ['required'],
    		'employee_code' => ['required'],
    		'password' => ['required', 'string', 'min:8']
    	]);
    	if(request('password') === $user->password)
    	{
    		$user->update([
    			'first_name' => request('first_name'),
    			'last_name' => request('last_name'),
    			'email' => request('email'),
    			'job_title' => request('job_title'),
    			'employee_code' => request('employee_code'),
    		]);
    	} else {
    		$user->update([
    			'first_name' => request('first_name'),
    			'last_name' => request('last_name'),
    			'email' => request('email'),
    			'job_title' => request('job_title'),
    			'employee_code' => request('employee_code'),
    			'password' => Hash::make(request('password'))
    		]);
    	}

    	return redirect('/users/'.$user->id.'/edit')->with('userUpdated', 'Users informations are successfully updated.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('userDeleted', 'User is successfully deleted.');
    }
}
