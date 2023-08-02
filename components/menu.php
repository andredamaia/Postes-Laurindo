<div class="menu">
    <div class="menu-header">
        <div class="menu-logo">
            <a href="<?php echo $pageurl; ?>/">
                <img src="<?php echo $pageurl; ?>/public/images/new-logo.png" alt="" />
            </a>
        </div>

        <div>
            <svg 
                class="close-menu" 
                width="24"
                height="24"
                viewBox="0 0 24 24" 
                fill="none" 
                stroke="currentColor" 
                stroke-width="2" 
                stroke-linecap="round" 
                stroke-linejoin="round"
            >
                <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>
    </div>

    
        <!-- <div class="menu-links">
            <ul>
                <li><a href="<?php echo $pageurl; ?>/">Início</a></li>

                <li><a href="<?php echo $pageurl; ?>/#nossa-historia" class="button-scroll" data-scroll="nossa-historia">Nossa História</a></li>

                <li class="has-submenu">

                    <span>
                        Produtos
                    </span>

                    <ul class="submenu">
                        <a href="<?php echo $pageurl; ?>/kit-postes">

                            Kit Postes
                        </a>

                        <a href="<?php echo $pageurl; ?>/paineis">

                            Painéis
                        </a>

                        <a href="<?php echo $pageurl; ?>/caixas-de-passagens">

                            caixas de passagens
                        </a>

                        <a href="<?php echo $pageurl; ?>/caixas-de-medicao">

                            Caixas de medição
                        </a>

                        <a href="<?php echo $pageurl; ?>/muretas-de-agua">

                            Muretas de água
                        </a>
                    </ul>
                </li>
                <li><a href="<?php echo $pageurl; ?>/#onde-atendemos" class="button-scroll" data-scroll="onde-atendemos">Onde Atendemos</a></li>
                <li><a href="<?php echo $pageurl; ?>/#contato" class="button-scroll" data-scroll="contato">Contato</a></li>
            </ul>
        </div> -->

    <div class="menu-links">
        <ul>
            <li><a href="<?php echo $pageurl; ?>/">Início</a></li>
            <li><a href="<?php echo $pageurl; ?>/#nossa-historia" class="button-scroll" data-scroll="nossa-historia">Nossa História</a></li>
            
            <li>
                <a class="botao-submenu">
                    <span >Produtos</span>

                    <svg height="48" viewBox="0 -960 960 960" width="48"><path d="M530-481 332-679l43-43 241 241-241 241-43-43 198-198Z"/></svg>
                </a>
            </li>

            <li><a href="<?php echo $pageurl; ?>/#onde-atendemos" class="button-scroll" data-scroll="onde-atendemos">Onde Atendemos</a></li>
            <li><a href="<?php echo $pageurl; ?>/#contato" class="button-scroll" data-scroll="contato">Contato</a></li>
        </ul>
    </div>

    <div class="submenu-links">
        <span class="botao-voltar-menu">
            <svg height="48" viewBox="0 -960 960 960" width="48"><path d="M561-240 320-481l241-241 43 43-198 198 198 198-43 43Z"/></svg>
        </span>

        <ul>
            <li><a href="<?php echo $pageurl; ?>/kit-postes">Kit Postes</a></li>
            <li><a href="<?php echo $pageurl; ?>/paineis">Paineis</a></li>
            <li><a href="<?php echo $pageurl; ?>/caixas-de-passagem">Caixas de Passagem</a></li>
            <li><a href="<?php echo $pageurl; ?>/caixas-de-medicao">Caixas de Medição</a></li>
            <li><a href="<?php echo $pageurl; ?>/muretas-de-agua">Muretas de Água</a></li>
        </ul>
    </div>

    <div class="menu-footer">
        <p></p>
    </div>
</div>

<script>
    const subMenuButton = document.querySelector(".botao-submenu");
    const subMenu = document.querySelector(".submenu-links");
    const menuPrincipal = document.querySelector(".menu-links");
    const voltarMenu = document.querySelector(".botao-voltar-menu");

    subMenuButton.addEventListener('click', () => {
        menuPrincipal.style.display = 'none';
        subMenu.style.display = 'block';
    });

    voltarMenu.addEventListener('click', () => {
        subMenu.style.display = 'none';
        menuPrincipal.style.display = 'block';
    })








// // Função para ocultar todos os submenus
// function hideAllSubmenus() {
//   const submenus = document.querySelectorAll('.submenu');
//   submenus.forEach(submenu => {
//     submenu.classList.remove('open');
//   });
// }

// // Função para mostrar/ocultar o submenu quando um botão do menu é clicado no modo mobile
// function toggleSubmenu(submenu) {
//   const isActive = submenu.classList.contains('open');

//   hideAllSubmenus(); // Oculta todos os submenus antes de exibir o selecionado

//   if (!isActive) {
//     submenu.classList.add('open');
//   }
// }

// // Event listener para o botão do menu mobile
// const mobileMenuButton = document.querySelector('.menu-button');
// mobileMenuButton.addEventListener('click', () => {
//   hideAllSubmenus(); // Oculta todos os submenus ao abrir o menu mobile
// });

// // Event listener para o botão "Produtos" do menu
// const produtosButton = document.querySelector('.has-submenu > span');
// const produtosSubmenu = document.querySelector('.has-submenu > ul');
// produtosButton.addEventListener('click', (e) => {
//   e.preventDefault();
//   toggleSubmenu(produtosSubmenu);
// });











</script>