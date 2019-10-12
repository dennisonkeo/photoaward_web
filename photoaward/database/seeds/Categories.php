<?php

use Illuminate\Database\Seeder;

use App\Category;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         	$category = new Category();
		    $category->name = 'Category One';
		    $category->description = 'This a description for category one';
		    $category->amount = 100;
		    $category->save();

		    $category = new Category();
		    $category->name = 'Category Two';
		    $category->description = 'This a description for category two';
		    $category->amount = 150;
		    $category->save();

		    $category = new Category();
		    $category->name = 'Category Three';
		    $category->description = 'This a description for category three';
		    $category->amount = 200;
		    $category->save();

		    $category = new Category();
		    $category->name = 'Category Four';
		    $category->description = 'This a description for category four';
		    $category->amount = 100;
		    $category->save();

		    $category = new Category();
		    $category->name = 'Category Five';
		    $category->description = 'This a description for category five';
		    $category->amount = 100;
		    $category->save();

		    $category = new Category();
		    $category->name = 'Category Six';
		    $category->description = 'This a description for category six';
		    $category->amount = 100;
		    $category->save();
    }
}
