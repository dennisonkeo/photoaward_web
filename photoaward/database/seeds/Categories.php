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
		    $category->name = 'PEOPLE';
		    $category->description = 'Judges are looking for the next new face. Judges will be looking for beauty, emotion, expression and personality. The photographs may be portraits and photos of groups or individuals.';
			$category->amount = 100;
			$category->note = "Looking for beauty, emotion, expression and personality. The photographs are portraits and photos of groups or individuals.";
			$category->cover = 'pic25.jpg';
		    $category->save();

		    $category = new Category();
		    $category->name = 'THE GREAT OUTDOORS';
		    $category->description = 'Judges are looking for the best and most creative images of our natural world including animals, plants and landscapes; geological or climatological features, natural phenomenon and conservation.';
			$category->amount = 150;
			$category->note = "The best and most creative images of our natural world including animals, plants and landscapes; geological or climatological features, natural phenomenon and conservation.";
			$category->cover = 'pic41.jpg';
		    $category->save();

		    $category = new Category();
		    $category->name = 'ARCHITECTURE';
		    $category->description = 'Judges are looking at how contestants bring out the various dimensions of Bridges, Buildings, Cityscapes, Interiors, Dams, Roads and other transport infrastructure while retaining the original design elements of the work.';
		    $category->amount = 200;
		    $category->note = "Various dimensions of Bridges, Buildings, Cityscapes, Interiors, Dams, Roads and other transport infrastructure while retaining the original design elements of the work.";
		    $category->cover = 'pic45.jpg';
		    $category->save();

		    $category = new Category();
		    $category->name = 'FOOD';
		    $category->description = 'Judges are looking for presentation and creativity. Judges will also be looking for the best cooking moments and images that best express how food brings people together. ';
		    $category->amount = 100;
		    $category->note = "Best cooking moments and images that best express how food brings people together.";
		    $category->cover = 'pic56.jpg';
		    $category->save();

		    $category = new Category();
		    $category->name = 'FASHION';
		    $category->description = 'Judges are looking for the most captivating and original look and fashion sense. They will look for images that best represents the current and emerging fashion trends including creativity and originality in clothes design, hair and accessories, etc. Judges are looking for style.';
		    $category->amount = 100;
		    $category->note = "The most captivating and original look and fashion sense. Images that best represents the current and emerging fashion trends including creativity and originality in clothes design, hair and accessories.";
		    $category->cover = 'pic22.jpg';
		    $category->save();

		    $category = new Category();
		    $category->name = 'EXPERIENCE.KE';
		    $category->description = 'Judges are looking for the most expressive and emotion capturing photos that capture the rich diversity of the Kenyan experience and lifestyle. Judges will look at the best depiction of culture, history, heritage, street culture, art, music, travel, and the club scene; essentially photographs that tell us what it means to be a Kenyan and provide a sense of what it is like to live in this beautiful country.';
		    $category->amount = 100;
		    $category->note = "The most expressive and emotion capturing photos that capture the rich diversity of the Kenyan experience and lifestyle. Best depiction of culture, history, heritage, street culture, art, music, travel, and the club scene; essentially photographs that tell us what it means to be a Kenyan and provide a sense of what it is like to live in this beautiful country.";
		    $category->cover = 'pic47.jpg';
		    $category->save();

		    $category = new Category();
		    $category->name = 'ALTERED IMAGES';
		    $category->description = 'Photographs manipulated for artistic purposes by applying digital and/or traditional special effects.';
		    $category->amount = 100;
		    $category->note = "Photographs manipulated for artistic purposes by applying digital and/or traditional special effects.";
		    $category->cover = 'pic53.jpg';
		    $category->save();

		    $category = new Category();
		    $category->name = 'DOCUMENTARY';
		    $category->description = '';
		    $category->amount = 100;
		    $category->cover = 'pic53.jpg';
		    $category->save();
    }
}
