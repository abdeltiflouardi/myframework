    <div class="pagination pagination-right">
        <ul>
            <li<?php $pager->isFirstPage() ? print ' class="disabled"' : '' ?>>
                <a href="<?php echo Http::getInstance()->getCurrentUrl(array(Config::getInstance()->getPageName() => 1), array(Config::getInstance()->getPageName())) ?>">
                    &laquo;
                </a>
            </li>

            <?php for ($i = 1, $j = $pager->getCountPages(); $i <= $j; $i++) : ?>
            <li<?php $pager->isCurrPage($i) ? print ' class="disabled"' : '' ?>>
                <a href="<?php echo Http::getInstance()->getCurrentUrl(array(Config::getInstance()->getPageName() => $i), array(Config::getInstance()->getPageName())) ?>">
                    <?php echo $i; ?>
                </a>
            </li>
            <?php endfor; ?>

            <li<?php $pager->isLastPage() ? print ' class="disabled"' : '' ?>>
                <a href="<?php echo Http::getInstance()->getCurrentUrl(array(Config::getInstance()->getPageName() => $pager->getCountPages()), array(Config::getInstance()->getPageName())) ?>">
                    &raquo;
                </a>
            </li>
        </ul>
    </div>