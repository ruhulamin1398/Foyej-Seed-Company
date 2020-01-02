<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('roles')->insert([
            [
                'role' => 'Admin'
            ],
            [
                'role' => 'Staff'
            ],

        ]);  

        DB::table('users')->insert(
            [
             ['name' => 'ruhul',
            'role_id' => 1,
            'email' => 'ruhul.ok@gmail.com',
            'address' => 'Habigong',
            'phone' => '01840000408',
            'salary' => '50000',
            'password' => Hash::make(1116430725),
            'status'    =>1
        ],
        
        [
        'name' => 'sagor',
        'role_id' => 2,
        'email' => 'sagor.sec@gmail.com',
        'address' => 'Tangail',
        'phone' => '01799076632',
        'salary' => '20000',
        'password' => Hash::make(1116430725),
        'status'    =>1
    ],

        ]);

        DB::table('suppliers')->insert([
            ['name' => 'ruhul','phone' => '01840000408','address' => 'Habigong','company' => 'Pran','due' => '5000'],
            ['name' => 'sagor','phone' => '01799076632','address' => 'Tangail','company' => 'Arong','due' => '7000'],
            ]);

            DB::table('categories')->insert([
                ['name' => 'stricer','description' => 'just a sign'],
                ['name' => 'complete','description' => 'now ready for sele'],
    
            ]);

            DB::table('payment_types')->insert([
                ['type' => 'invoice'],
                ['type' => 'due'],
    
            ]);

            DB::table('cost_types')->insert([
                     ['type' => 'ABCD'],
                     ['type' => 'WXYZ'],
        
                 ]);

            DB::table('product_types')->insert([
                ['name' => 'normal','description' => 'just a sign'],
                ['name' => 'packet','description' => 'now ready for sele'],
    
            ]);

            DB::table('products')->insert([
                [
                    'name' => 'lalsak',
                    'catagory_id' => 1,
                    'product_type_id'=>2,
                    'cost' => 10,
                    'price' => 12,
                    'stock' => 100,
                    'sell' => 50,
                    'low_limit' => 10
                ],

                [
                'name' => 'palonsak',
                'catagory_id' => 2,
                'product_type_id'=>1,
                'cost' => 20,
                'price' => 24,
                'stock' => 100,
                'sell' => 50,
                'low_limit' => 10
                ],
    
            ]);

        DB::table('customer_types')->insert([
            ['name' => 'ruhul'],
            ['name' => 'masum'],
            ['name' => 'sagor'],
           
    
        ]);

        DB::table('customers')->insert([
        [
            'id' => '01840000408',
            'name' => 'ruhul',
            'address' => 'Habigong',
            'customer_type_id' => 1,
            'due' => 10000
        ],

         [
            'id' => '01846000408',
            'name' => 'masum',
            'address' => 'Tangail',
            'customer_type_id' => 2,
            'due' => 20000
        ],

        ]);

    }
}
