<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskConfirm extends Component
{

    public $posts;

    public function mount()
    {
        // sessionに保存した入力値を取得
        $this->posts = session()->get('posts');
        // 入力なしで確認画面に直接アクセスがあったらhomeへリダイレクト
        if(empty($this->posts)){
            return redirect()->route('dashboard');
        }
    }
    public function render()
    {
        return view('livewire.task-confirm');
    }
}
