@extends('master')
@section('title', 'Votre partenaire en produits d hygiène')
@section('description', '')

@section('stylesheet')
    <style>

    </style>
@endsection
@section('content')
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h1>{{ __('partials.navbar.contact') }}</h1>
                </header>
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
                            @include('partials.messages-alert')
                            @csrf
                            <div class="row gy-4">
                                @include('partials.contact-form')
                                <div class="col-md-12">
                                    <label for="message"
                                        class="form-label">{{ __('partials.forms.contact.message') }}*</label>
                                    <textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message"
                                        rows="6" required> {{ old('message') }}</textarea>
                                    @error('message')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit">{{ __('partials.buttons.send') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div class="row gy-4">
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>{{ __('partials.forms.contact.address') }}</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>{{ __('partials.forms.contact.phone') }}</h3>
                                    <p>+(212)6 00 00 00 00</p><br />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>{{ __('partials.forms.contact.email') }}</h3>
                                    <p>elghanemysaad@gmail.com</p>
                                    <br />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box mb-4">
                                    <p>
                                        <a href="#" target="_blank" class="instagram">
                                            <h3><i class="bi bi-instagram me-3"></i>Lorem ipsum</h3>
                                        </a>
                                        <a href="#" target="_blank" class="facebook">
                                            <h3><i class="bi bi-facebook me-3 "></i>Lorem ipsum</h3>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
@endsection
