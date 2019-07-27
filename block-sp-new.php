<div id="block-sp-new" class="uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body uk-text-center">
            <h4 class="uk-card-title uk-text-uppercase">new model up to <span>40%</span></h4>
            <div uk-slider="sets: false; autoplay: true; autoplay-interval: 5000;">

                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m">
                            <?php
                            $data = array(
                                'imgs/sp-new/RB2132 901-58.png',
                                'imgs/sp-new/RB2140-954.png',
                                'imgs/sp-new/RB2132 901-58 Copy.png',
                                'imgs/sp-new/RB2140-954 Copy.png',
                                'imgs/sp-new/RB2132 901-58 Copy 2.png',

                                'imgs/sp-new/RB2132 901-58.png',
                                'imgs/sp-new/RB2140-954.png',
                                'imgs/sp-new/RB2132 901-58 Copy.png',
                                'imgs/sp-new/RB2140-954 Copy.png',
                                'imgs/sp-new/RB2132 901-58 Copy 2.png',
                            );
                            foreach ($data as $v):?>
                            <li class="uk-text-center">
                                <img src="<?= $v; ?>" alt="">
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>



                    <div class="">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img
                                    src="imgs/sp-new/left-arrow.svg" alt=""></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img
                                    src="imgs/sp-new/left-arrow copy.svg" alt=""></a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>