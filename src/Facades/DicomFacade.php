<?php

namespace Laravelir\Dicom\Facades;

use Illuminate\Support\Facades\Facade;

class DicomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dicom'; // TODO: Change the accessor name
    }
}
