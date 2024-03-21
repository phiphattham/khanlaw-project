<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => '<p>ก่อตั้งเมื่อ วันที่ xx เดือน xxxx ปี xxxx<br>จัดตั้ง ณ เลขที่บ้าน ตำบลพิจิตร อำเภอนาหม่อม จังหวัดสงขลา<br>เป็นสถานที่ที่สวยงาน หันรอบด้านก็จะเจอแต่ธรรมชาติที่สดใส่ หมอกให้บรรยกาศที่สดชื่นอีกด้วย<br>ห้องพักตกแต่งอย่างสวยงาม มีระเบียงชมวิว<br>บรรยากาศผ่อน',
        ];
    }
}
