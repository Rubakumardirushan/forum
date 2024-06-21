<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Thread;
use Illuminate\Http\Request;
class Forum extends Component
{

    public $authlogin,$side='side';
    public function render()
    {
        return view('livewire.forum');
    }

    public function checklogin(){
        if(Auth::check()){
            $this->authlogin = true;
            $this->side = '';
        }else{
            $this->authlogin = false;
            $this->side = '';
        }
    }
  
    public function github(){
        $this->side='side';
        $this->authlogin = '';
        return redirect()->route('auth.github');
    }
public function logout(){
    Auth::logout();
    return redirect('/');
}
 
public $title,$body,$channel;
public function store(){
    $this->validate([
        'title' => 'required',
        'body' => 'required',
        'channel' => 'required'
        
    ]);

    $thread = new Thread();
    $thread->title = $this->title;
    $thread->body = $this->body;
    $thread->channel = $this->channel;
    $thread->user_id = Auth::id();
    $thread->author_name = Auth::user()->name;
    $thread->avatar = Auth::user()->avatar;
    $thread->save();
    session()->flash('message', 'Thread created successfully.');
    $this->title = '';
    $this->body = '';
    $this->channel = '';



}
}