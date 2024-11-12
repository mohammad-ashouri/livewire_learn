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
                    wire:model="form.full_name"
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
                    wire:model="form.email"
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
            <button wire:loading.remove type="submit">
                Join Newsletter
            </button>
            <button wire:loading.remove type="reset">
                Reset Data
            </button>
            <div wire:loading.flex wire:target="joinNewsletter" style="align-items: center; gap: 8px">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                    <style>.spinner_z9k8 {
                            transform-origin: center;
                            animation: spinner_StKS .75s infinite linear
                        }

                        @keyframes spinner_StKS {
                            100% {
                                transform: rotate(360deg)
                            }
                        }</style>
                    <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                          opacity=".25"/>
                    <path
                        d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z"
                        class="spinner_z9k8"/>
                </svg>
                <p>Processing request...</p>
            </div>
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
