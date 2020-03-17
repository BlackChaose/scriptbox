<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowMainPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //fixme: add get data from Database
        $headings = [
            [
                "title"=> "my charts",
                "imgPath"=>'assets/img/chart-line-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'my charts',
                "textPreview"=>'my charts for different themes',
                "textFull"=>'Here your can see some charts for different themes.',
                "route"=>'show.charts'
            ],
            [
                "title"=> "my configs",
                "imgPath"=>'assets/img/cat-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'my configs',
                "textPreview"=>'my configs for dev',
                "textFull"=>'Here your can see some my configs for developing',
                "route"=>'show.configs'
            ],
            [
                "title"=> "my snippets",
                "imgPath"=>'assets/img/dog-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'my snippets',
                "textPreview"=>'some my snippets',
                "textFull"=>'Here your can see some my snippets.',
                "route"=>'show.snippets'
            ],
            [
                "title"=> "task manager",
                "imgPath"=>'assets/img/clock-regular.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'task manager',
                "textPreview"=>'some my tasks',
                "textFull"=>'Here your can see some my tasks',
                "route"=>'show.tm'
            ],
            [
                "title"=> "library",
                "imgPath"=>'assets/img/book-open-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'library',
                "textPreview"=>'some books for reading',
                "textFull"=>'Here your can see some interest book',
                "route"=>'show.library'
            ],
            [
                "title"=> "links bookmarks",
                "imgPath"=>'assets/img/bookmark-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'links bookmarks',
                "textPreview"=>'interest links in web',
                'textFull'=>'Here your can see some interest links in web, imho',
                "route"=>'show.bookmarks'
            ],
            [
                "title"=> "weather diary",
                "imgPath"=>'assets/img/cloud-sun-rain-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'weather diary',
                "textPreview"=>'diary by weather, temperature and other things...',
                "textFull"=>'Here your can see some diary by weather, temperature and other things...',
                "route"=>'show.weather'
            ],
            [
                "title"=> "dictionary",
                "imgPath"=>'assets/img/book-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'dictionary',
                "textPreview"=>'dictionary EN, ES & etc.',
                "textFull"=>'Here your can see some diaries',
                "route"=>'show.dictionaries'
            ],
            [
                "title"=> "posts",
                "imgPath"=>'assets/img/book-reader-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'post',
                "textPreview"=>'my posts',
                "textFull"=>'Here your can see some my lorem ipsum posts',
                "route"=>'show.posts'
            ],
            [
                "title"=> "creative",
                "imgPath"=>'assets/img/mandalorian-brands.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'creative',
                "textPreview"=>'novells, pictures and other...',
                "textFull"=>'Here your can see some my creatures...',
                "route"=>'show.creatives'
            ],
            [
                "title"=> "news & other",
                "imgPath"=>'assets/img/spider-solid.svg',
                "imgSize"=>['width'=>200,'height'=>200],
                "imgAlt"=>'news & other',
                "textPreview"=>'my parser for news & etc',
                "textFull"=>'Here your can see some news & other info',
                "route"=>'show.news'
            ],
        ];
        return view('index', compact('headings'));
    }
}
