<?php

namespace GrofGraf\LaravelPDFMerger\Facades;

use \Illuminate\Support\Facades\Facade;
use GrofGraf\LaravelPDFMerger\LaravelPDFMerger;

class PDFMerger extends Facade {

  protected static function getFacadeAccessor() { return LaravelPDFMerger::class; }

}
