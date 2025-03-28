<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Traits\ApiResponseTrait;
use App\Services\Auth\AuthServices;
use App\Traits\Http\RespondsWithToken;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    use ApiResponseTrait;
    protected AuthServices $authServices;

    public function __construct(AuthServices $authService)
    {
        $this->authService = $authService;
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        try {
            $dto = $request->toDTO();

            $user = $this->authService->register($dto);

            $token = $this->authService->generateToken($user);

            return $this->respondWithToken($token, 'Registration successful', $user);

        } catch (ValidationException $e) {
            return $this->errorResponse('Validation failed', 422, $e->errors());

        } catch (\Exception $e) {
            return $this->exceptionResponse($e, 'Registration failed');
        }
    }
    public function login(LoginRequest $request){

        $DTO = $request->GetTdo($request);

    }
}
