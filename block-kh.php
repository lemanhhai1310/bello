<div class="uk-position-relative">
    <div class="uk-child-width-auto uk-grid-collapse uk-flex-nowrap uk-flex-center move_img1" uk-grid>
        <?php
        $data = array(
            'imgs/kh_user/top/01.jpg',
            'imgs/kh_user/top/02.jpg',
            'imgs/kh_user/top/03.jpg',
            'imgs/kh_user/top/03_1.jpg',
            'imgs/kh_user/top/09.jpg',
            'imgs/kh_user/top/10.jpg',
            'imgs/kh_user/top/11.jpg',
            'imgs/kh_user/top/12.jpg',

            'imgs/kh_user/bottom/05.jpg',
            'imgs/kh_user/bottom/06.jpg',
            'imgs/kh_user/bottom/07.jpg',
            'imgs/kh_user/bottom/08.jpg',
            'imgs/kh_user/bottom/13.jpg',
            'imgs/kh_user/bottom/14.jpg',
            'imgs/kh_user/bottom/15.jpg',
            'imgs/kh_user/bottom/16.jpg',
        );
        foreach ($data as $v):?>
        <div>
            <div class="uk-cover-container" style="width: 160px;">
                <img src="<?= $v; ?>" alt="" uk-cover>
                <canvas width="200" height="200"></canvas>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="uk-child-width-auto uk-grid-collapse uk-flex-nowrap uk-flex-center move_img2" uk-grid>
        <?php
        $data = array(
            'imgs/kh_user/bottom/05.jpg',
            'imgs/kh_user/bottom/06.jpg',
            'imgs/kh_user/bottom/07.jpg',
            'imgs/kh_user/bottom/08.jpg',
            'imgs/kh_user/bottom/13.jpg',
            'imgs/kh_user/bottom/14.jpg',
            'imgs/kh_user/bottom/15.jpg',
            'imgs/kh_user/bottom/16.jpg',

            'imgs/kh_user/top/01.jpg',
            'imgs/kh_user/top/02.jpg',
            'imgs/kh_user/top/03.jpg',
            'imgs/kh_user/top/03_1.jpg',
            'imgs/kh_user/top/09.jpg',
            'imgs/kh_user/top/10.jpg',
            'imgs/kh_user/top/11.jpg',
            'imgs/kh_user/top/12.jpg',
        );
        foreach ($data as $v):?>
            <div>
                <div class="uk-cover-container" style="width: 160px;">
                    <img src="<?= $v; ?>" alt="" uk-cover>
                    <canvas width="200" height="200"></canvas>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="uk-card uk-card-default uk-flex uk-flex-middle card-kh uk-card-body uk-display-inline-block uk-position-center uk-text-center" style="width: 320px; height: 320px;">
        <figure class="uk-text-center"><img class="bell-logo" src="imgs/logo-bello-fb.svg" alt=""></figure>
        <h2 class="uk-card-title kh-title uk-text-uppercase">kính <br> hàng hiệu <br> giá sốc!</h2>
    </div>
</div>