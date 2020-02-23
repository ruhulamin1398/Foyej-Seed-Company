
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

                    'id'    => 100,
                    'username' => 'ruhul',
                    'role_id' => 1,
                    'email' => 'ruhul.ok@gmail.com',
                    'name' => 'Ruhul Amin',
                    'address' => 'Habigong',
                    'phone' => '01840000408',
                    'salary' => '50000',
                    'password' => Hash::make(1234),
                    'status'    => 1
                ],
                [

                    'id'    => 101,
                    'username' => 'sakib',
                    'role_id' => 2,
                    'email' => 'sakibhossain2996@gmail.com',
                    'name' => 'সাকিব',
                    'address' => 'sylhet',
                    'phone' => '01983923416',
                    'salary' => '50000',
                    'password' => Hash::make(45748045),
                    'status'    => 1
                ],
                [

                    'id'    => 102,
                    'username' => 'guljar',
                    'role_id' => 2,
                    'email' => 'guljar@gmail.com',
                    'name' => 'গুলজার',
                    'address' => 'kanaighat',
                    'phone' => '01724996935',
                    'salary' => '50000',
                    'password' => Hash::make('ht2298gu'),
                    'status'    => 1
                ],
                [

                    'id'    => 103,
                    'username' => 'foyej',
                    'role_id' => 1,
                    'email' => 'foyej@gmail.com',
                    'name' => 'ফয়েজ',
                    'address' => 'kanaighat',
                    'phone' => '01730656535',
                    'salary' => '50000',
                    'password' => Hash::make(35),
                    'status'    => 1
                ],

                
            ]
        );

        DB::table('suppliers')->insert([
            [
                'id'    => 100,
                'name' => 'ruhul',
                'phone' => '01840000408',
                'address' => 'Habigong',
                'company' => 'Pran',
                'due' => '5000'
            ],
            [
                'id'    => 101,
                'name' => 'sagor',
                'phone' => '01799076632',
                'address' => 'Tangail',
                'company' => 'Arong',
                'due' => '7000'
            ],
        ]);



        DB::table('categories')->insert([
            [
                'id'    => 100,
                'name' => 'অন্যান্য',
                'description' => 'ক্যাটাগরি বিহীন'
            ],
            [
                'id'    => 101,
                'name' => 'স্টিকার ', 
                'description' => 'স্টিকার বিক্রয় যোগ্যনয়'
            ],
            [
                'id'    => 102,
                'name' => 'কমপ্লিট',
                'description' => 'বিক্রয়ের জন্য রেডি '
            ],

        ]);

        DB::table('payment_types')->insert([
            [
                'type' => 'invoice'
            ],
            [
                'type' => 'due'
            ],

        ]);

        DB::table('cost_types')->insert([
            [
                'id'    => 100,
                'type' => 'Daily Cost'
            ],
            [
                'id'    => 101,
                'type' => 'Salary'
            ],

        ]);

        DB::table('product_types')->insert([
            [
                'name' => 'নরমাল ',
                'description' => ' ওজন করে বিক্রয় ',
              
            ],
            [
                'name' => 'প্যাকেট',
                'description' => 'প্যাকেট হিসেবে বিক্রয় ',
                
            ],

        ]);

        DB::table('products')->insert([
            [
                'id' => 100,
                'name' => 'লাল শাক ',
                'category_id' => 100,
                'product_type_id' => 2,
                'cost' => 10,
                'price' => 12,
                'weight' => 1000,
                'stock' => 100,
                'sell' => 50,
                'low_limit' => 10,
                'price_per_unit' => 1.3,
                'cost_per_unit' => 1.3

            ],

            [
                'id' => 101,
                'name' => 'পালং শাক',
                'category_id' => 101,
                'product_type_id' => 1,
                'cost' => 20,
                'price' => 24,
                'stock' => 100,
                'weight' => 500,
                'sell' => 50,
                'low_limit' => 10,
                'price_per_unit' => 1.3,
                'cost_per_unit' => 1.3
            ],
            [
                'id' => 102,
                'name' => 'মূলা',
                'category_id' => 102,
                'product_type_id' => 2,
                'cost' => 20,
                'price' => 24,
                'weight' => 10,
                'stock' => 100,
                'sell' => 50,
                'low_limit' => 10,
                'price_per_unit' => 1.3,
                'cost_per_unit' => 1.3
            ],
            [
                'id' => 103,
                'name' => 'গাজর',
                'category_id' => 102,
                'product_type_id' => 2,
                'cost' => 20,
                'price' => 24,
                'weight' => 20,
                'stock' => 100,
                'sell' => 50,
                'low_limit' => 10,
                'price_per_unit' => 1.3,
                'cost_per_unit' => 1.3
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
        
        DB::table('goals')->insert([
            [
                'id' => 1,
                'daily' => 10000,
                'weekly' => 800000,
                'monthly' => 120000,
                'yearly' => 999999
            ],


        ]);
    }
}
