<?include "header.php";?>

<section class="main-slider">
    <div class="container">
        <div class="row">
            <div class="col-12  col-lg-8 mb-3 mb-lg-0">
                <div id="mainCarouselIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mainCarouselIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#mainCarouselIndicators" data-slide-to="1"></li>
                        <li data-target="#mainCarouselIndicators" data-slide-to="2"></li>
                        <li data-target="#mainCarouselIndicators" data-slide-to="3"></li>
                        <li data-target="#mainCarouselIndicators" data-slide-to="4"></li>
                        <li data-target="#mainCarouselIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/ROB_7201.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/ROB_7201.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/ROB_7201.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/ROB_7201.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/ROB_7201.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/ROB_7201.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#mainCarouselIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mainCarouselIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-top">
                    <div class="h-4">Обратная связь</div>
                    <form action=""  >
                        <label for="top-form-name">Введите имя</label>
                        <input required class="input" type="text" name="name" id="top-form-name">
                        <label for="top-form-tel">Телефон для связи</label>
                        <input required class="input" type="text" name="tel" id="top-form-tel">
                        <label for="top-form-text">Сообщение</label>
                        <textarea required class="textarea" name="text"  id="top-form-text"></textarea>
                        <input type="submit" class="red-button-mm submit" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="bauinvest_this">
    <div class="container">
        <h2 class="h-2"> БауИнвест — крупный поставщик качественного песка</h2>
        <div class="row mt-4">
            <div class="col-12 col-md-8 bau-list">
                <div class="bau-item">
                    <p>Компания ведет работы по добыче песка открытым способом в карьере «Аксиньино-1» в Щелковском районе Московской области.</p>
                </div>
                <div class="bau-item">
                    <p>Для клиентов доступны 3 вида песка: природный   и мытый строительный, различных качественных характеристик, а также формовочный.</p>
                </div>
                <div class="bau-item">
                    <p>Песок полностью соответствует государственным стандартам качества, подходит для всех видов строительных работ и формовочного производства.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 objem">
                <img src="img/10mln.png" alt="">
                <span class="h-4 " >млн м<span style="font-size: 20px;    vertical-align: super;">3</span></span>
                <p>Объем подтвержденных <br> запасов в карьере <br> «Аксиньино-1»</p>
            </div>
        </div>
    </div>
</section>

<section id="bau_map">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <h3 class="h-3 head-doust"> Быстрая доставка <br>
                    по Москве и Московской <br>
                    области </h3>
                <div class="hours-24">
                    <div class="h-top">
                        24 часа
                    </div>
                    <div class="h-bottom">
                        Круглосуточная отгрузка
                    </div>
                </div>
                <a href="javascript:vid(0)" onclick="showPopup('#showPopap_')"  class="red-button-mm">Обратный звонок</a>
            </div>
            <div class="col-12 col-md-7 ">
                <img src="img/map.png" id="bau_map_map" alt="">
            </div>
        </div>


    </div>
</section>

<section id="sobstvennaja_texnika">
    <div class="container">
        <h2 class="h-2">Собственный автотранспорт <br> и карьерная техника </h2>
        <div class="row mt-4">
            <div class="col-12 col-sm-6 col-lg-3 xc mb-3">
                 <div class="tex-item">
                     <div class="img_tex" style="background: url(img/fig-mash.png) no-repeat;"></div>
                    <div class="cont-tex">
                        <span>12</span>
                        <p>Экскаваторов, погрузчиков  <br> и бульдозеров</p>
                    </div>

                 </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 xc mb-3">
                 <div class="tex-item">
                     <div class="img_tex" style="background: url(img/fig-gruz.png) no-repeat;"></div>
                    <div class="cont-tex">
                        <span>130</span>
                        <p>Самосвалов, объемом <br>
                            кузова от 16 до 20 м3 </p>
                    </div>

                 </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 xc mb-3">
                 <div class="tex-item">
                     <div class="img_tex" style="top: 17px; right: 4px; background: url(img/fig-1.png) no-repeat;"></div>
                    <div class="cont-tex">
                        <span>1 год</span>
                        <p>Средний возраст <br>  всей техники   </p>
                    </div>

                 </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 xc mb-3">
                 <div class="tex-item">
                     <div class="img_tex" style="top: 17px; right: 7px; background: url(img/fig-man.png) no-repeat;"></div>
                    <div class="cont-tex">
                        <span>480</span>
                        <p>Водителей работает<br> в компании </p>
                    </div>

                 </div>
            </div>

        </div>
    </div>
</section>

<section id="nam_doverayt">
    <div class="container">
        <h2 class="h-2"> Нам доверяют </h2>
        <p class="mt-4">  Компания «БауИнвест» сотрудничает с АО ДСК «Автобан» и его дочерними <br>
            обществами: СУ 925, СУ 905 и СУ 911 по поставке песка, перевозкам <br>
            асфальтобетона и строительного грунта.  </p>
        <div class="regular-wrapper">
            <div class="regular ">
                <div class="regular-item xc" >
                    <img src="img/slid.png">
                </div>
<!--            <div class="regular-item xc" >
                    <img src="img/slid.png">
                </div> -->
            </div>
        </div>
    </div>
</section>

<section id="licenzii">
    <div class="container">
        <h2 class="h-2"> Лицензии и сертификаты </h2>

        <div class="regular2-wrapper">
            <div class="regular2 ">
                <div class="regular2-item xc" >
                    <a href="img/sert/2.png" data-fancybox data-caption="Декларация о соответствии ТРТС 014-2011">
                        <img src="img/sert/2.png" />
                    </a>
                    <div class="sert-text">Декларация о соответствии ТРТС 014-2011</div>
                </div>
                <div class="regular2-item xc" >
                    <a href="img/sert/3.png" data-fancybox data-caption="Лицензия на пользование недрами МСК 06702">
                        <img src="img/sert/3.png" />
                    </a>
                    <div class="sert-text">Лицензия на пользование недрами МСК 06702</div>
                </div>
                <div class="regular2-item xc" >
                    <a href="img/sert/4.png" data-fancybox data-caption="Протокол испытания песка природного № Г00319">
                        <img src="img/sert/4.png" />
                    </a>
                    <div class="sert-text">Протокол испытания песка природного № Г00319</div>
                </div>
                <div class="regular2-item xc" >
                    <a href="img/sert/5.png" data-fancybox data-caption="Протокол испытания песка природного № Г05019">
                        <img src="img/sert/5.png" />
                    </a>
                    <div class="sert-text">Протокол испытания песка природного № Г05019</div>
                </div>
                <div class="regular2-item xc" >
                    <a href="img/sert/1.png" data-fancybox data-caption="Сертификат соответствия № РОСС RU. HA34. H04240">
                        <img src="img/sert/1.png" />
                    </a>
                    <div class="sert-text">Сертификат соответствия № РОСС RU. HA34. H04240</div>
                </div>

            </div>
        </div>
    </div>
</section>

<?include "footer.php";?>

