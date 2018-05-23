<?php
namespace Modules\News\Http\Controllers;

use Modules\Core\Http\Controllers\BasePublicController;
use Modules\News\Entities\News;

class PublicController extends BasePublicController {
    public function home() {
        $News = News::all();
        return view('news::index')->with("news",$News);
    }
}