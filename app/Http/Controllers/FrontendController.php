<?php
 
namespace App\Http\Controllers;

use Goutte\Client;
use App\Models\Tag; 
use App\Models\Radio;
use App\Models\Region;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 


class FrontendController extends Controller
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'radio:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import radio stations';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
        {
            $client = new Client();
            $crawler = $client->request('GET', 'https://webradiodirectory.com');
            $crawler->filter('.wp-radio-sidebar > ul > li')->each(function ($node) {

                $link   =   $node->filter(' a')->attr('href');
                $name   =   $node->filter('a')->text();
              
                $region =   Region::updateOrCreate(['name'=>$name],['region_id'=>0,'stream_link'=>$link]);
                $this->radio_scrape($link,$region->id);
                //exit;
            });;

            return Command::SUCCESS;
        }
    public function radio_scrape($link,$region_id)
        {
             $client  = new Client();
             $crawler = $client->request('GET',$link);
             $crawler->filter('.wp-radio-listing-wrap > .wp-radio-listing')->each(function ($node) use($region_id) {
                 $thumbnail     =   $node->filter('.listing-thumbnail img')->attr('src');
                 $name          =   $node->filter('.station-name > span')->text();
                 $description   =   $node->filter('.slogan')->text();
                 $attr          =   $node->filter('.play-btn')->attr('onclick');
                 $key           =   $node->filter('.genres a')->each(function ($subnode) {
                                        $keyword[]  = $subnode->text();
                                        return $keyword;
                                     });
                 $attrs         =   json_decode(str_replace('wpRadioHooks.doAction("playPause",this, ','',str_replace(')','',$attr)),true);
                 $link          =   $attrs["stream"];
                 //echo $thumbnail.' - '.$link."\n";
                 $radio              =   new Radio();
                 $radio->thumbnail   =   $thumbnail;
                 $radio->category_id =   1000;
                 $radio->name        =   $name;
                 $radio->description =   $description ;
                 $radio->region_id   =   $region_id;
                 $radio->stream_link =   $link;
                 $radio->status      =   1;
                 $res                =   $radio->save();
                 if($res)
                     {

                         foreach($key as $value)
                             {
                                 //dd($value[0]);
                                 $tag       = new Tag();
                                 $tag->name = (string)$value[0];
                                 $radio->tags()->save($tag);
                             }
                     }
                     dump($radio);
                     return view('red', compact('radio'));
                 

             });
             try {
                 $next = $crawler->filter('.listing-footer .next')->attr('href');
                 if (!is_null($next)) {
                     $this->radio_scrape($next, $region_id);
                 }
             }
             catch(\Exception $e)
             {
                 Log::error($e->getMessage());
             } 
        }
        public function index()
        { 
    
            return view('frontend.pages.home');
        }
}