<?php

namespace App\Traits;

use App\Helpers\Helper;

trait HasAjaxRequest
{
    public function ajaxSuccessResponse($data = null, $messages = []): \Illuminate\Http\JsonResponse
    {
        return $this->ajaxResponseRequest(true, $data, $messages, Helper::HTTP_OK);
    }

    public function ajaxErrorResponse($responseCode, $messages = [], $data = null): \Illuminate\Http\JsonResponse
    {
        return $this->ajaxResponseRequest(false, $data, $messages, $responseCode);
    }

    public function ajaxExceptionErrorResponse($messages = [], $data = null): \Illuminate\Http\JsonResponse
    {
        return $this->ajaxErrorResponse(Helper::HTTP_SERVE_ERROR, $messages, $data);
    }

    public function ajaxValidateErrorResponse($messages = []): \Illuminate\Http\JsonResponse
    {
        $messages = (is_array($messages) ? $messages : [$messages]);
        $resMessages = [];

        foreach ($messages as $field => $fieldMessages) {
            if (is_array($fieldMessages)) {
                $resMessages = array_merge($resMessages, $fieldMessages);
            } else {
                $resMessages[] = $fieldMessages;
            }
        }

        return $this->ajaxErrorResponse(Helper::HTTP_UNPROCESSABLE_ENTITY, $resMessages);
    }

    public function ajaxNotFoundErrorResponse($messages = []): \Illuminate\Http\JsonResponse
    {
        $messages = (!empty($messages) ? $messages : __("message.http_not_found"));

        return $this->ajaxErrorResponse(Helper::HTTP_NOT_FOUND, $messages);
    }

    public function ajaxForbiddenErrorResponse($messages = []): \Illuminate\Http\JsonResponse
    {
        $messages = (!empty($messages) ? $messages : __("message.http_forbidden"));

        return $this->ajaxErrorResponse(Helper::HTTP_FORBIDDEN, $messages);
    }

    public function ajaxResponseRequest(bool $code, $data = null, $messages = [], $responseCode = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'code' => (int)$code,
            'response_code' => $responseCode,
            'data' => $data,
            'message' => is_array($messages) ? $messages : [$messages],
        ]);
    }
}
