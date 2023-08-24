const privacidade = document.getElementById('privacidade');
privacidade.setAttribute('estado', 'privado')
privacidade.addEventListener('click', () => {
    if(privacidade.getAttribute('estado') === 'publico'){
        privacidade.setAttribute('estado', 'privado')
        privacidade.innerHTML = `
            <i class="mt-2 fa-solid fa-lock fa-xl"></i>
            <p class="ms-2 pp" style = "font-size: 18px; color:#000; font-weight: bold;">Privado</p>
        `
    }
    
    else{
        privacidade.setAttribute('estado', 'publico')
        privacidade.innerHTML = `
        <i class="mt-2 fa-solid fa-unlock fa-flip-horizontal fa-xl" style="color: #b25abf;"></i>
        <p class="ms-2 pp">Público</p>
        `
    }
})
