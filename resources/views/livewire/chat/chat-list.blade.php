<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="chatlist_header">
        <div class="title">
            Chat
        </div>
        <div class="img_container">
            <img src="https://picsum.photos/id/237/200/300">
        </div>
    </div>

<<<<<<< HEAD
    @if (count($conversasions) > 0)
        @foreach ($conversasions as $conversasion)
        <div class="chatlist_body">
            <div class="chatlist_item">
                <div class="chatlist_img_container">
                    <img src="https://picsum.photos/id/{{$this->getChatUserInstance($conversasion, $name = 'id')}}/200/300" alt="">
                </div>
                <div class="chatlist_info">
                    <div class="top_row">
                        <div class="list_username">{{$this->getChatUserInstance($conversasion, $name = 'name')}}</div>
                        <span class="date">{{$conversasion->messages->last()->created_at->shortAbsoluteDiffForHumans()}}</span>
                    </div>
                    <div class="bottom_row">
                        <div class="message_body text-truncate">
                            {{$conversasion->messages->last()->body}}
                        </div>
                        <div class="unread_count">
                            100
=======
    @if (count($conversations) > 0)
        @foreach ($conversations as $conversation)
            <div class="chatlist_body">
                <div class="chatlist_item">
                    <div class="chatlist_img_container">
                        <img src="https://picsum.photos/id/{{ $this->getChatUserInstance($conversation, $name = 'id') }}/200/300" alt="">
                    </div>
                    <div class="chatlist_info">
                        <div class="top_row">
                            <div class="list_username">{{ $this->getChatUserInstance($conversation, $name = 'name') }}</div>
                            <span class="date">{{ $conversation->messages->last()->created_at->shortAbsoluteDiffForHumans() }}</span>
                        </div>
                        <div class="bottom_row">
                            <div class="message_body text-truncate">
                                {{ $conversation->messages->last()->body }}
                            </div>
                            <div class="unread_count">
                                100
                            </div>
>>>>>>> 9580ec8f9d565d0410b68c409a1fb1f2af773df1
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
        @endforeach
        @else
        Kamu ga ada obrolan
=======
        @endforeach
        @else {
            You have no conversations
        }
>>>>>>> 9580ec8f9d565d0410b68c409a1fb1f2af773df1
    @endif
</div>
