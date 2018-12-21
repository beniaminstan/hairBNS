<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterClientRequest;
use App\Http\Requests\Auth\RegisterSalonRequest;
use App\Models\Enums\Roles;
use App\Models\Profile;
use App\Models\SalonBusiness;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationFormClient()
    {
        return view('auth.register_client');
    }

    public function showRegistrationFormSalon()
    {
        return view('auth.register_salon');
    }

    public function registerClient(RegisterClientRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = $this->createUser($request->all());

            $user->assignRole(Roles::CLIENT);

            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
        }

        $this->guard()->login($user);

        return redirect()->route('home');
    }

    public function registerSalon(RegisterSalonRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = $this->createSalon($request->all());

            $user->assignRole(Roles::SALON_MANAGER);

            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
        }

        $this->guard()->login($user);

        return redirect()->route('home');
    }


    /**
     * Create a new user and profile instance after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\User
     */
    protected function createUser(array $data)
    {
        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Profile::create([
            'user_id' => $user->id,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
        ]);

        return $user;
    }

    /**
     * Create a new salon, user and profile after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\User
     */
    protected function createSalon(array $data)
    {
        $user = $this->createUser($data);

        SalonBusiness::create([
            'user_id' => $user->id,
            'name' => $data['salon_name'],
            'cvr' => $data['cvr'],
            'bank_account_number' => $data['bank_account_number'],
        ]);

        return $user;
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
