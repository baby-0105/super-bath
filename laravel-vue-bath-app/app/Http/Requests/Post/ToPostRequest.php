<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

/**
 * お風呂投稿 リクエストクラス
 */
class ToPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['bail', 'required', 'string', 'max:30', 'regex:/^[^#<>^;_]*$/'],
            'eval' => ['bail', 'required', 'exists:code_names,code,group_key,EVAL'],
            'hot_water_eval' => ['bail', 'nullable', 'exists:code_names,code,group_key,EVAL'],
            'rock_eval' => ['bail', 'nullable', 'exists:code_names,code,group_key,EVAL'],
            'sauna_eval' => ['bail', 'nullable', 'exists:code_names,code,group_key,EVAL'],
            'thoughts' => ['bail', 'nullable', 'string', 'max:240', 'regex:/^[^#<>^;_]*$/'],
            'main_img' => ['bail', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
            'sub1_img' => ['bail', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
            'sub2_img' => ['bail', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
            'sub3_img' => ['bail', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
        ];
    }

    /**
     * 属性定義
     *
     */
    public function attributes()
    {
        return [
            'title' => 'お風呂名',
            'eval' => '全体評価',
            'hot_water_eval' => 'お湯評価',
            'rock_eval' => '岩盤浴評価',
            'sauna_eval' => 'サウナ評価',
            'thoughts' => '感想',
            'main_img' => 'メイン画像',
            'sub1_img' => 'サブ1画像',
            'sub2_img' => 'サブ2画像',
            'sub3_img' => 'サブ3画像',
        ];
    }
}