localStorage.setItem('sidebarOpen', true);


const setOpen = (obj) => {
    let open = localStorage.getItem('sidebarOpen');
    let idIndicador = $(obj).attr('id');


    if(open == 'false') {
        $('#title_sidebar').show();
        $('#inicio_sidebar').show();
        $('#colores_admin').show();
        $('#equipos_admin').show();
        $('#banner_sidebar').show();
        $('#sucursales_sidebar').show();

        document.querySelector('#dropdown-equipos').classList.add('hidden');
        document.querySelector('#dropdown-landing').classList.add('hidden');
        document.querySelector('#' + idIndicador).classList.remove('rotate-180');
        document.querySelector('#sidebarAdmin').classList.remove('w-20');
        document.querySelector('#sidebarAdmin').classList.add('w-72');
        localStorage.setItem('sidebarOpen', true);
    } else {
        $('#title_sidebar').hide();
        $('#inicio_sidebar').hide();
        $('#colores_admin').hide();
        $('#equipos_admin').hide();
        $('#banner_sidebar').hide();
        $('#sucursales_sidebar').hide();

        document.querySelector('#dropdown-equipos').classList.add('hidden');
        document.querySelector('#dropdown-landing').classList.add('hidden');
        document.querySelector('#' + idIndicador).classList.add('rotate-180');
        document.querySelector('#sidebarAdmin').classList.remove('w-72');
        document.querySelector('#sidebarAdmin').classList.add('w-20');
        localStorage.setItem('sidebarOpen', false);
    }
}


const validarDropdown = (obj) => {

    let buttonPresionado = $(obj).attr('id');
    let dropdownLanding = document.querySelector('#dropdown_landing')
    let dropdownPhone = document.querySelector('#dropdown_phone')

    
    switch (buttonPresionado) {
        case 'colores_admin':
            if(dropdownLanding.classList.contains('rotate-90')) {
                dropdownLanding.classList.remove('rotate-90')
                dropdownLanding.classList.add('rotate-0')
            } else {
                dropdownLanding.classList.remove('rotate-0')
                dropdownLanding.classList.add('rotate-90')
            }
            break;
        case 'equipos_admin':
            if(dropdownPhone.classList.contains('rotate-90')) {
                dropdownPhone.classList.remove('rotate-90')
                dropdownPhone.classList.add('rotate-0')
            } else {
                dropdownPhone.classList.remove('rotate-0')
                dropdownPhone.classList.add('rotate-90')
            }
            break;
    }
}

