<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User; 
use App\Models\Radio;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $post = Post::where('status','0')->first();
        $user = Auth::user(); 
        $all_categories = Category::where('status', '0')->get();        
        $most_read = Post::where('status', '0')->orderBy('views', 'DESC')->get()->take(4);
        $top_post = Post::where('status', '0')->where('category_id', '3')->orderBy('created_at', 'DESC')->get()->take(3);
        $latest_posts_now = Post::where('status', '0')->orderBy('created_at', 'DESC')->get()->take(5)->skip(1);
        $breaking = Post::where('created_at', '>=', Carbon::now()->subMinutes(30)->toDateTimeString())->orderBy('created_at', 'DESC')->where('breaking', '1')->where('status', '0')->get()->take(1);
        $latest_cate4 = Post::where('status', '0')->where('category_id', '3')->orderBy('created_at', 'DESC')->get()->take(1);
        $news_2 = Post::where('status', '0')->where('category_id', '2')->orderBy('created_at', 'DESC')->get()->skip(2)->take(2);
        $entertainment = Post::where('status', '0')->where('category_id', '3')->orderBy('created_at', 'DESC')->get()->skip(0)->take(1);
        $entertainment_2 = Post::where('status', '0')->where('category_id', '3')->orderBy('created_at', 'DESC')->get()->skip(1)->take(2);
        $entertainment_3 = Post::where('status', '0')->where('category_id', '3')->orderBy('created_at', 'DESC')->get()->skip(3)->take(2);
        $sports = Post::where('status', '0')->where('category_id', '4')->orderBy('created_at', 'DESC')->get()->take(4);
        $business = Post::where('status', '0')->where('category_id', '6')->orderBy('created_at', 'DESC')->get()->take(4);
        $opinion = Post::where('status', '0')->where('category_id', '8')->orderBy('created_at', 'DESC')->get()->take(1);
        $opinion_1 = Post::where('status', '0')->where('category_id', '8')->orderBy('created_at', 'DESC')->get()->take(5)->skip(1);
        $news = Post::where('status', '0')->where('category_id', '2')->orderBy('created_at', 'DESC')->get()->take(2)->skip(1);
        $politics1 = Post::where('status', '0')->where('category_id', '5')->orderBy('created_at', 'DESC')->get()->take(5)->skip(1);
        $politics = Post::where('status', '0')->where('category_id', '5')->orderBy('created_at', 'DESC')->get()->take(1);
        $latest_post_second = Post::where('status','0')->orderBy('created_at', 'DESC')->get()->take(6)->skip(3);
        $latest_home = Post::where('status','0')->orderBy('created_at', 'DESC')->get()->take(6)->skip(2);
        $latest_home_right = Post::where('status','0')->orderBy('created_at', 'DESC')->get()->take(6)->skip(2);
        $comments = DB::table('comments')->count();
        $total = Comment::all()->count();

    return view('frontend.pages.home', compact('user','post','total','most_read', 'business', 'politics','politics1','news','comments','all_categories','breaking','sports','entertainment','entertainment_2','opinion','opinion_1','entertainment_3','news_2','top_post','latest_cate4','latest_post_second','latest_posts_now', 'latest_home_right','latest_home'));

    }
    public function home()
    {
        $post = Post::where('status','0')->first();
        $user = Auth::user(); 
        $all_categories = Category::where('status', '0')->get();
        $picks = Post::where('status', '0')->orderBy('created_at', 'DESC')->get()->take(3);

    return view('home', compact('user','post','picks'));

    }
    public function viewCategoryPost(string $category_slug)
    {
        $category =Category::where('slug', $category_slug)->where('status','0')->first();
        if($category)
        {
            $user = Auth::user();
            $post = Post::where('category_id', $category->id)->where('status','0')->orderBy('created_at', 'DESC')->paginate(10);
            $latest_post = Post::where('category_id', $category->id)->where('status','0')->orderBy('created_at', 'DESC')->take(2)->skip(1)->get();
            $latest_post_2 = Post::where('category_id', $category->id)->where('status','0')->orderBy('created_at', 'DESC')->take(2)->skip(3)->get();
            $latest_posts = Post::where('category_id', $category->id)->where('status','0')->orderBy('created_at', 'DESC')->take(1)->get();
            $latest_post_3 = Post::where('category_id', $category->id)->where('status','0')->orderBy('created_at', 'DESC')->take(12)->skip(5)->get();
            return view('frontend.post.index', compact('post','user', 'category','latest_post_3', 'latest_post_2','latest_post','latest_posts'));
        }
        else{
            return redirect('/');
        }
    } 
