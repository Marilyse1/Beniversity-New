@extends('layouts.app')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
<<<<<<< HEAD
                    <li><a href="index.html">Accueil</a></li>
                    <li><span>/</span></li>
                    <li class="active">Contact</li>
                </ul>
                <h2>Contact us</h2>
=======
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Contact</li>
                </ul>
                <h2>Nous Contactez</h2>
>>>>>>> main
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Three Start-->
    <section class="contact-three">
        <div class="contact-three-shape"
            style="background-image: url(assets/images/shapes/contact-three-shape.png);"></div>
        <div class="container">
            <div class="section-title text-center">
<<<<<<< HEAD
                <span class="section-title__tagline">Contact with us</span>
                <h2 class="section-title__title">Feel free to write us <br> anytime</h2>
=======
                <span class="section-title__tagline">ONG beniversity</span>
                <h2 class="section-title__title">Nous somme à votre écoute <br> 24/24 H</h2>
>>>>>>> main
            </div>
            <div class="contact-page__form-box">
                <form action="https://layerdrops.com/oxpinshtml/main-html/assets/inc/sendemail.php" class="contact-page__form contact-form-validated"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
<<<<<<< HEAD
                                <input type="text" placeholder="Your name" name="name">
=======
                                <input type="text" placeholder="Votre nom" name="name">
>>>>>>> main
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
<<<<<<< HEAD
                                <input type="email" placeholder="Email address" name="email">
=======
                                <input type="email" placeholder="Votre email" name="email">
>>>>>>> main
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
<<<<<<< HEAD
                                <input type="text" placeholder="Phone" name="phone">
=======
                                <input type="text" placeholder="votre télephone" name="phone">
>>>>>>> main
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
<<<<<<< HEAD
                                <input type="text" placeholder="Subject" name="subject">
=======
                                <input type="text" placeholder="Sujet" name="subject">
>>>>>>> main
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form__input-box text-message-box">
<<<<<<< HEAD
                                <textarea name="message" placeholder="Write a message"></textarea>
                            </div>
                            <div class="contact-form__btn-box">
                                <button type="submit" class="thm-btn contact-form__btn">Send a message</button>
=======
                                <textarea name="message" placeholder="Votre texte ici"></textarea>
                            </div>
                            <div class="contact-form__btn-box">
                                <button type="submit" class="thm-btn contact-form__btn">Envoyer</button>
>>>>>>> main
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Contact Three End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="contact-one__inne">
                <ul class="list-unstyled contact-one__list">
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="contact-one__content">
<<<<<<< HEAD
                            <p class="contact-one__sub-title">Helpline</p>
                            <h3 class="contact-one__number"><a href="tel:980009630">+ 98 (000) - 9630</a></h3>
=======
                            <p class="contact-one__sub-title">Téléphone</p>
                            <h3 class="contact-one__number"><a href="tel:229 000 000">+ 229 000 000</a></h3>
>>>>>>> main
                        </div>
                    </li>
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-message"></span>
                        </div>
                        <div class="contact-one__content">
<<<<<<< HEAD
                            <p class="contact-one__sub-title">Send email</p>
                            <h3 class="contact-one__number"><a
                                    href="mailto:needhelp@company.com">needhelp@company.com</a></h3>
                        </div>
                    </li>
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="contact-one__content">
                            <p class="contact-one__sub-title">380 St Kilda Road</p>
                            <h3 class="contact-one__number">Melbourne, Australia</h3>
                        </div>
                    </li>
=======
                            <p class="contact-one__sub-title">Envoyer un mail</p>
                            <h3 class="contact-one__number"><a
                                    href="mailto:beniversity@gmail.com">beniversity@gmail.com</a></h3>
                        </div>
                    </li>
                   
>>>>>>> main
                </ul>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Google Map Start-->
    <section class="google-map google-map-two">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map__one" allowfullscreen></iframe>
<<<<<<< HEAD
=======

    </section>
    <!--Google Map End-->

@endsection
>>>>>>> main

    </section>
    <!--Google Map End-->
    
@endsection