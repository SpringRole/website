@extends('layouts.default')
@section('content')
    <section>
        <div class="container">
            @include('inc.profile_form')
            <h3><?= _("Account"); ?></h3>
            <a class="change-password-link" href="/change_password/"><?= _("Change my password"); ?></a>
        </div>
    </section>
@endsection