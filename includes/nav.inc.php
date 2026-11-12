<?php
$navItems = getMainNavItems();
?>
<nav id="mainNav" class="order-first navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img class="img-fluid" src="/images/jdb-logo-neu.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($navItems as $item => $url) : ?>
                    <?php
                    $class_active = '';
                    $current = '';
                    $subnav = false;

                    if ($filePrefix === $url) {
                        $class_active = 'active';
                        $current = 'aria-current="page"';
                    }
                    if ($url != '/') {
                        if (is_array($url)) {
                            $subnav = $url;
                        } else {
                            $url = "?page=$url";
                        }
                    }
                    ?>

                    <li class="nav-item <?php if ($subnav) echo 'dropdown' ?>">
                        <?php if ($subnav): ?>
                            <?php
                            if (in_array($filePrefix, $subnav)) {
                                if (array_key_first($subnav) === $item) {
                                    $class_active = 'active';
                                    $current = 'aria-current="page"';
                                }
                            }
                            ?>
                            <a class="nav-link dropdown-toggle <?= $class_active; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?= $current; ?>>
                                <?= $item; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($subnav as $subitem => $suburl): ?>
                                    <?php $url = "?page=$suburl"; ?>
                                    <li><a href="<?= "$url"; ?>" class="dropdown-item"><?= $subitem; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <a href="<?= "$url"; ?>" class="nav-link <?= $class_active; ?>" <?= $current; ?>>
                                <?= $item; ?>
                            </a>
                        <?php endif; ?>
                    </li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>