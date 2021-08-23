<?php

namespace GrofGraf\LaravelPDFMerger\Facades;

use \Illuminate\Support\Facades\Facade;
use GrofGraf\LaravelPDFMerger\PDFMerger;

class PDFMergerFacade extends Facade {

  protected static function getFacadeAccessor() { return PDFMerger::class; }

}
