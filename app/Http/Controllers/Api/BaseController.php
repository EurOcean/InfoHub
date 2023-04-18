<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{


    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="EuroOcean API",
     *      description="API connection",
     *      @OA\Contact(
     *          email="dev@euroocen.org"
     *      ),
     * )
     *
     * @OA\PathItem(
     *      path="/",
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="EuroOcean API V1"
     * )
     *
     * @OA\Tag(
     *     name="Projects",
     *     description="API Endpoints of Projects"
     * )
     * * @OA\Tag(
     *     name="Vessels",
     *     description="API Endpoints of Vessels"
     * )
     * * @OA\Tag(
     *     name="Organizations",
     *     description="API Endpoints of Organizations"
     * )
     */

    public function sendResponse($result, $message)
    {
    	$response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
}
