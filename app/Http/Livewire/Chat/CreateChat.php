<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class CreateChat extends Component
{
    public $users;
<<<<<<< HEAD
    public $message='hello';
    public function checkConversation($receiverId){

        $checkedConversation = Conversation::where('receiver_id',auth()->user()->id)->where('sender_id',$receiverId)
        ->orWhere('receiver_id',$receiverId)->where('sender_id',auth()->user()->id)->get();

        if (count($checkedConversation)==0) {
            $createConversation=Conversation::create([
                'receiver_id'=>$receiverId,
                'sender_id'=>auth()->user()->id,
                'last_time_message'=>0
            ]);
            $createMessage=Message::create([
                'conversation_id'=>$createConversation->id,
                'sender_id'=>auth()->user()->id,
                'receiver_id'=>$receiverId,
                'body'=>$this->message,
            ]);
            $createConversation->last_time_message=$createMessage->created_at;
            $createConversation->save();
            dd($createMessage);
        }else if(count($checkedConversation)>=1){
            dd('conversation exist');
=======
    public $message = 'Hello';

    public function checkConversation($receiverId)
    {

        $checkConversation = Conversation::where('receiver_id', auth()->user()->id)->where('sender_id', $receiverId)
        ->orWhere('receiver_id', $receiverId)->where('sender_id', auth()->user()->id)->get();

        if (count($checkConversation) == 0) {
            $createConversation = Conversation::create([
                'receiver_id' => $receiverId,
                'sender_id' => auth()->user()->id,
                'last_time_message' => 0
            ]);

            $createMessage = Message::create([
                'conversation_id' => $createConversation->id,
                'sender_id' => auth()->user()->id,
                'receiver_id' => $receiverId,
                'body' => $this->message,
            ]);

            $createConversation->last_time_message = $createMessage->created_at;
            $createConversation->save();
            dd($createMessage);
        } else if(count($checkConversation) >= 1) {
            dd('Conversation Exist');
>>>>>>> 9580ec8f9d565d0410b68c409a1fb1f2af773df1
        }
    }

    public function render()
    {
        $this->users = User::where('id', '!=', auth()->user()->id)->get();
        return view('livewire.chat.create-chat');
    }
}
