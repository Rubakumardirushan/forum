<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Main extends Component
{
 public $shan='shan';
 public $val=1;
 public $clickid;
 public $showbutton=false;
 public $threads;
 public $url;
    public function render()
    {

        $this->threads = Thread::all();
        return view('livewire.main');
    }
  public function check($id,$nid)
  {
     if(Auth::id()==$id && $this->val==1)
     {
         $this->showbutton=true;
         $this->clickid=$nid;
         $this->val=0;
     }
     else
     {
            $this->showbutton=false;
            $this->val=1;
     }
  }

  public function delete($id)
  {
      Thread::destroy($id);
      session()->flash('message', 'Thread deleted successfully.');
  }
  
}
