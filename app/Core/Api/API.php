<?php

namespace App\Core\Api;

use Illuminate\Http\JsonResponse;

class API
{
    /**
     * Return a successful JSON response.
     *
     * @param string $message
     * @param null $data
     * @param bool $showDataKey
     * @param int $code
     * @return JsonResponse
     */
    public static function success(string $message = 'Success', $data = null, bool $showDataKey = true, int $code = 200): JsonResponse
    {
        return self::formatResponse(true, $message, $data, $showDataKey, $code);
    }

    /**
     * Return an error JSON response.
     *
     * @param string $message
     * @param null $data
     * @param bool $showDataKey
     * @param int $code
     * @return JsonResponse
     */
    public static function error(
        string $message = 'Error',
               $data = null,
        bool $showDataKey = true,
        int $code = 400,
    ): JsonResponse
    {
        return self::formatResponse(false, $message, $data, $showDataKey, $code);
    }




    /**
     * Return a successful data fetch response.
     *
     * @param null $data
     * @return JsonResponse
     */
    public static function fetched($data = null): JsonResponse
    {
        return self::success('Data fetched successfully', $data);
    }

    /**
     * Core method to return JSON response with CORS headers.
     *
     * @param bool $status
     * @param string $message
     * @param null $data
     * @param bool $showDataKey
     * @param int $code
     * @return JsonResponse
     */
    protected static function formatResponse(bool $status, string $message, $data = null, bool $showDataKey = true, int $code = 200): JsonResponse
    {
        $origin = request()->headers->get('Origin', '*');

        $response = [
            'status' => $status ? 'success' : 'error',
            'message' => $message,
        ];

        if ($showDataKey) {
            $response['data'] = $data;
        }

        return response()->json($response, $code)
            ->header('Access-Control-Allow-Origin', $origin)
            ->header('Access-Control-Allow-Credentials', 'true');
    }

}
