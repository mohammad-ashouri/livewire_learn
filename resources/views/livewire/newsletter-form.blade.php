<div>
    <h2>
        Join Our Newsletter
    </h2>
    <p>
        We ensure you that we won't use your data for commercial usage.
    </p>
    <form wire:submit.prevent="joinNewsletter">
        <div>
            <label for="input-full-name">
                Full Name <span>*</span>
            </label>
            <br>
            <input
                wire:model="fullName"
                type="text"
                name="full-name"
                id="input-full-name"
            />
        </div>
        <br>
        <div>
            <label for="input-email">
                Email <span>*</span>
            </label>
            <br>
            <input
                wire:model="email"
                type="text"
                name="email"
                id="input-email"
            />
        </div>
        <br>
        <button type="submit">
            Join Newsletter
        </button>
        <button type="reset">
            Reset Data
        </button>
    </form>
</div>
