<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategorieArticle;
use App\Models\CategorieChambre;
use App\Models\CategorieImage;
use App\Models\Chambre;
use App\Models\Comment;
use App\Models\Employe;
use App\Models\Image;
use App\Models\Service;
use App\Models\Tag;
use App\Models\TagChambre;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $serviceAll = Service::all();

       return view("home" ,compact("serviceAll"));
    }
    
    public function blog()
    {
        $blog = Article::all();
        $tag = Tag::all();
        $categorieArticle = CategorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();
        return view('blog', compact("blog", "tag", "categorieArticle", "blogLast"));
    }

    public function tagCategorie($id)
    {

        $tagiD = Tag::find($id);
        $blog = $tagiD->articles;
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();


        // dd($projetTout);
        return view("pages.blog",compact("categoryArticle","blog","tag","blogLast"));
    }

    
    public function booking_form()
    {
        return view('booking-form');
    }
    public function buttons()
    {
        return view('buttons');
    }
    public function contact()
    {
        return view('contact');
    }
    public function event_details()
    {
        return view('event-details');
    }
    public function events()
    {
        return view('events');
    }
    public function gallery()
    {
        $imageAll = Image::all();
        $categorieArticle = CategorieImage::all();
        return view('gallery', compact("imageAll", "categorieArticle"));
    }
    public function icons()
    {
        return view('icons');
    }
    public function index()
    {
        return view('index');
    }
    public function loading()
    {
        return view('loading');
    }
    public function page()
    {
        return view('page');
    }

    public function roomlist()
    {
        $roomListAll = Chambre::all();
        $tagRoom = TagChambre::all();
        $categoryRoom = CategorieChambre::all();
        return view('roomslist', compact("roomListAll", "tagRoom", "categoryRoom"));
    }

    public function room($id)
    {
        $room = Chambre::find($id);
        $tagRoom = TagChambre::all();
        $categorieroom = CategorieChambre::all();
        return view('rooms', compact("room", "tagRoom", "categorieroom"));
    }
    
    public function tagRooms($id)
    {
        $roomListAll = Chambre::all();

        $tagRoomsiD = TagChambre::find($id);
        $roomListAll = $tagRoomsiD->rooms;
        // dd(count($room));
        $tagRoom = TagChambre::all();
        // $categoryRoom = categorieRoom::all();
        // $roomsLast = Room::latest()->take(3)->get();

        $categoryRoom = CategorieChambre::all();

        // dd($projetTout);
        return view("roomslist",compact("tagRoom","roomListAll","categoryRoom"));
    }
    public function staff()
    {
        $team = Employe::all();
        $houseKeeper = Employe::where("fonction_id", 1)->first();
        return view('staff', compact("team", "houseKeeper"));
    }
    public function style_guide()
    {
        return view('style-guide');
    }

    public function searchCategorie($id)
    {
        $blog = Article::where("categorie_article_id", $id)->get();
        $tag = Tag::all();
        $categorieArticle = CategorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();

        return view("blog",compact("categoryArticle","blog","tag","blogLast"));
    }

    public function search(Request $request)
     {

         $data = $request->data;
         $blog= Article::where('title', 'like', "%$data%")
                 ->get();

        // $blog = Article::all();
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();

        return view("pages.blog",compact("blog","tag","categoryArticle","blogLast"));

     }

     public function searchRoomCategorie($id)
    {

        $roomListAll = Chambre::where("categorie_chambre_id",$id)->get();
        $categoryRoom = CategorieChambre::all();
        // dd($categoryRoomArticle);

        $tagRoom = TagChambre::all();

        return view("roomslist", compact("roomListAll","categoryRoom","tagRoom"));
    }

    public function RoomSearch(Request $request)
    {

        $data = $request->data;
        $roomListAll= Chambre::where('titre', 'like', "%$data%")
                ->get();
        $categoryRoom = CategorieChambre::all();
        $tagRoom = TagChambre::all();


       return view("pages.roomslist",compact("roomListAll","categoryRoom","tagRoom"));

    }

     public function blogPost($id)
     {
        $blog = Article::find($id);
        // dd($projetTout);
        $comment = Comment::all();

        return view("pages.blogpost",compact("blog","comment"));
     }
}