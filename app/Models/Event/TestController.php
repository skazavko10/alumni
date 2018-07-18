<?php

namespace App\Models\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\UserRole\UserRole;
use App\Models\UserPhotoGallery\UserPhotoGallery;
use App\Models\UserHasRole\UserHasRole;
use App\Models\PostMainImage\PostMainImage;
use App\Models\News\News;
use App\Models\Event\Event;
use App\Models\ClassNote\ClassNote;

class TestController extends Controller
{
    public function test() {
    	
    	// $user = User::find(1);
  //   	foreach ($user->roles as $role) {
		//     var_dump($role->name);
		// }
		// dd($user->roles);
		// dd($user->classNotes[0]->text);
		// dd($user->photoGalery[0]->photo_path);
		// dd($user->news[0]->name);
		// dd($user->events[0]->text);

		// $userRole = UserRole::find(1);
		// dd($userRole->users);

    	// $userPhotoGallery = UserPhotoGallery::find(6);
    	// dd($userPhotoGallery->user->name);

    	// $userHasRole = UserHasRole::find(4);
    	// dd($userHasRole->user->name);
    	// dd($userHasRole->userType->name);

    	// $postMainImage = PostMainImage::find(1);
    	// dd($postMainImage->event->name);
    	// dd($postMainImage->news->name);

    	// $news = News::find(3);
    	// dd($news->author->name);
    	// dd($news->mainImage->photo_url);

    	// $event = Event::find(2);
    	// dd($event->author->name);
    	// dd($event->mainImage->photo_url);

    	// $classNote = ClassNote::find(1);
    	// dd($classNote->author->name);
    }
}
