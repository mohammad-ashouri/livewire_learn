<div>
    <h1>Typer: message</h1>
    <hr>
    <form>
        <div>
            <label for="input-message">
                Message <span style="color: red">*</span>
            </label>
            <br>
            <br>
            <textarea name="message" id="input-message" wire:model="message" placeholder="Write your message here..."
                      cols="30" rows="10"></textarea>
            <p>Message length: <span x-text="$wire.message.length"></span></p>
            <button>
                Submit
                <span x-show="$wire.message.length <= 15">
                    Short Story
                </span>
                <span x-show="$wire.message.length > 15 && $wire.message.length<=30">
                    Long Story
                </span>
                <span x-show="$wire.message.length > 30 ">
                    Romance
                </span>
            </button>
        </div>
    </form>
</div>
