<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\User;
class RecipeSeeder extends Seeder {
    public function run(): void {
        $user = User::first() ?? User::factory()->create();
        Recipe::create([
            'user_id'=>$user->id,
            'title'=>'Recette Démo',
            'slug'=>'recette-demo',
            'description'=>'Exemple de recette',
            'steps'=>'1) Faire ceci\n2) Puis cela',
        ]);
    }
}
