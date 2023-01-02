<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskInput extends Component
{
    //     ユーザーが入力する値
    public $posts;


    protected $rules = [
        // name を必須
        'posts.title' => 'required',
        // email を必須 かつ メールアドレス形式
        'posts.body' => 'required',
    ];

    protected $messages = [
        'posts.*.required' => '必須項目です',
    ];

    public function confirm()
    {
        $this->validate();

        session()->put('posts', $this->posts);

//        return redirect()->route(name('task-confirm'));
        return redirect(route('task.confirm'));
    }

    public function mount()
    {
        // 確認画面から入力に戻ったときのため、sessionに保存した入力値を取得
        $this->posts = session()->get('posts');
    }

    public function render()
    {
        return view('livewire.task-input');
    }
}
