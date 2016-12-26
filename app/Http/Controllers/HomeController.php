<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\Repositories\BlogRepository;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    protected $blogRepository;

    protected $nbrPages;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->nbrPages = config('app.nbrPages.front.posts');
    }

    public function __invoke()
    {
    	$posts = $this->blogRepository->getActiveWithUserOrderByDate($this->nbrPages);
        return view('front.index',compact('posts'));
    }
}
