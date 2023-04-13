<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable1 = new User;
        $variable1->name = "Spiderman";
        $variable1->real_name = "Peter Benjamin Parker";
        $variable1->gender = "Male";
        $variable1->universe_id = 4;
        $variable1->email = "spiderman@gmail.com";
        $variable1->password =Hash::make('Password1');
        $variable1->save();
        
        $variable2 = new User;
        $variable2->name = "Hulk";
        $variable2->real_name = "Robert Bruce Banner";
        $variable2->gender = "Male";
        $variable2->universe_id = 4;
        $variable2->email = "hulk@gmail.com";
        $variable2->password =Hash::make('Password2');
        $variable2->save();

        $variable3 = new User;
        $variable3->name = "Capitan America";
        $variable3->real_name = "Steven Rogers";
        $variable3->gender = "Male";
        $variable3->universe_id = "4";
        $variable3->email = "capitanamerica@gmail.com";
        $variable3->password =Hash::make('Password3');
        $variable3->save();

        $variable4 = new User;
        $variable4->name = "Superman";
        $variable4->real_name = "Clark Kent";
        $variable4->gender = "Male";
        $variable4->universe_id = "2";
        $variable4->email = "superman@gmail.com";
        $variable4->password =Hash::make('Password4');
        $variable4->save();

        $variable5 = new User;
        $variable5->name = "Batman";
        $variable5->real_name = "Bruce Wayne";
        $variable5->gender = "Male";
        $variable5->universe_id = "5";
        $variable5->email = "batman@gmail.com";
        $variable5->password =Hash::make('Password5');
        $variable5->save();

        $variable6 = new User;
        $variable6->name = "Scarlet Spider";
        $variable6->real_name = "Ben Reilly";
        $variable6->gender = "Male";
        $variable6->universe_id = "5";
        $variable6->email = "scarletspider@gmail.com";
        $variable6->password =Hash::make('Password6');
        $variable6->save();

        $variable7 = new User;
        $variable7->name = "Wonder Woman";
        $variable7->real_name = "Diana Prince";
        $variable7->gender = "Female";
        $variable7->universe_id = "1";
        $variable7->email = "wonderwoman@gmail.com";
        $variable7->password =Hash::make('Password7');
        $variable7->save();

        $variable8 = new User;
        $variable8->name = "Doomsday";
        $variable8->real_name = "Unknown";
        $variable8->gender = "Male";
        $variable8->universe_id = "3";
        $variable8->email = "doomsday@gmail.com";
        $variable8->password =Hash::make('Password8');
        $variable8->save();

        $variable9 = new User;
        $variable9->name = "Scarlet Witch";
        $variable9->real_name = "Wanda Maximoff";
        $variable9->gender = "Female";
        $variable9->universe_id = "5";
        $variable9->email = "scarletwitch@gmail.com";
        $variable9->password =Hash::make('Password9');
        $variable9->save();

        $variable10 = new User;
        $variable10->name = "Night Wing";
        $variable10->real_name = "Dick Grayson";
        $variable10->gender = "Male";
        $variable10->universe_id = "3";
        $variable10->email = "nightwing@gmail.com";
        $variable10->password =Hash::make('Password10');
        $variable10->save();

    }
}
