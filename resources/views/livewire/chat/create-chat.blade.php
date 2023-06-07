<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <ul class="list-group w-75 mx-auto mt-3 container-fluid">
        @foreach ($users as $user)
<<<<<<< HEAD
            <li class="list-group-item list-group-item-action" wire:click='checkConversation({{ $user->id }})'>{{ $user->name }}</li>
=======
            <li class="list-group-item list-group-item-action" wire:click="checkConversation({{ $user->id }})">{{ $user->name }}</li>
>>>>>>> 9580ec8f9d565d0410b68c409a1fb1f2af773df1
        @endforeach
    </ul>
</div>
