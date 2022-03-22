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

        return view("home", compact("serviceAll"));
    }

    // Page pr afficher tous les articles

    public function blog()
    {
        $blog = Article::all();
        $tag = Tag::all();
        $categorieArticle = CategorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();
        return view('blog', compact("blog", "tag", "categorieArticle", "blogLast"));
    }

    // Page pr afficher un seul article
    public function article()
    {
    }


    // Page pour afficher
    public function tagCategorie($id)
    {

        $tagiD = Tag::find($id);
        $blog = $tagiD->articles;
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();


        // dd($projetTout);
        return view("pages.blog", compact("categoryArticle", "blog", "tag", "blogLast"));
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

    // Page qui permet d'afficher la gallerie
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

    // Page qui permet de récupérer toutes les chambres
    public function roomlist()
    {
        $roomListAll = Chambre::all();
        $tagRoom = TagChambre::all();
        $categoryRoom = CategorieChambre::all();
        return view('roomslist', compact("roomListAll", "tagRoom", "categoryRoom"));
    }


    // Page pour afficher une seule chambre
    public function room($id)
    {
        $room = Chambre::find($id);
        $tagRoom = TagChambre::all();
        $categorieroom = CategorieChambre::all();
        return view('rooms', compact("room", "tagRoom", "categorieroom"));
    }


    // Page qui permet de trier les chambres par tag
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
        return view("roomslist", compact("tagRoom", "roomListAll", "categoryRoom"));
    }

    // Page qui permet d'afficher ts les membres du staff
    public function staff()
    {
        $team = Employe::all();
        $houseKeeper = Employe::where("fonction_id", 1)->first();
        return view('staff', compact("team", "houseKeeper"));
    }

    // Page qui permet d'afficher les articles par catégorie
    public function searchCategorie($id)
    {
        $roomListAll = Article::where("categorie_article_id", $id)->get();
        $tag = Tag::all();
        $categorieArticle = CategorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();

        return view("blog", compact("categoryArticle", "roomListAll", "tag", "blogLast"));
    }

    // Page qui permet de rechercher les articles en tapant dans l'input
    public function search(Request $request)
    {

        $data = $request->data;
        $roomListAll = Chambre::where('nom', 'like', "%$data%")
            ->get();

        // $blog = Article::all();
        $tagRoom = Tag::all();
        $categoryRoom = CategorieChambre::all();
        $blogLast = Chambre::latest()->take(3)->get();

        return view("roomslist", compact("roomListAll", "tagRoom", "categoryRoom", "blogLast"));
    }

    //  Page qui permet de rechercher les chambres par catégorie
    public function searchRoomCategorie($id)
    {

        $roomListAll = Chambre::where("categorie_chambre_id", $id)->get();
        $categoryRoom = CategorieChambre::all();
        // dd($categoryRoomArticle);

        $tagRoom = TagChambre::all();

        return view("roomslist", compact("roomListAll", "categoryRoom", "tagRoom"));
    }


    // PAge qui permet de rechercher les chambres via barre de recherche
    public function RoomSearch(Request $request)
    {

        $data = $request->data;
        $roomListAll = Chambre::where('titre', 'like', "%$data%")
            ->get();
        $categoryRoom = CategorieChambre::all();
        $tagRoom = TagChambre::all();


        return view("pages.roomslist", compact("roomListAll", "categoryRoom", "tagRoom"));
    }


    // Page qui permet d'afficher un article en particulier
    public function blogPost($id)
    {
        $blog = Article::find($id);
        // dd($projetTout);
        $comment = Comment::all();

        return view("pages.blogpost", compact("blog", "comment"));
    }
}
