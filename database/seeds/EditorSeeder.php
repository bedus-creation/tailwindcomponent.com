<?php

use App\Editor;
use Illuminate\Database\Seeder;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editors = factory(Editor::class, 3)->create();
        $editors->each(function ($item) {
            $item->toCollection('cover')
                ->addMediaFromUrl('http://tailwindcomponent.test/assets/docs/master/image-01.jpg');
        });
    }
}
