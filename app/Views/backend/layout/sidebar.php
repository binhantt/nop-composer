<?php
$val = array(
    'link' => 'your_link_value',
    'icon' => 'your_icon_value',
    'name' => 'your_name_value',
    'child' => array(
        array(
            'link' => 'child_link_1',
            'icon' => 'child_icon_1',
            'name' => 'child_name_1'
        ),
        array(
            'link' => 'child_link_2',
            'icon' => 'child_icon_2',
            'name' => 'child_name_2'
        )
    )
);
?>

?>

<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">MENU QUẢN LÝ</li>
                <li>
                    <a href="<?= $val['link'] ? CPANEL . $val['link'] : 'javascript:void(0)' ?>">
                        <i class="<?= $val['icon'] ? $val['icon'] : '' ?>"></i>
                        <span><?= $val['name'] ?></span>
                        <?= $val['child'] ? '<span class="menu-arrow"></span>' : '' ?>
                    </a>
                    <?php if ($val['child'] && !empty($val['child'])) { ?>
                        <ul class="nav-second-level" aria-expanded="false">
                            <?php foreach ($val['child'] as $key_child => $val_child) { ?>
                                <li>
                                    <a href="<?= CPANEL . $val_child['link'] ?>">
                                        <i class="<?= $val_child['icon'] ? $val_child['icon'] : '' ?>"></i>&nbsp;<?= $val_child['name'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
    </div>
    <!-- Sidebar -left -->
</div>