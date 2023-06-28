<header>
    <div class="header-container">
        <div>
            <div class="logo">
                <a href="<?php echo $pageurl; ?>/">
                    <img src="<?php echo $pageurl; ?>/public/images/new-logo.png" alt="" />
                </a>
            </div>
        </div>

        <div class="d-flex align-items-center">
            <ul class="menu-list">
                <li><a href="<?php echo $pageurl; ?>/">Início</a></li>
                <li><a href="<?php echo $pageurl; ?>/#nossa-historia" class="button-scroll" data-scroll="nossa-historia">Nossa História</a></li>
                <li><a href="<?php echo $pageurl; ?>/produtos">Produtos</a></li>
                <li><a href="<?php echo $pageurl; ?>/#onde-atendemos" class="button-scroll" data-scroll="onde-atendemos">Onde Atendemos</a></li>
                <li><a href="<?php echo $pageurl; ?>/#contato" class="button-scroll" data-scroll="contato">Contato</a></li>
            </ul>

            <a href="#" class="open-menu">
                <svg height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
            </a>
        </div>
    </div>
</header>

<?php include('components/menu.php'); ?>