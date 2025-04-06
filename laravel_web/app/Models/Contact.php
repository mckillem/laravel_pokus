<?php

namespace App\Models;

use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Contact
{
    /** @use HasFactory<ContactFactory> */
    use HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected array $fillable = [
        'firstname',
        'lastname',
        'message',
    ];

    public static function create(array $values): void
    {
        DB::table('contacts')->insert([
            'first_name' => $values['firstname'],
            'last_name' => $values['lastname'],
            'message' => $values['message'],
        ]);
    }
}
