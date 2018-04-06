@extends('layouts.default')
@section('content')
@include('inc.profile_common')
<?php
$user = Session::get('user');
?>
    <div id="right-column">
        @include('inc.profile_form')
        <h3><?= _("Account"); ?></h3>
        <a class="change-password-link" href="/change_password/"><?= _("Change my password"); ?></a>
    </div>

@endsection