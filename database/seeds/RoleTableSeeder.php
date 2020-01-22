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
                [
                    'name' => 'ruhul',
                    'role_id' => 1,
                    'email' => 'ruhul.ok@gmail.com',
                    'address' => 'Habigong',
                    'phone' => '01840000408',
                    'salary' => '50000',
                    'password' => Hash::make(1116430725),
                    'status'    => 1
                ],

                [
                    'name' => 'sagor',
                    'role_id' => 2,
                    'email' => 'sagor.sec@gmail.com',
                    'address' => 'Tangail',
                    'phone' => '01799076632',
                    'salary' => '20000',
                    'password' => Hash::make(1116430725),
                    'status'    => 1
                ],

            ]
        );

        DB::table('suppliers')->insert([
            ['name' => 'ruhul', 'phone' => '01840000408', 'address' => 'Habigong', 'company' => 'Pran', 'due' => '5000'],
            ['name' => 'sagor', 'phone' => '01799076632', 'address' => 'Tangail', 'company' => 'Arong', 'due' => '7000'],
        ]);


        DB::table('sell_types')->insert([
            [
                'name' => 'packet'
            ],
            [
                'name' => 'normal'
            ],

        ]);

        DB::table('categories')->insert([
            ['name' => 'no_category', 'description' => 'Not add in any category'],
            ['name' => 'stricer', 'description' => 'just a sign'],
            ['name' => 'complete', 'description' => 'now ready for sele'],

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
            ['name' => 'normal', 'description' => 'normal sale with weight ', 'sell_type_id' => 1],
            ['name' => 'packet', 'description' => 'sale as a packet', 'sell_type_id' => 2],

        ]);

        DB::table('products')->insert([
            [
                'id' => 881,
                'name' => 'লাল শাক ',
                'category_id' => 1,
                'product_type_id' => 2,
                'cost' => 10,
                'price' => 12,
                'weight' => 1000,
                'stock' => 100,
                'sell' => 50,
                'low_limit' => 10
            ],

            [
                'id' => 882,
                'name' => 'পালং শাক',
                'category_id' => 2,
                'product_type_id' => 1,
                'cost' => 20,
                'price' => 24,
                'stock' => 100,
                'weight' => 500,
                'sell' => 50,
                'low_limit' => 10
            ],
            [
                'id' => 883,
                'name' => 'মূলা',
                'category_id' => 2,
                'product_type_id' => 2,
                'cost' => 20,
                'price' => 24,
                'weight' => 10,
                'stock' => 100,
                'sell' => 50,
                'low_limit' => 10
            ],
            [
                'id' => 884,
                'name' => 'গাজর',
                'category_id' => 2,
                'product_type_id' => 2,
                'cost' => 20,
                'price' => 24,
                'weight' => 20,
                'stock' => 100,
                'sell' => 50,
                'low_limit' => 10
            ],

        ]);

        DB::table('customer_types')->insert([
            ['name' => 'regular'],
            ['name' => 'normal']


        ]);

        DB::table('customers')->insert([
            [
                'phone' => '01840000408',
                'name' => 'ruhul',
                'address' => 'Habigong',
                'customer_type_id' => 1,
                'due' => 10000
            ],

            [
                'phone' => '01846000402',
                'name' => 'masum',
                'address' => 'Tangail',
                'customer_type_id' => 2,
                'due' => 20000
            ],

        ]);
    }
}
