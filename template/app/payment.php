<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <?php
    require_once BASE_PATH . '/template/app/layouts/head-tag.php';
    ?>
    <title>فروشگاه آمازون</title>
</head>

<body>



    <?php
    require_once BASE_PATH . '/template/app/layouts/partials/header.php';
    ?>



    <!-- start main one col -->
    <main id="main-body-one-col" class="main-body">

        <?php
        if (flash('error')) { ?>

            <div class="alert alert-danger">
                <h6><?= flash('error') ?></h6>
            </div>

        <?php }
        ?>

        <?php
        if (flash('success')) { ?>

            <div class="alert alert-success">
                <h6><?= flash('success') ?></h6>
            </div>

        <?php }
        ?>

        <!-- start cart -->
        <section class="mb-4">
            <section class="container-xxl">
                <section class="row">
                    <section class="col">
                        <!-- start vontent header -->
                        <section class="content-header">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span>انتخاب نوع پرداخت </span>
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>

                        <section class="row mt-4">
                            <section class="col-md-9">
                                <section class="content-wrapper bg-white p-3 rounded-2 mb-4">

                                    <!-- start vontent header -->
                                    <section class="content-header mb-3">
                                        <section class="d-flex justify-content-between align-items-center">
                                            <h2 class="content-header-title content-header-title-small">
                                                کد تخفیف
                                            </h2>
                                            <section class="content-header-link">
                                                <!--<a href="#">مشاهده همه</a>-->
                                            </section>
                                        </section>
                                    </section>

                                    <section class="payment-alert alert alert-primary d-flex align-items-center p-2" role="alert">
                                        <i class="fa fa-info-circle flex-shrink-0 me-2"></i>
                                        <secrion>
                                            کد تخفیف خود را در این بخش وارد کنید.
                                        </secrion>
                                    </section>

                                    <section class="row">
                                        <section class="col-md-5">
                                            <form action="<?= url('/apply-discount') ?>" method="post">
                                                <section class="input-group input-group-sm">
                                                    <input type="text" class="form-control" name="discount_code" placeholder="کد تخفیف را وارد کنید">
                                                    <button class="btn btn-primary" type="submit">اعمال کد</button>
                                                </section>
                                            </form>

                                        </section>

                                    </section>
                                </section>

                                <form action="<?= url('/submit-order') ?>" method="post">


                                    <section class="content-wrapper bg-white p-3 rounded-2 mb-4">


                                        <section class="mt-3">
                                            <h2 class="content-header-title content-header-title-small">
                                                انتخاب آدرس
                                            </h2>

                                            <?php foreach ($addresses as $addresse) { ?>
                                                <div class="form-check d-flex align-items-center mb-2">
                                                    <input type="radio" class="form-check-input" required name="address_id" value="<?= $addresse['id'] ?>">
                                                    <label for="" class="form-check-label ms-2">
                                                        <?= $addresse['address'] ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }

                                            ?>

                                        </section>

                                        <hr>
                                        <section class="mt-3">
                                            <h2 class="content-header-title content-header-title-small">
                                                انتخاب روش ارسال
                                            </h2>

                                            <?php foreach ($shippingMethods as $shippingMethod) { ?>
                                                <div class="form-check d-flex align-items-center mb-2">
                                                    <input type="radio" class="form-check-input" required name="delivery_id" value="<?= $shippingMethod['id'] ?>">
                                                    <label for="" class="form-check-label ms-2">
                                                        <?= $shippingMethod['name'] ?> - <?= $shippingMethod['amount'] . ' تومان' ?>
                                                    </label>
                                                </div>
                                            <?php
                                            }

                                            ?>

                                        </section>

                                        <!-- start vontent header -->
                                        <section class="content-header mb-3">
                                            <section class="d-flex justify-content-between align-items-center">
                                                <h2 class="content-header-title content-header-title-small">
                                                    انتخاب نوع پرداخت
                                                </h2>
                                                <section class="content-header-link">
                                                    <!--<a href="#">مشاهده همه</a>-->
                                                </section>
                                            </section>
                                        </section>
                                        <section class="payment-select">

                                            <section class="payment-alert alert alert-primary d-flex align-items-center p-2" role="alert">
                                                <i class="fa fa-info-circle flex-shrink-0 me-2"></i>
                                                <secrion>
                                                    برای پیشگیری از انتقال ویروس کرونا پیشنهاد می کنیم روش پرداخت اینترنتی رو پرداخت کنید.
                                                </secrion>
                                            </section>

                                            <input type="radio" name="payment_type" value="1" id="d1" />
                                            <label for="d1" class="col-12 col-md-4 payment-wrapper mb-2 pt-2">
                                                <section class="mb-2">
                                                    <i class="fa fa-credit-card mx-1"></i>
                                                    پرداخت آنلاین
                                                </section>
                                                <section class="mb-2">
                                                    <i class="fa fa-calendar-alt mx-1"></i>
                                                    درگاه پرداخت زرین پال
                                                </section>
                                            </label>

                                            <section class="mb-2"></section>


                                            <section class="mb-2"></section>

                                            <input type="radio" name="payment_type" value="3" id="d3" />
                                            <label for="d3" class="col-12 col-md-4 payment-wrapper mb-2 pt-2">
                                                <section class="mb-2">
                                                    <i class="fa fa-money-check mx-1"></i>
                                                    پرداخت در محل
                                                </section>
                                                <section class="mb-2">
                                                    <i class="fa fa-calendar-alt mx-1"></i>
                                                    پرداخت به پیک هنگام دریافت کالا
                                                </section>
                                            </label>


                                        </section>
                                    </section>




                            </section>
                            <section class="col-md-3">
                                <section class="content-wrapper bg-white p-3 rounded-2 cart-total-price">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted">قیمت کالاها (<?= $totalItems ?>)</p>
                                        <p class="text-muted"><?= number_format($totalPrice) ?> تومان</p>
                                    </section>

                                    <?php
                                    if (isset($_SESSION['discount']) && $_SESSION['discount'] > 0) {
                                    ?>

                                        <section class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted">تخفیف کالاها</p>
                                            <p class="text-danger fw-bolder"><?= number_format($_SESSION['discount']) ?> تومان</p>
                                        </section>

                                    <?php } ?>

                                    <section class="border-bottom mb-3"></section>


                                    <p class="my-3">
                                        <i class="fa fa-info-circle me-1"></i> کاربر گرامی کالاها بر اساس نوع ارسالی که انتخاب می کنید در مدت زمان ذکر شده ارسال می شود.
                                    </p>

                                    <section class="border-bottom mb-3"></section>

                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted">مبلغ قابل پرداخت</p>
                                        <p class="fw-bold"><?= number_format($totalPrice - (isset($_SESSION['discount']) ? $_SESSION['discount'] : 0)) ?> تومان</p>

                                    </section>

                                    <section class="">
                                        <section id="payment-button" class="text-warning border border-warning text-center py-2 pointer rounded-2 d-block">نوع پرداخت را انتخاب کن</section>
                                        <button type="submit" id="final-level" class="btn btn-danger d-none">ثبت سفارش و گرفتن کد رهگیری</button>
                                    </section>

                                    </form>


                                </section>
                            </section>
                        </section>
                    </section>
                </section>

            </section>
        </section>
        <!-- end cart -->



    </main>
    <!-- end main one col -->





    <?php
    require_once BASE_PATH . '/template/app/layouts/partials/footer.php';
    ?>

    <?php
    require_once BASE_PATH . '/template/app/layouts/scripts.php';
    ?>





</body>

</html>