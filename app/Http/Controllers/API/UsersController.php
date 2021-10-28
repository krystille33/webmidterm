<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jobapplication;
use App\Repositories\JobapplicationRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $jobapplication = Jobapplication::all();

        if (count($jobapplication) > 0) {
            return response()->json($jobapplication, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no registrations in the database'], 404);
        }
    }
}
?>