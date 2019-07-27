<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-child-width-1-2 uk-child-width-1-5@m uk-flex-center uk-grid-medium" uk-grid>
            <?php
            $data = array(
                array(
                    'img1' => 'imgs/dm_sp/Ray-Ban-PNG-Image-Free-Download.svg',
                    'img2' => 'imgs/dm_sp/93481f8141215.560b7ef9337d1 copy 2.svg',
                ),
                array(
                    'img1' => 'imgs/dm_sp/montblanc-052-tortoise-new-486-and-black-glasses-eyeglasses-frames-0-0-960-960.svg',
                    'img2' => 'imgs/dm_sp/1200px-Montblanc_logo.svg.svg',
                ),
                array(
                    'img1' => 'imgs/dm_sp/13021_7387_Silhouette-M2062_Old-School-Eyeglasses_Men_Oversized_HipHop_Glasses.svg',
                    'img2' => 'imgs/dm_sp/silhouette-frames-logo-SQ-1900px.svg',
                ),
                array(
                    'img1' => 'imgs/dm_sp/2017012401729421fdmvtsj.svg',
                    'img2' => 'imgs/dm_sp/d7563fb3e84bdff585e163ac9bdfa765.svg',
                ),
                array(
                    'img1' => 'imgs/dm_sp/4d595058285d41c36d52d717a400914e.svg',
                    'img2' => 'imgs/dm_sp/parim_logo_B.svg',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-card card-dm-sp">
                    <img class="uk-position-top-center img1" src="<?= $v['img1'] ?>" alt="">
                    <div class="uk-card-body uk-position-relative">
                        <img class="uk-position-center img2" src="<?= $v['img2'] ?>" alt="">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="block-sp uk-section-small">
    <div class="uk-container">
        <div class="uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-medium uk-grid-match" uk-grid uk-scrollspy="target: .card-sp-1; repeat: true; cls: animate; delay: 200">
            <?php
            $data = array(
                array(
                    'src' => 'imgs/sp/RB2132 901-58.png',
                    'sale' => '-40%',
                ),
                array(
                    'src' => 'imgs/sp/RB2140-901-58.png',
                ),
                array(
                    'src' => 'imgs/sp/RB2140-954.png',
                ),
                array(
                    'src' => 'imgs/sp/Rb2184f-901-31.png',
                ),
                array(
                    'src' => 'imgs/sp/rb3025 003-40.png',
                    'sale' => '-40%',
                ),
                array(
                    'src' => 'imgs/sp/rb3543-112-a1.png',
                ),
                array(
                    'src' => 'imgs/sp/RB4171-622-8G.png',
                ),
                array(
                    'src' => 'imgs/sp/RB4187-601-30.png',
                ),
            );
            foreach ($data as $k => $v):?>
            <div>
                <div class="uk-card card-sp-1 uk-box-shadow-hover-medium uk-card-default uk-card-body">
                    <?php if (isset($v['sale'])): ?>
                        <div class="uk-position-top-left">
                            <div class="uk-position-relative">
                                <div class="arrow-left"></div>
                                <span class="uk-position-center"><?= $v['sale'] ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="box-img">
                        <img src="<?= $v['src'] ?>" alt="">
                    </div>
                    <div class="uk-text-center uk-margin-small info-sp">
                        <div><a href="#">Mắt kính Rayban cao cấp</a></div>
                        <div>Mã: FA115</div>
                    </div>
                    <hr class="uk-margin-small">
                    <div class="uk-grid-small uk-flex-between uk-flex-middle uk-child-width-auto" uk-grid>
                        <div class="price-sp"><del>-1.200,000 đ</del></div>
                        <div class="price-sp"><span>630,000 đ</span></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="uk-margin-medium uk-text-center">
            <button type="button" class="bello-btn-1 uk-button uk-button-default uk-border-pill">Xem thêm</button>
        </div>
    </div>
</div>