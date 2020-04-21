@extends('layouts.app')

@section('content')
    <div class="container" x-data="{message: 'Hello from Alpine'}">
        @livewire('sample-component')
        <p>If you don't see the text <code>Helo from Alpine</code>,
            open <code>resources/views/layouts/app.blade.php</code> and uncomment line 16 to include alpine cd which I did to solve my issue temporarily.
        </p>

        <div x-text="message"></div>
    </div>
@endsection
