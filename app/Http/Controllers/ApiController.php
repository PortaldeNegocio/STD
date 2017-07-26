<?php

namespace STD\Http\Controllers;

use Illuminate\Http\Request;
use STD\Queries\GridQueries\GridQuery;
use STD\Queries\GridQueries\WidgetQuery;
use STD\Queries\GridQueries\MarketingImageQuery;
use STD\Queries\GridQueries\UserQuery;
use STD\Queries\GridQueries\ProfileQuery;


class ApiController extends Controller
{

    public function widgetData(Request $request)
    {

        return GridQuery::sendData($request, new WidgetQuery);

    }

    public function marketingImageData(Request $request)
    {

        return GridQuery::sendData($request, new MarketingImageQuery);
    }

    public function profileData(Request $request)
    {

        return GridQuery::sendData($request, new ProfileQuery);

    }

    public function userData(Request $request)
    {

        return GridQuery::sendData($request, new UserQuery);

    }


}
