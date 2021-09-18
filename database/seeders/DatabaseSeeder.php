<?php

namespace Database\Seeders;

use App\Models\Avatar;
use App\Models\Categorie;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        $this->call([
            RoleSeeder::class,
        ]);

        Categorie::factory()->has(
            Image::factory()
                ->count(5)
                ->state(function ($attribute, Categorie $categorie) {
                    return [
                        "category_id" => $categorie->id,
                    ];
                })
        )
            ->state(new Sequence(
                ["name" => "Sports"],
                ["name" => "Loisirs"],
                ["name" => "Travail"],
                ["name" => "Villes"],
            ))
            ->count(4)
            ->create();


        Avatar::factory()->state(['fileName' => '0a0default-image.png'])->count(1)->create();
        Avatar::factory()->count(5)->create();

        User::factory()
            ->state([
                "email" => "admin@gmail.com",
                "password" => bcrypt("admin@gmail.com"),
                "role_id" => "1",
                "avatar_id" => rand(2, 6),
            ])
            ->count(1)
            ->create();

        User::factory()
            ->state([
                "email" => "member@gmail.com",
                "password" => bcrypt("member@gmail.com"),
                "role_id" => "2",
                "avatar_id" => rand(2, 6),
            ])
            ->count(1)
            ->create();

        User::factory()
            ->state([
                "email" => "webmaster@gmail.com",
                "password" => bcrypt("webmaster@gmail.com"),
                "role_id" => "3",
                "avatar_id" => rand(2, 6),
            ])
            ->count(1)
            ->create();
        User::factory()->count(50)->create();
        Post::factory()->count(50)->create();
    }
}
