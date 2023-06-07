<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;

class ChatList extends Component
{
    public $auth_id;
<<<<<<< HEAD
    public $conversasions;
    public $receiverInstance;
    public $name;

    public function getChatUserInstance(Conversation $conversasion, $request){
        $this->auth_id = auth()->id();
        if ($conversasion->sender_id == $this->auth_id) {
            $this->receiverInstance=User::firstWhere('id',$conversasion->receiver_id);
        }else{
            $this->receiverInstance=User::firstWhere('id',$conversasion->sender_id);
        }

        if(isset($request)){
=======
    public $conversations;
    public $receiverInstance;

    public function getChatUserInstance(Conversation $conversation, $request)
    {
        $this->auth_id = auth()->id();

        if ($conversation->sender_id == $this->auth_id) {
            $this->receiverInstance = User::firstWhere('id', $conversation->receiver_id);
        } else {
            $this->receiverInstance = User::firstWhere('id', $conversation->sender_id);
        }

        if (isset($request)) {
>>>>>>> 9580ec8f9d565d0410b68c409a1fb1f2af773df1
            return $this->receiverInstance->$request;
        }
    }

<<<<<<< HEAD
    public function mount(){
        $this->auth_id = auth()->id();
        $this->conversasions = Conversation::where('sender_id',$this->auth_id)
        ->orWhere('receiver_id',$this->auth_id)->orderBy('last_time_message','DESC')->get();
=======
    public function mount()
    {
        $this->auth_id = auth()->id();
        $this->conversations = Conversation::where('sender_id', $this->auth_id)
            ->orWhere('receiver_id', $this->auth_id)->orderBy('last_time_message', 'DESC')->get();
>>>>>>> 9580ec8f9d565d0410b68c409a1fb1f2af773df1
    }

    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
