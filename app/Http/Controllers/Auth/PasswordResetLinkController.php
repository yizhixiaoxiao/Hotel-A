<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // 我们将向该用户发送密码重置链接。一旦我们尝试发送链接，
        // 我们将检查响应，然后查看需要向用户显示的消息。
        // 最后，我们将发送一个适当的响应。
        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );

        // return $status == Password::RESET_LINK_SENT
        //             ? back()->with('status', __($status))
        //             : back()->withInput($request->only('email'))
        //                     ->withErrors(['email' => __($status)]);
        // 获取用户实例
        $user = \App\Models\User::where('email', $request->email)->firstOrFail();

        // 生成重置令牌（替代邮件发送）
        $token = Password::createToken($user);

        // 直接跳转到密码重置页面
        return redirect()->route('password.reset', [
            'token' => $token,
            'email' => $user->email
        ]);
    }
}
