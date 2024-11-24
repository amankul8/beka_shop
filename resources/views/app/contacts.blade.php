@extends('layouts.app')

@section('title', 'MANIA FABRIC, контакты')

@section('head')
    <meta name="description" content="Мы предлагаем широкий спектр услуг, необходимых для создания качественной одежды и подготовки её к продаже на маркетплейсах">

    <meta property="og:title" content="MANIA FABRIC,  швейное производство в Бишкеке" />
    <meta property="og:description" content="Широкий выбор модной и качественной одежды для мужчин и женщин. Откройте для себя стильные новинки и акционные предложения." />
    <meta property="og:url" content="https://mania-fabric.ru" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Mania fabric" />
    <meta property="og:image" content="{{ asset('dist/images/logo.png') }}">
@endsection

@section('content')

    <div class="container contact_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li class="active"><a href="{{route('contact-us')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>Контакты</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Contact Us -->

        <div class="row">
            <div class="col-lg-6 contact_col">
                <div class="contact_contents">
                    <h1>Связаться с нами</h1>
                    <p>
                        Мы всегда на связи и готовы ответить на любые ваши вопросы! В Mania Fabric мы стремимся к открытой и прозрачной коммуникации с нашими клиентами и партнёрами. Если у вас есть вопросы о нашем ассортименте, заказах или сотрудничестве, свяжитесь с нами удобным для вас способом. Мы оперативно реагируем на все запросы и делаем всё возможное, чтобы ваш опыт взаимодействия с нами был максимально комфортным.
                    </p>
                    <div>
                        <p>+996 701 11 45 65</p>
                        <p>mania.fabrik@gmail.com</p>
                    </div>
                    <div>
                        <p>Instagram: <a href="https://www.instagram.com/fabricmania.kg?utm_source=qr&igsh=MWFwajg1N2Z4enFkYg==">maniafabric.kg</a> </p>
                    </div>
                    <div>
                        <p>Telegram: <a href="https://t.me/fabric_mania">fabric_mania</a></p>
                    </div>
                </div>

                <!-- Follow Us -->

                <div class="follow_us_contents">
                    <h1>Follow Us</h1>
                    <ul class="social d-flex flex-row">
                        <li><a href="https://t.me/fabric_mania" style="background-color: #3a61c9"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                        <li><a href="https://wa.me/996701114565" style="background-color: #41a1f6"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/fabricmania.kg?utm_source=qr&igsh=MWFwajg1N2Z4enFkYg==" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>

            <div class="col-lg-6 get_in_touch_col">
                <div class="get_in_touch_contents">
                    <h1>Обратная связь</h1>
                    <p>Мы ценим ваше доверие и готовы предложить профессиональные консультации, поддержку на каждом этапе сотрудничества и индивидуальный подход.</p>
                    <form action="post">
                        <div>
                            <input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
                            <input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
                            <input id="input_website" class="form_input input_website input_ph" type="url" name="name" placeholder="Website" required="required" data-error="Name is required.">
                            <textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
                        </div>
                        <div>
                            <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300 p-3" value="Submit"> Отправить </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Map Container -->

        <div class="row mt-5">
            <div class="col">
                <div id="google_map">
                    <div class="map_container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2922.4185409687246!2d74.6380495!3d42.8510844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb658ac12724d%3A0x31d554a072dc94ce!2z0YPQuy4g0KLQvtC9LCDQkdC40YjQutC10Lo!5e0!3m2!1sru!2skg!4v1672239918130!5m2!1sru!2skg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

