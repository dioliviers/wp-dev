let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.sub-menu'), //ul li a
buttonClick = document.querySelector('.check-button'), //button
hamburger = document.querySelector('.menu-icon');

buttonClick.addEventListener( 'click', () => {
    dropdown.classList.toggle('show-dropdown'); /* Adiciona a classe show -dropdown após o click */
    if( submenu ){/* se for a classe submenu */
        submenu.classList.toggle('show-dropdown'); /* retira a classe drop -down após o click */
    }
    hamburger.classList.toggle('animate-button'); /* adiciona a classe animate-button em .menu-icon e
     Faz um X após o click no icone do Hamburger */

}) 