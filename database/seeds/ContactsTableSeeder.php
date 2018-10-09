<?php

use App\Contact;
use Illuminate\Database\Seeder;

/**
 * Class ContactsTableSeeder.
 */
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name'  => 'Donald Duck',
            'email' => 'donald@whitehouse.gov',
            'phone' => '203-555-1212',
            'city'  => 'Washington',
            'state' => 'DC',
            'zip'   => '54321-0000',
        ]);

        Contact::create([
            'name'  => 'Marlon Bundo',
            'email' => 'marlon@whitehouse.gov',
            'phone' => '203-555-1213',
            'city'  => 'Washington',
            'state' => 'DC',
            'zip'   => '54321-0000',
        ]);
    }
}
