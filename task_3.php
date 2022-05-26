<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>

                    <!--
                        Сформировать массив элементов. Вывести при помощи цикла foreach.
Дополнительные пояснения. При формирования массива берите все что формирует элемент: атрибуты тегов, значения стилей и др.
                    -->

                    <?php
                        $tasks = [
                                [
                                    'name' => 'My Tasks',
                                    'info' => '130 / 500',
                                    'line' => 'width: 15%',
                                    'color' => 'bg-fusion-400'
                                ],
                            [
                                'name' => 'Transfered',
                                'info' => '440 TB',
                                'line' => 'width: 34%',
                                'color' => 'bg-success-500'
                            ],
                            [
                                'name' => 'Bugs Squashed',
                                'info' => '77%',
                                'line' => 'width: 77%',
                                'color' => 'bg-info-400'
                            ],
                            [
                                'name' => 'User Testing',
                                'info' => '7 days',
                                'line' => 'width: 84%',
                                'color' => 'bg-primary-300'
                            ],
                        ];
                    ?>

                    <div class="panel-container show">
                        <div class="panel-content">

                            <?php foreach ($tasks as $task): ?>
                                <div class="d-flex mt-2">
                                    <?= $task['name']; ?>
                                    <span class="d-inline-block ml-auto"><?= $task['info']; ?></span>
                                </div>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar <?= $task['color']; ?>" role="progressbar" style="<?= $task['line']; ?>" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            <?php endforeach; ?>

<!---->
<!--                            <div class="d-flex mt-2">-->
<!--                                My Tasks-->
<!--                                <span class="d-inline-block ml-auto">130 / 500</span>-->
<!--                            </div>-->
<!--                            <div class="progress progress-sm mb-3">-->
<!--                                <div class="progress-bar bg-fusion-400" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--                            </div>-->
<!--                            <div class="d-flex">-->
<!--                                Transfered-->
<!--                                <span class="d-inline-block ml-auto">440 TB</span>-->
<!--                            </div>-->
<!--                            <div class="progress progress-sm mb-3">-->
<!--                                <div class="progress-bar bg-success-500" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--                            </div>-->
<!--                            <div class="d-flex">-->
<!--                                Bugs Squashed-->
<!--                                <span class="d-inline-block ml-auto">77%</span>-->
<!--                            </div>-->
<!--                            <div class="progress progress-sm mb-3">-->
<!--                                <div class="progress-bar bg-info-400" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--                            </div>-->
<!--                            <div class="d-flex">-->
<!--                                User Testing-->
<!--                                <span class="d-inline-block ml-auto">7 days</span>-->
<!--                            </div>-->
<!--                            <div class="progress progress-sm mb-g">-->
<!--                                <div class="progress-bar bg-primary-300" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
