<?php
/**
 * Created by PhpStorm.
 * User: brittanyreves
 * Date: 10/16/17
 * Time: 7:08 PM
 */

namespace Brit\UserNoteService\Controllers;


use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class UserNoteServiceController
{
    public function dispatch(Request $request)
    {
        $app = new Application();
    }
}