<?php

use App\FeaturedCard;
use Illuminate\Database\Seeder;

class FeaturedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feature = [
            [
                'id'      => 1,
                'name'    => 'Dummy Featured Card',
                'image'   => 'category.png',
                'category_link'    => '#',
                
            ],
        ];

        FeaturedCard::insert($feature);
    }
}
