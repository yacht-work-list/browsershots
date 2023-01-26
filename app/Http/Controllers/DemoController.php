<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Spatie\Image\Manipulations;
use Spatie\Browsershot\Browsershot;

class DemoController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index(Request $request)

    {
        $PATH = getcwd();

        Browsershot::url('http://localhost/mapa.html')

            ->setOption('landscape', true)

            ->windowSize(1920, 1080)

            ->select('#map')

            // ->fit(Manipulations::FIT_CONTAIN, 3000, 3000)

            ->waitUntilNetworkIdle()

            // ->save($PATH.'/hola.pdf');
            ->save($PATH.'/hola.jpg');

        dd("Done");

    }

}
