<div>

    @if ($selectedConversation)

        <form wire:submit.prevent='sendMessage' action="">
            <div class="chatbox_footer">
                <div class="custom_form_group">
                    
                    <!-- File Input (Hidden) -->
                    <label for="file-input" style="margin-top: 10px"><i class="bi bi-link-45deg" id="file-input-icon" style="font-size: 25px; cursor: pointer"></i></label>
                    <input type="file" id="file-input" style="display: none">
                    
                    <input wire:model='body' type="text" class="control" id="sendMessage" placeholder="Write message">
                    <button type="submit" class="submit">Send</button>
                </div>
            </div>
        </form>

    @endif

</div>