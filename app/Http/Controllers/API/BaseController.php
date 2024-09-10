<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message = null): JsonResponse
    {
        $response = [
            'success' => true
        ];
        if (!empty($message)) {
            $response['message'] = $message;
        }
        if (!empty($result)) {
            $response['data'] = $result;
        }
        return response()->json($response, 200);
    }

    /**
     * Pagination response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendPaginationResponse($result): JsonResponse
    {
        return response()->json($result, 200);
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
