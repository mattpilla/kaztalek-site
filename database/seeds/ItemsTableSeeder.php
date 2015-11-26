<?php

use Illuminate\Database\Seeder;
use App\Models\MM\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Item();
        $item->index = 0;
        $item->icon = 'images/item-icons/Ocarina of Time.png';
        $item->name = 'Ocarina of Time';
        $item->english = true;
        $item->save();

        $item = new Item();
        $item->index = 1;
        $item->icon = 'images/item-icons/Hero\'s Bow.png';
        $item->name = 'Hero\'s Bow';
        $item->english = true;
        $item->save();

        $item = new Item();
        $item->index = 2;
        $item->icon = 'images/item-icons/Fire Arrow.png';
        $item->name = 'Fire Arrow';
        $item->english = true;
        $item->save();

        $item = new Item();
        $item->index = 3;
        $item->icon = 'images/item-icons/Ice Arrow.png';
        $item->name = 'Ice Arrow';
        $item->english = true;
        $item->save();

        $item = new Item();
        $item->index = 4;
        $item->icon = 'images/item-icons/Light Arrow.png';
        $item->name = 'Light Arrow';
        $item->english = true;
        $item->save();

        $item = new Item();
        $item->index = 5;
        $item->icon = 'images/item-icons/Fairy Ocarina (Unused).png';
        $item->name = 'JP Text: Fairy\'s Ocarina';
        $item->notes = 'Acts like Pictobox';
        $item->english = true;
        $item->save();
    }
}
