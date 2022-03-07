<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $mgmg = User::factory()->create(['name' => 'Mg Mg','username' => 'mgmg']);
        $aungaung = User::factory()->create(['name' => 'Aung Aung','username' => 'aungaung']);

        $frontend = Category::factory()->create(['name' => 'Frontend Blogs','slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'Backend Blogs','slug' => 'backend']);

        Blog::factory(2)->create(['user_id' => $mgmg->id,'category_id' => $frontend->id]);
        Blog::factory(2)->create(['user_id' => $aungaung->id,'category_id' => $backend->id]);
    }
}
