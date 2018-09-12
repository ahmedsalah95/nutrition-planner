<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "hadeel",
            'email' => 'hadeel@gmail.com',
            'password' => bcrypt('hadeel'),
        ]);

        DB::table('patients')->insert([
            'name' =>'احمد',
            'phone'=>"01111111111",
            'register_date'=>'08/31/2018',
            'email'=>'ahmedsalah@gmail.com',
            'birthday'=>'05/21/1995',
            'gender'=>'ذكر',
            'weight'=>'63',
            'height'=>'165',
            'age'=>'22',
            'health_condition'=>'لا يوجد امراض',
            'body_fat'=>'منخفض',
            'goal'=>'الحصول علي جسم صحي',
            'activity_level'=>'medium',
            'food_type_diet'=>'anything',

            'dont_eat'=>'بقوليات',
            'system'=>'',
            'sensitivity'=>'',
            'blood'=>'',
            'sleeping_hours'=>'5',
            'water'=>'2',
            'diet'=>'لا يوجد',
            'diet_name'=>'',
            'diet_result'=>'',


        ]);

        DB::table('foodcategories')->insert([
            'name' => 'carbs',
            'description'=>'انواع الطعام التي تقع تحت بند الكيبوهيدرات'
        ]);

        DB::table('foodcategories')->insert([
            'name' => 'fats',
            'description'=>'انواع الطعام التي تقع تحت بند الدهون'
        ]);

        DB::table('foodcategories')->insert([
            'name' => 'proteins',
            'description'=>'انواع الطعام التي تقع تحت بند البروتينات'
        ]);


    }
}
