@php use App\Models\Newsletter; @endphp
<div>
    <h1>
        Form :: Home Page
    </h1>
    <p>
        Here is your home page component
    </p>
    <hr>
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
                    wire:model.blur="form.full_name"
                    type="text"
                    name="full-name"
                    id="input-full-name"
                />
                @error('form.full_name')
                <p style="color: #ff6d6d; margin-top: 4px">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <br>
            <div>
                <label for="input-email">
                    Email <span>*</span>
                </label>
                <br>
                <input
                    wire:model.blur="form.email"
                    type="text"
                    name="email"
                    id="input-email"
                />
                @error('form.email')
                <p style="color: #ff6d6d; margin-top: 4px">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <br>
            <button type="submit">
                Join Newsletter
            </button>
            <button type="reset">
                Reset Data
            </button>
        </form>
        @if($form->isSucceeded)
            <p style="color: deepskyblue">
                {{ $form->message }}
            </p>
        @endif
    </div>
    <hr>
    <ul>
        @foreach(Newsletter::all() as $newsletterUser)
            <li wire:key="newsletter-user-{{ $newsletterUser->id }}">
                {{ $newsletterUser->full_name }} : {{ $newsletterUser->email }}
                <button wire:click="unsubscribeFromNewsletter({{ $newsletterUser->id }})">
                    Unsubscribe
                </button>
            </li>
        @endforeach
    </ul>
</div>
