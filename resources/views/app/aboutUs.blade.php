@extends('layouts.app')
@section('content')

    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>О нас</a></li>
                    </ul>
                </div>

                <section class="py-5">
                    <div class="container mb-4">
                        <div class="row gx-4 align-items-center">
                            <div class="col-md-6 order-2 order-lg-1">
                                <div class="me-md-2 me-lg-5 text-center mt-5 mt-md-0">
                                    <h2 class="display-5 fw-bold mb-4">MANIA FABRIC</h2>
                                    <p class="lead text-left">
                                        Это динамично развивающаяся швейная фабрика, основанная в 2014 году и уже зарекомендовавшая себя как надежный партнёр для российских селлеров. Мы занимаемся пошивом 2-го и 3-го слоев одежды, создавая качественные и современные изделия, которые соответствуют высоким стандартам рынка.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 order-1 order-lg-2">
                                <div class="ms-md-2 ms-lg-5">
                                    <img class="img-fluid rounded-3" src="{{asset('dist/images/factory/photo_1.jpg')}}" alt="" data-image="{{asset('dist/images/factory/photo_1.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center text-left">
                            <div class="col-lg-12">
                                <p class="lead">Наша фабрика полного цикла обладает мощной производственной базой: 60 специализированных машин позволяют нам выпускать до 20 тысяч единиц одежды ежемесячно. Мы уделяем особое внимание использованию передового оборудования и новейших технологий в производственном процессе, что позволяет нам поддерживать высокое качество на всех этапах изготовления одежды.</p>
                            </div>
                            <div class="col-lg-12">
                                <p class="lead">Каждый сотрудник фабрики MANIA FABRIC имеет многолетний опыт работы в швейной отрасли, что гарантирует профессиональный подход к каждому проекту. Мы берем на себя весь процесс подготовки товаров под маркетплейсы, начиная от разработки и пошива продукции и заканчивая ее маркировкой и упаковкой в соответствии с необходимыми стандартами.</p>
                            </div>
                            <div class="col-lg-12">
                                <p class="lead">Сотрудничество с нами — это гарантия того, что ваш товар будет полностью готов к продаже на крупнейших маркетплейсах, что позволяет вам сосредоточиться на продвижении и развитии бизнеса.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5 my-md-5">
                    <div class="container">
                        <div class="row justify-content-center text-center mb-3">
                            <div class="col-lg-8 col-xl-7">
                                <span class="text-muted">Услиги</span>
                                <h2 class="display-5 fw-bold">Наши услуги</h2>
                                <p class="lead">Мы предлагаем широкий спектр услуг, необходимых для создания качественной одежды и подготовки её к продаже на маркетплейсах:</p>
                            </div>
                        </div>
                        <div class="row g-4 g-md-5">
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <div class="text-primary">
                                        <svg class="bi bi-aspect-ratio" fill="#fe4c50" height="32" viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
                                            <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"></path></svg>
                                    </div>
                                    <h5 class="fw-bold ms-4 mb-0">Шелкография и сублимация</h5>
                                </div>
                                <p>Методы нанесения изображений на ткань, такие как шелкография и сублимация, позволяют добиться ярких, стойких к износу принтов, которые сохраняют свой внешний вид даже после многократных стирок.</p>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <div class="text-primary">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.3889 29.0193C36.2301 29.0193 36.0778 28.9561 35.9654 28.8437C35.8531 28.7312 35.79 28.5787 35.79 28.4196V14.2504C35.7884 14.1804 35.8011 14.1108 35.8272 14.0458L38.0835 7.83053C36.3193 6.55679 33.789 5.69678 30.3627 5.21331C30.2729 6.90952 29.5367 8.50661 28.3059 9.67548C27.075 10.8443 25.4432 11.4959 23.7469 11.4959C22.0505 11.4959 20.4187 10.8443 19.1878 9.67548C17.957 8.50661 17.2208 6.90952 17.131 5.21331C14.7354 5.29699 12.2097 6.17094 9.43805 7.87702L11.6758 14.0505C11.7019 14.1154 11.7146 14.185 11.713 14.255V28.4196C11.6997 28.5701 11.6307 28.7103 11.5194 28.8123C11.4081 28.9144 11.2627 28.971 11.1117 28.971C10.9608 28.971 10.8154 28.9144 10.7041 28.8123C10.5928 28.7103 10.5237 28.5701 10.5105 28.4196V14.3666L8.13809 7.85842C8.09109 7.72938 8.0894 7.58816 8.13328 7.45803C8.17717 7.3279 8.26401 7.21662 8.37951 7.14252C11.4901 5.11569 14.3454 4.10227 17.1031 4H17.7392C17.8211 3.99993 17.9022 4.01682 17.9773 4.04962C18.0524 4.08242 18.1199 4.13042 18.1756 4.1906C18.2328 4.24839 18.2772 4.31757 18.306 4.39364C18.3348 4.46972 18.3473 4.551 18.3427 4.63222V4.74844C18.3427 4.79958 18.3427 4.85071 18.3427 4.9065C18.3427 6.3453 18.9136 7.72518 19.9297 8.74257C20.9457 9.75996 22.3238 10.3315 23.7608 10.3315C25.1977 10.3315 26.5758 9.75996 27.5919 8.74257C28.608 7.72518 29.1788 6.3453 29.1788 4.9065C29.1788 4.85071 29.1788 4.79958 29.1788 4.74844V4.63222C29.1742 4.551 29.1868 4.46972 29.2156 4.39364C29.2443 4.31757 29.2888 4.24839 29.346 4.1906C29.4016 4.13042 29.4692 4.08242 29.5443 4.04962C29.6194 4.01682 29.7004 3.99993 29.7824 4H30.3998H30.4834C34.3926 4.5439 37.2478 5.57126 39.2024 7.13787C39.3016 7.21639 39.3735 7.32434 39.4077 7.44626C39.4419 7.56819 39.4367 7.69782 39.3928 7.81658L36.9786 14.3666V28.4196C36.9774 28.5767 36.9152 28.7272 36.8051 28.8391C36.695 28.951 36.5458 29.0157 36.3889 29.0193Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M36.9927 43.7882H10.5015V39.2697H11.7039V42.5842H35.7856V39.2697H36.9927V43.7882Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M36.9791 20.4657C36.8758 20.4654 36.7743 20.4388 36.6841 20.3884C36.594 20.338 36.5181 20.2654 36.4637 20.1775C36.3812 20.0411 36.3559 19.8776 36.3933 19.7226C36.4307 19.5676 36.5278 19.4337 36.6634 19.35L41.9421 16.1192L38.5483 8.15596C38.4867 8.00925 38.4859 7.84405 38.546 7.69672C38.606 7.54938 38.7221 7.43198 38.8686 7.37033C39.0152 7.30869 39.1802 7.30785 39.3273 7.368C39.4744 7.42816 39.5917 7.54438 39.6533 7.69109L43.4788 16.6027L37.3087 20.3774C37.2096 20.438 37.0951 20.4686 36.9791 20.4657Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M11.1006 20.41C10.9922 20.4097 10.886 20.3791 10.7941 20.3216L4.65186 16.6027L7.82746 7.71901C7.8487 7.63804 7.88651 7.56236 7.9385 7.49679C7.99048 7.43122 8.05551 7.37718 8.12945 7.33809C8.20339 7.299 8.28463 7.27573 8.36803 7.26974C8.45143 7.26375 8.53516 7.27517 8.61392 7.30329C8.69268 7.33141 8.76474 7.3756 8.82554 7.43308C8.88634 7.49055 8.93455 7.56004 8.96711 7.63715C8.99968 7.71426 9.01589 7.79731 9.01471 7.88102C9.01353 7.96473 8.995 8.04729 8.96028 8.12345L6.11431 16.1006L11.4163 19.2943C11.5526 19.3772 11.6506 19.5108 11.6889 19.6658C11.7272 19.8209 11.7026 19.9848 11.6206 20.1217C11.5651 20.2097 11.4884 20.2822 11.3975 20.3326C11.3066 20.383 11.2045 20.4096 11.1006 20.41Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M24.0489 14.534C18.9419 14.534 14.7635 10.299 14.4478 4.89724L15.6224 4.83215C15.8823 9.61567 19.5872 13.3672 24.0581 13.3672C28.413 13.3672 32.1132 9.71794 32.4661 5.06924L33.6314 5.15756C33.2275 10.4106 29.0166 14.534 24.0489 14.534Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M39.0867 28.415H37.9121V31.4274H39.0867V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M31.8582 28.415H30.6836V31.4274H31.8582V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M27.6473 28.415H26.4727V31.4274H27.6473V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M20.4178 28.415H19.2432V31.4274H20.4178V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M16.8064 28.415H15.6318V31.4274H16.8064V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M9.58232 28.415H8.40771V31.4274H9.58232V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M35.47 28.415H34.2954V32.6361H35.47V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M24.0301 28.415H22.8555V32.6361H24.0301V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M13.7981 28.415H12.6235V32.6361H13.7981V28.415Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path><path d="M42.736 39.8554H4.75865C4.13025 39.8554 3.52752 39.6057 3.08274 39.1612C2.63795 38.7168 2.38746 38.1137 2.38623 37.4845V30.2047C2.39113 29.5779 2.64324 28.9784 3.08763 28.537C3.53201 28.0955 4.13265 27.8478 4.75865 27.8478H42.736C43.3652 27.8478 43.9686 28.0981 44.4135 28.5435C44.8584 28.989 45.1084 29.5932 45.1084 30.2233V37.4845C45.1071 38.1137 44.8567 38.7168 44.4119 39.1612C43.9671 39.6057 43.3644 39.8554 42.736 39.8554ZM4.75865 29.0053C4.60074 29.0047 4.44426 29.0352 4.29814 29.0952C4.15201 29.1551 4.01911 29.2433 3.90702 29.3547C3.79493 29.466 3.70585 29.5984 3.64485 29.7443C3.58386 29.8901 3.55216 30.0466 3.55155 30.2047V37.4845C3.55216 37.6426 3.58386 37.7991 3.64485 37.9449C3.70585 38.0908 3.79493 38.2232 3.90702 38.3345C4.01911 38.4459 4.15201 38.5341 4.29814 38.594C4.44426 38.654 4.60074 38.6845 4.75865 38.6839H42.736C42.8939 38.6845 43.0503 38.654 43.1965 38.594C43.3426 38.5341 43.4755 38.4459 43.5876 38.3345C43.6997 38.2232 43.7888 38.0908 43.8498 37.9449C43.9107 37.7991 43.9424 37.6426 43.9431 37.4845V30.2047C43.9418 29.887 43.8152 29.5826 43.5909 29.3579C43.3665 29.1333 43.0625 29.0065 42.7452 29.0053H4.75865Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="0.6"></path></svg>
                                    </div>
                                    <h5 class="fw-bold ms-4 mb-0">Изготовление лекал и пошив образца</h5>
                                </div>
                                <p>Профессиональная команда занимается разработкой лекал для точного кроя изделий, а также пошивом первых образцов, что позволяет оценить посадку, качество и соответствие дизайна перед запуском массового производства..</p>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <div class="text-primary">
                                        <svg class="bi bi-layout-text-window-reverse" fill="#fe4c50" height="32" viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"></path>
                                            <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"></path></svg>
                                    </div>
                                    <h5 class="fw-bold ms-4 mb-0">Услуги ОТК</h5>
                                </div>
                                <p>Отдел технического контроля проводит проверку качества на всех этапах производства, чтобы гарантировать отсутствие брака и соответствие продукции всем стандартам.</p>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <div class="text-primary">
                                        <svg class="bi bi-clipboard-check" fill="#fe4c50" height="32" viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" fill-rule="evenodd"></path>
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path></svg>
                                    </div>
                                    <h5 class="fw-bold ms-4 mb-0">Декатировка</h5>
                                </div>
                                <p>Процедура термической обработки ткани, которая предотвращает усадку и деформацию материала после стирки, что позволяет изделиям сохранять свой размер и форму.</p>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <div class="text-primary">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M38.7799 34.3726L31.3862 18.4994C30.6159 16.8571 29.3764 15.6857 27.7039 15.0194L22.8816 13.088L22.8124 13.0149C22.0067 12.1394 20.9673 11.6371 19.7873 11.54V0.421143C19.7873 0.188 19.5993 0 19.3667 0C19.1347 0 18.9461 0.188 18.9461 0.421143V11.54C18.5816 11.5686 18.2313 11.6326 17.8993 11.7377C17.4273 11.8017 16.9587 11.936 16.505 12.144C15.2776 12.7183 14.4404 13.6651 14.0187 14.9577L13.9821 15.0691L10.4393 18.8429C9.19986 20.1583 8.57129 21.744 8.57129 23.5566V41.0743C8.57129 44.8703 11.6593 47.9589 15.4564 47.9589H23.2787C24.1827 47.9589 25.0439 47.7789 25.8359 47.46C26.717 47.4143 27.569 47.2057 28.3702 46.8331L35.4536 43.5309C37.1199 42.756 38.3839 41.3737 39.0142 39.6411C39.6427 37.908 39.5599 36.036 38.7799 34.3726ZM19.3661 20.112C19.5987 20.112 19.7867 19.924 19.7867 19.692V17.6029C20.761 17.7989 21.497 18.6606 21.497 19.692C21.497 20.8663 20.541 21.8229 19.3661 21.8229C18.1913 21.8229 17.2353 20.8657 17.2353 19.692C17.2353 18.66 17.9713 17.7989 18.9456 17.6029V19.692C18.945 19.924 19.1336 20.112 19.3661 20.112ZM15.4553 47.116C12.1227 47.116 9.41186 44.4057 9.41186 41.0743V23.5566C9.41186 21.9657 9.96329 20.5737 11.0507 19.4194L16.525 13.5869C17.1884 12.8783 18.001 12.4731 18.945 12.3817V16.7526C17.505 16.9577 16.393 18.196 16.393 19.6926C16.393 21.3314 17.7273 22.6646 19.3656 22.6646C21.005 22.6646 22.3381 21.3314 22.3381 19.6926C22.3381 18.1954 21.2261 16.9583 19.7861 16.7526V12.3817C20.7319 12.4731 21.5404 12.8771 22.1947 13.588L27.6821 19.4194C28.769 20.5749 29.3204 21.9657 29.3204 23.5566V41.0743C29.3204 44.4057 26.6101 47.116 23.2776 47.116H15.4553ZM38.2222 39.3531C37.6684 40.8749 36.5593 42.088 35.097 42.7669L28.013 46.0709C28.0044 46.0743 27.9959 46.0777 27.9873 46.0811C29.3227 44.8246 30.1616 43.048 30.1616 41.0743V23.5566C30.1616 21.744 29.5336 20.1594 28.2947 18.8429L24.2496 14.5429L27.3907 15.8023C28.8799 16.3954 29.937 17.3954 30.6239 18.8566L38.017 34.7291C38.7027 36.1886 38.7747 37.8314 38.2222 39.3531Z" fill="#fe4c50" stroke="#fe4c50" stroke-width="1.1"></path></g><defs><clipPath id="clip0"><rect width="48" height="48" fill="white"></rect></clipPath></defs></svg>
                                    </div>
                                    <h5 class="fw-bold ms-4 mb-0">Упаковка и маркировка</h5>
                                </div>
                                <p>Подготовка продукции к продаже включает упаковку и нанесение всех необходимых маркировок, таких как штрих-коды, ярлыки и информация о составе ткани, что упрощает логистику и продажу на маркетплейсах.</p>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <div class="text-primary">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="#fe4c50" xmlns="http://www.w3.org/2000/svg"><path d="M45.5378 31.0956L42.2257 4.59124C42.1732 4.17385 41.9103 3.8608 41.5423 3.70428L32.132 0.626022C32.132 0.626022 32.132 0.626022 32.0795 0.626022C31.9743 0.573848 31.8692 0.521674 31.7115 0.521674H24.3515C24.2989 0.521674 24.2463 0.521674 24.1938 0.521674C24.0886 0.521674 23.9309 0.521674 23.8258 0.521674H16.308C16.0978 0.4695 15.8875 0.4695 15.7297 0.521674L9.94689 2.45211C9.94689 2.45211 9.94689 2.45211 9.89432 2.45211L6.16175 3.70428C5.79375 3.80863 5.47832 4.17385 5.47832 4.59124L2.11375 31.0956C1.58804 35.2695 2.90232 39.4434 5.68861 42.5738C8.47489 45.7043 12.5229 47.5304 16.7286 47.5304H30.9755C35.1812 47.5304 39.2292 45.7043 42.0155 42.5738C44.7492 39.3912 46.0635 35.2173 45.5378 31.0956ZM27.1377 2.60863H30.8703C31.0806 3.28689 31.1857 3.96515 31.1857 4.69559C31.1857 5.0608 31.1332 5.37385 31.0806 5.73907H27.1377C27.348 5.2695 27.5058 4.74776 27.5058 4.17385C27.5058 3.59994 27.4006 3.0782 27.1377 2.60863ZM30.4497 7.82602C29.2932 10.2782 26.7172 11.9999 23.8258 11.9999C20.9343 11.9999 18.3583 10.2782 17.2018 7.82602H23.8258C23.9309 7.82602 24.0886 7.82602 24.1938 7.82602C24.2463 7.82602 24.2989 7.82602 24.3515 7.82602H30.4497ZM16.7812 2.60863H23.8258C24.7195 2.60863 25.4029 3.28689 25.4029 4.17385C25.4029 5.00863 24.7195 5.73907 23.8258 5.73907H16.5709C16.5183 5.37385 16.4657 5.0608 16.4657 4.69559C16.4657 4.01733 16.5709 3.28689 16.7812 2.60863ZM11.2086 4.22602L14.468 3.13037C14.3629 3.65211 14.3629 4.17385 14.3629 4.69559C14.3629 9.8608 18.6212 14.0869 23.8258 14.0869C29.0303 14.0869 33.2886 9.8608 33.2886 4.69559C33.2886 4.17385 33.236 3.65211 33.1835 3.13037L36.4429 4.22602C36.4429 4.38254 36.4429 4.53907 36.4429 4.69559C36.4429 11.5825 30.7652 17.2173 23.8258 17.2173C16.8863 17.2173 11.2086 11.6347 11.2086 4.69559C11.2086 4.53907 11.2086 4.38254 11.2086 4.22602ZM40.3857 41.1651C38.02 43.8782 34.5503 45.3912 30.9229 45.3912H16.7286C13.1012 45.3912 9.68404 43.826 7.26575 41.1651C4.84746 38.4521 3.74346 34.9043 4.21661 31.3043L7.47604 5.4782L9.15832 4.90428C9.21089 12.8869 15.7823 19.3043 23.8258 19.3043C31.8692 19.3043 38.4406 12.8869 38.5457 4.90428L40.228 5.4782L43.4875 31.3043C43.908 34.9043 42.804 38.4521 40.3857 41.1651Z" fill="#fe4c50"></path><path d="M30.6599 27.1825L28.189 26.8173L27.1376 24.5216C26.5068 23.2173 25.245 22.4347 23.8256 22.4347C22.4062 22.4347 21.1445 23.2173 20.5136 24.5216L19.4096 26.8173L16.9913 27.1825C15.6245 27.3912 14.5205 28.3303 14.0473 29.6869C13.5742 31.0434 13.9422 32.5564 14.941 33.5477L16.7285 35.3738L16.3079 37.9303C16.045 39.3912 16.6233 40.7999 17.8325 41.6347C18.989 42.4173 20.4085 42.5217 21.6176 41.8434L23.8256 40.6434L26.0336 41.8434C26.5593 42.1564 27.1902 42.2608 27.7685 42.2608C28.5045 42.2608 29.2405 42.0521 29.8713 41.5825C31.0279 40.7477 31.6588 39.339 31.3959 37.8782L30.9753 35.3216L32.7628 33.4956C33.7616 32.5043 34.1296 30.9912 33.6565 29.6347C33.1833 28.3825 32.0268 27.3912 30.6599 27.1825ZM31.2382 32.0869L29.0828 34.2782C28.8199 34.539 28.7673 34.8521 28.8199 35.1651L29.3456 38.2434C29.4508 38.9217 29.1879 39.5477 28.6622 39.913C28.4519 40.0695 27.821 40.4347 27.085 40.0173L24.3513 38.5564C24.0359 38.3999 23.6679 38.3999 23.3525 38.5564L20.6713 40.0173C19.9353 40.4347 19.3045 40.0695 19.0942 39.913C18.5685 39.5477 18.3056 38.9217 18.4108 38.2434L18.9365 35.1651C18.989 34.8521 18.8839 34.4869 18.6736 34.2782L16.5182 32.0869C16.045 31.6173 15.8873 30.9912 16.0976 30.3651C16.3079 29.7912 16.781 29.3738 17.3593 29.2695L20.3559 28.7999C20.7239 28.7477 20.9868 28.539 21.1445 28.226L22.5113 25.4086C22.7742 24.8347 23.2999 24.5216 23.9308 24.5216C24.5616 24.5216 25.0348 24.8347 25.3502 25.4086L26.717 28.226C26.8748 28.539 27.1376 28.7477 27.5056 28.7999L30.5022 29.2695C31.0805 29.3738 31.5536 29.739 31.7639 30.3651C31.8165 30.9912 31.6588 31.6173 31.2382 32.0869Z" fill="#fe4c50"></path></svg>
                                    </div>
                                    <h5 class="fw-bold ms-4 mb-0">Закуп ткани и фурнитуры</h5>
                                </div>
                                <p>Наши специалисты занимаются подбором и закупкой высококачественных тканей и фурнитуры, таких как пуговицы, молнии и другие элементы, которые гарантируют долговечность и привлекательный внешний вид готовой продукции.</p>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <div class="text-primary">
                                        <svg class="bi bi-pencil-square" fill="#fe4c50" height="32" viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                            <path d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" fill-rule="evenodd"></path></svg>
                                    </div>
                                    <h5 class="fw-bold ms-4 mb-0">Брендирование пакетов, этикеток и лейбов</h5>
                                </div>
                                <p>Мы предлагаем услуги по нанесению логотипов и фирменных элементов на упаковку, этикетки и лейблы, что позволяет выделить ваш товар на рынке и создать узнаваемость бренда.</p>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="d-flex align-items-center mb-3 mb-md-4">
                                    <div class="text-primary">
                                        <svg class="bi bi-truck text-white" fill="#fe4c50" height="40" viewbox="0 0 16 16" width="40" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg>
                                    </div>
                                    <h5 class="fw-bold ms-4 mb-0">Отправка по СНГ</h5>
                                </div>
                                <p>Обеспечиваем доставку готовой продукции по всей территории СНГ, включая оформление всех необходимых документов и контроль транспортировки, чтобы ваш товар был доставлен вовремя и в отличном состоянии.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5">
                    <div class="container">
                        <!--- Heading -->
                        <div class="row text-center mb-4">
                            <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center">
                                <h2 class="display-5 fw-bold">Этапы производства</h2>
                                <p class="lead mb-0">В нашем производстве все процессы налажены и автоматизированы, что позволяет нам обеспечивать высокое качество и оперативность выполнения заказов.</p>
                            </div>
                        </div><!--- Steps Wrap -->
                        <div class="row justify-content-center pt-5">
                            <div class="col-lg-12">
                                <div class="row mb-5">
                                    <div class="col-lg-3">
                                        <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5 mb-lg-0">
                                            <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4" style="width: 4rem; height:4rem; margin-top:-3.5rem;">
                                                1
                                            </div>
                                            <h5 class="mt-3 mb-4">Ваша модель</h5>
                                            <img class="rounded img-responsive m-auto" style="width: 60px" src="{{asset('dist/images/icons/dress_icon.png')}}" alt="" data-image="{{asset('dist/images/icons/dress_icon.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5 mb-lg-0">
                                            <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4" style="width: 4rem; height:4rem; margin-top: -3.5rem;">
                                                2
                                            </div>
                                            <h5 class="mt-3 mb-4">Разработка лекала</h5>
                                            <img class="rounded img-responsive m-auto" style="width: 60px" src="{{asset('dist/images/icons/measure_icon.png')}}" alt="" data-image="{{asset('dist/images/icons/measure_icon.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5 mb-lg-0">
                                            <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4" style="width: 4rem; height:4rem; margin-top: -3.5rem;">
                                                3
                                            </div>
                                            <h5 class="mt-3 mb-4">Пошив образца</h5>
                                            <img class="rounded img-responsive m-auto" style="width: 60px" src="{{asset('dist/images/icons/fashion_icon.png')}}" alt="" data-image="{{asset('dist/images/icons/fashion_icon.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5 mb-lg-0">
                                            <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4" style="width: 4rem; height:4rem; margin-top: -3.5rem;">
                                                4
                                            </div>
                                            <h5 class="mt-3 mb-4">Отправка образца</h5>
                                            <img class="rounded img-responsive m-auto" style="width: 60px" src="{{asset('dist/images/icons/delivery_truck_icon.png')}}" alt="" data-image="{{asset('dist/images/icons/delivery_truck_icon.png')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-lg-3">
                                        <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5 mb-lg-0">
                                            <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4" style="width: 4rem; height:4rem; margin-top: -3.5rem;">
                                                5
                                            </div>
                                            <h5 class="mt-3 mb-4">Закупка ткани</h5>
                                            <img class="rounded img-responsive m-auto" style="width: 60px" src="{{asset('dist/images/icons/fabric_icon.png')}}" alt="" data-image="{{asset('dist/images/icons/fabric_icon.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5 mb-lg-0">
                                            <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4" style="width: 4rem; height:4rem; margin-top: -3.5rem;">
                                                6
                                            </div>
                                            <h5 class="mt-3 mb-4">Пошив партии</h5>
                                            <img class="rounded img-responsive m-auto" style="width: 60px" src="{{asset('dist/images/icons/sewing_icon.png')}}" alt="" data-image="{{asset('dist/images/icons/sewing_icon.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5 mb-lg-0">
                                            <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4" style="width: 4rem; height:4rem; margin-top: -3.5rem;">
                                                7
                                            </div>
                                            <h5 class="mt-3 mb-4">Контроль качества</h5>
                                            <img class="rounded img-responsive m-auto" style="width: 60px" src="{{asset('dist/images/icons/medal_icon.png')}}" alt="" data-image="{{asset('dist/images/icons/medal_icon.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5 mb-lg-0">
                                            <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4" style="width: 4rem; height:4rem; margin-top: -3.5rem;">
                                                8
                                            </div>
                                            <h5 class="mt-3 mb-4">Отправка партии</h5>
                                            <img class="rounded img-responsive m-auto" style="width: 60px" src="{{asset('dist/images/icons/paper_plane_icon.png')}}" alt="" data-image="{{asset('dist/images/icons/paper_plane_icon.png')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5">
                    <div class="container">
                        <div class="row justify-content-center text-center mb-3 mb-md-5">
                            <div class="col-lg-8 col-xxl-7">
                                <h2 class="display-5 fw-bold mb-3"> Наши цехи</h2>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6 col-xl-4"><img class="img-fluid rounded" src="{{asset('dist/images/factory/photo_2.png')}}" alt="" data-image="{{asset('dist/images/factory/photo_2.png')}}"></div>
                            <div class="col-md-6 col-xl-4">
                                <div class="bg-light rounded h-100 d-flex align-items-center">
                                    <div class="text-center p-5 p-md-3">
                                        <h4> Mania </h4>
                                        <p class="mt-3 mb-0">Наш цех — это современное, высокоорганизованное пространство, оснащенное передовым оборудованием и технологичными машинами, где команда профессионалов контролирует каждый этап производства для создания одежды высочайшего качества.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4"><img class="img-fluid rounded" src="{{asset('dist/images/factory/photo_3.png')}}" alt="" data-image="{{asset('dist/images/factory/photo_3.png')}}"></div>
                            <div class="col-md-6 col-xl-4"><img class="img-fluid rounded" src="{{asset('dist/images/factory/photo_4.png')}}" alt="" data-image="{{asset('dist/images/factory/photo_4.png')}}"></div>
                            <div class="col-md-6 col-xl-4"><img class="img-fluid rounded" src="{{asset('dist/images/factory/photo_5.png')}}" alt="" data-image="{{asset('dist/images/factory/photo_5.png')}}"></div>
                            <div class="col-md-6 col-xl-4"><img class="img-fluid rounded" src="{{asset('dist/images/factory/photo_6.png')}}" alt="" data-image="{{asset('dist/images/factory/photo_6.png')}}"></div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

@endsection

