<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\about;
use App\Models\room;
use Illuminate\Database\Seeder;
use Nette\Utils\Strings;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'KhanlawAdmin',
            'email' => 'admin@example.com',
            'password' => '123456789',
            'f_name' => 'Khanlaw',
            'l_name' => 'Viewpoint',
            'role' => 'admin',
            'sex' => 'male',
        ]);

        \App\Models\User::factory()->create([
            'username' => 'KhanlawUser',
            'email' => 'user@example.com',
            'password' => '123456789',
            'f_name' => 'User',
            'l_name' => 'Khanlaw',
            'role' => 'user',
            'sex' => 'female',
        ]);

        about::factory()->create([
            'content' => '<p>ก่อตั้งเมื่อ วันที่ xx เดือน xxxx ปี xxxx<br>จัดตั้ง ณ เลขที่บ้าน ตำบลพิจิตร อำเภอนาหม่อม จังหวัดสงขลา<br>เป็นสถานที่ที่สวยงาน หันรอบด้านก็จะเจอแต่ธรรมชาติที่สดใส่ หมอกให้บรรยกาศที่สดชื่นอีกด้วย<br>ห้องพักตกแต่งอย่างสวยงาม มีระเบียงชมวิว<br>บรรยากาศผ่อน',
        ]);

        room::factory(20)->create();
    }
}
