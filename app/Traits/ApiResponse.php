<?php

namespace App\Traits;

use App\Helpers\Helper;

trait ApiResponse
{
    public function apiSuccessResponse($data = null, $message = null): \Illuminate\Http\JsonResponse
    {
        $message = @$message ? $message : __('api.success');
        return $this->apiResponse([
            Helper::CODE_SUCCESS,
            Helper::HTTP_OK,
            $message,
            $data,
        ]);
    }

    public function apiErrorResponse($data = null, $message = null, $errors = null, $responseCode = Helper::HTTP_SERVE_ERROR): \Illuminate\Http\JsonResponse
    {
        $message = @$message ? $message : __('api.error');
        return $this->apiResponse([
            $responseCode,
            Helper::CODE_FAIL,
            $message,
            $data,
            $errors
        ]);

    }

    public function apiResponse($code, $responseCode = Helper::HTTP_OK, $data = null, $message = null, $errors = null): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'code' => $code,
            'response_code' => $responseCode,
            'message' => $message,
            'data' => !empty($data) ? $data : new \stdClass(),
            'errors' => is_array($errors) ? $errors : (!is_null($errors) ? [$errors] : []),
            'current_time' => time(),
        ]);
    }
}
