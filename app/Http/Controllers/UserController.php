<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\registerPostRequest;
use App\Http\Requests\loginPostRequest;
use App\Http\Requests\resetPostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;


class UserController extends Controller
{
    public function register(registerPostRequest $request)
    {
        // dd($request);
        User::create([
            'name' => $request->input('regName'),
            'email' => $request->input('regEmail'),
            'password' => $request->input('regPassword'),
            // 他のフィールドも同様に
        ]);
        // セッション保存
        $request->session()->put('name', $request->regName);
        $request->session()->put('email', $request->regEmail);
        $request->session()->put('password', $request->regPassword);

        $role = 0;
        # 管理者アカウント(role=1)であれば管理者ページへ
        if ($role == 1) {
            session()->put('kindFlgs', 'success');
            session()->flash('flash_message', '新規登録完了しました');
            return back()->withInput();
        }

        if ($role == 0) {
            session()->put('kindFlgs', 'success');
            session()->flash('flash_message', '新規登録完了しました');
            return back()->withInput();
        }
    }

    // ログイン
    public function login(loginPostRequest $request)
    {
        //バリデーション済みログイン情報取得
        $email = $request->input('logEmail');
        $password = $request->input('logPassword');

        //ログイン成功時
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $request->session()->regenerate();

            //ログイン情報からユーザーデータ取得
            $user = DB::table('users')->where('email', '=', $email)->first();
            //ユーザーデータをセッションに追加
            session()->put('name', $user->name);
            $role = 0;
            # 管理者アカウント(role=1)であれば管理者ページへ
            if ($role == 1) {
                session()->put('kindFlgs', 'success');
                session()->flash('flash_message', '管理者ログイン完了しました');
                return back()->withInput();
            }
            if ($role == 0) {
                session()->put('kindFlgs', 'success');
                session()->flash('flash_message', 'ログイン完了しました');
                return back()->withInput();
            }
        }
        //ログインエラー時
        else {
            session()->put('kindFlgs', 'loginErr');
            session()->put('error_message', 'ログインに失敗しました');
            session()->put('error_message_detail', '入力情報を確認して下さい');
            return back();
        }
    }

    // ログアウト
    public function logout()
    {
        session()->flush();
        return back();
    }

    // パスワードリセット
    public function reset(resetPostRequest $request)
    {
        dd($request);
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return back();
    }
}