public function viewAuthor(string $category_slug){
    $posts = Post::where('status','0')->first();

        if ($posts) {
            $category =Category::where('slug', $category_slug)->where('status','0')->first();
            $posts = Post::where('created_by', $posts->created_by)
                ->first();

        return view('frontend.post.author', compact('posts','category'));
    }
}

public function viewPost(string $category_slug, string $post_slug)
{
    $user = Auth::user();
    $category =Category::where('slug', $category_slug)->where('status','0')->first();
    if($category)
    {
        $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status','0')->first();
        $post->increment('views');
        $most_read = Post::where('status', '0')->orderBy('views', 'DESC')->get()->take(4);
        $latest_cate4_2 = Post::where('status', '0')->orderBy('created_at', 'DESC')->get()->skip(1)->take(4);
        $related_posts = Post::where('category_id', $category->id)->where('id', '<>', $post->id)->where('status','0')->orderBy('created_at', 'DESC')->get()->take(3);
        $also_posts = Post::where('category_id', $category->id)->where('id', '<>', $post->id)->where('status','0')->orderBy('created_at', 'DESC')->get()->take(2)->skip(1);
        $tags = Post::where('category_id', $category->id)->where('id', $post->id)->where('status','0')->get();
        $latest_posts = Post::where('status','0')->where('id', '<>', $post->id)->orderBy('created_at', 'DESC')->get()->take(4);
        $next = Post::where('status','0')->where('id', '>', $post->id)->get()->take(1);
        $top = Post::where('status', '0')->orderBy('created_at', 'DESC')->get()->take(1);
        $previous = Post::where('status','0')->where('id', '<', $post->id)->get()->take(1);
        return view('frontend.post.view', compact('post','top','user','also_posts','next','previous','tags','related_posts', 'most_read', 'latest_posts','latest_cate4_2'));
    }
    else{
        return redirect('/');
    }
} 
   
    public function getTodays()
    {
        $categories =  Category::where('navbar_status', '0')->where('status','0')->get(['id'])->pluck('id')->toArray();

        return Post::where('status','0')
            ->orderBy("created_at","desc")
            ->whereDate('created_at',date("Y-m-d"))
            ->get();
    }

    public function sitemap(Request $request)
    {
        $articles = new Post();
        $sitemap = Post::where('status','0')
        ->orderBy("created_at","desc")
        ->whereDate('created_at',date("Y-m-d"))
        ->get();
        $categories =  Category::where('navbar_status', '0')->where('status','0')->get();
 
        //return;
        return response()->view('frontend.sitemap',['sitemap' => $sitemap,'articles'=>$articles,'categories'=> $categories])
            ->header('Content-Type', 'text/xml');
    }

    public function googlenews(Request $request)
    {
        $articles = new Post();
        $googlenews = Post::where('status','0')
        ->orderBy("created_at","desc")
        ->whereDate('created_at',date("Y-m-d"))
        ->get();
        $categories =  Category::where('navbar_status', '0')->where('status','0')->get();
 
        //return;
        return response()->view('frontend.googlenews',['googlenews' => $googlenews,'articles'=>$articles,'categories'=> $categories])
            ->header('Content-Type', 'text/xml');
    }
    public function radios()
    {
        $radios = Radio::where('status', '1')->get(); 
 
        //return;
        return response()->view('frontend.radios',['radios' => $radios]);
    }

    // public function googlenews(Request $request)
    // {
    //     $articles = new Post();
    //     $googlenews = Post::where('status','0')
    //     ->orderBy("created_at","desc")
    //     ->whereDate('created_at',date("Y-m-d"))
    //     ->get();

    //     $categories =  Category::where('navbar_status', '0')->where('status','0')->get();
 

    //     //return;
    //     return response()->view('frontend.googlenews',['googlenews' => $sitemap,'articles'=>$articles,'categories'=> $categories])
    //         ->header('Content-Type', 'text/xml');
    // }
    

}
