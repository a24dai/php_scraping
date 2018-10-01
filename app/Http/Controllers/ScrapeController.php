<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;

define('TARGET_URL', 'http://gizumo-inc.jp/company/members/');

class ScrapeController extends Controller
{
    public function index()
    {
        return view('works.index');
    }

    public function show()
    {
        $member_infos = $this->scrape_page();
        return view('works.show', compact('member_infos'));
    }

    public function scrape_page()
    {
        $crawler = Goutte::request('GET', TARGET_URL);
        return $crawler->filter('.content__grid--4__item')->each(function ($node) {
            return [
                'name'    => $node->filter('.member-column__name')->text(),
                'en_name' => $node->filter('.member-column__name--en')->text(),
                'post'    => $node->filter('.member-column__post')->text(),
                'img'     => $this->extract_url($node->filter('.member-column__image')->attr('style')),
            ];
        });
    }

    public function extract_url($style)
    {
        return mb_substr($style, 22, -2);
    }
}

