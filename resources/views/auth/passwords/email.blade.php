@extends('layouts.master')

@section('content')
<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{ asset('img/login.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Réinitialiser le mot de passe</h3>
                    <form class="row login_form" id="contactForm" novalidate="novalidate" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <!-- Email -->
                        <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Votre Email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Envoyer le lien de réinitialisation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
@endsection