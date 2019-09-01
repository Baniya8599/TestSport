<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    const NUM = 500;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->makeData();
        DB::table('users')->insert($data);
    }

    private function makeData(): array
    {
        $faker = \Faker\Factory::create('ne_NP');
        $data = [];
        $data[] = [
            'name' => 'admin',
            'email' => 'addsa@dsads.aaa',
            'email_verified_at' => $faker->dateTime,
            'password' => bcrypt('pass'),
        ];

        for ($i = 0; $i < self::NUM; $i++) {
            $data[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => $faker->dateTime,
                'password' => bcrypt($faker->text),
            ];
        }
        return $data;
    }
}
