<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Admin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'admin';

        protected $guarded = ['id', 'created_at', 'updated_at'];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }