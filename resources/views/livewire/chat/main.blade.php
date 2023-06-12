<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    
        <div class="chat_container">
        <div class="chat_list_container">
            @livewire('chat.chat-list')
        </div>
        <div class="chat_box_container">
            @livewire('chat.chatbox')
            @livewire('chat.send-message')
        </div>
    </div>

    <script>
        window.addEventListener('chatSelected', event => {
            if (window.innerWidth < 700){
                $('.chat_list_container').hide()
                $('.chat_box_container').show()
                $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight)
            }else{
                $('.return').hide()
                $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight)
            }
        })

        $(window).resize(function () {
            if (window.innerWidth > 768) {
                $('.chat_list_container').show()
                $('.chat_box_container').show()  
                $('.return').hide()  
            }
        })

        $(document).on('click','.return', function(){
            $('.chat_list_container').show()
                $('.chat_box_container').hide()
        })
    </script>
</div>
