<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
class FirebaseController extends Controller
{
    public function index(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/buletinminichat-firebase-adminsdk-616t0-64c670a141.json');
        $firebase 		  = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://buletinminichat.firebaseio.com')
            ->create();
        $database 		= $firebase->getDatabase();
        $newPost 		  = $database
            ->getReference('blog/posts')
            ->push(['title' => 'Post title','body' => 'This should probably be longer.']);
        echo"<pre>";
        print_r($newPost->getvalue());
    }
}
?>
