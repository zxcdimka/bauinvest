<?include "header.php";?>
<div class="container">
    <section class="main-slider row">
        <div class="col-12  col-lg-8 mb-3 mb-lg-0">
            <div id="mainCarouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainCarouselIndicators" data-slide-to="0" class="active"></li>
<!--                    <li data-target="#mainCarouselIndicators" data-slide-to="1"></li>
                    <li data-target="#mainCarouselIndicators" data-slide-to="2"></li>
                    <li data-target="#mainCarouselIndicators" data-slide-to="3"></li>
                    <li data-target="#mainCarouselIndicators" data-slide-to="4"></li>
                    <li data-target="#mainCarouselIndicators" data-slide-to="5"></li>-->
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/ROB_7201.png" alt="First slide">
                    </div>
                    <!--<div class="carousel-item">
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
                    </div>-->
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
    </section>

    <section id="bauinvest_this">
        <h2> БауИнвест — крупный поставщик качественного песка</h2>

    </section>


</div>

<?include "footer.php";?>

