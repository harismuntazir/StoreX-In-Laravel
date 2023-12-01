@extends('app')

@section('content')
    <div class="container">
        <h1 class="title">Contact Us</h1>

        <div class="content">
            <p>If you have any questions or need assistance, feel free to reach out to us. We're here to help!</p>

            <h3>Get In Touch</h3>
            <p>
                You can contact us through the following channels:
            </p>
            <ul>
                <li>Email: <a href="mailto:support@storex.com">support@storex.com</a></li>
                <li>Phone: +1 234 567 8900</li>
                <li>Address: 123 StoreX Lane, Shopping City, SC 12345</li>
            </ul>

            <h3>Send Us a Message</h3>
            <form method="post" action="#">
                @csrf
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <label>
                            <input class="input" type="text" name="name" placeholder="Your Name" required>
                        </label>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <label>
                            <input class="input" type="email" name="email" placeholder="Your Email" required>
                        </label>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        <label>
                            <textarea class="textarea" name="message" placeholder="Your Message" required></textarea>
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
