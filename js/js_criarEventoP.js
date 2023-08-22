const privacidade = document.getElementById('privacidade');
const estado = privacidade.getAttribute('estado')
privacidade.addEventListener('click', () => {
    console.log(estado)
    if(estado === 'privado'){
        privacidade.setAttribute('estado', 'publico')
        privacidade.innerHTML = `
        <i class="mt-2 fa-solid fa-lock-open fa-flip-horizontal fa-xl" style="color: #b25abf;"></i>
            <p class="ms-2 pp">Público</p>
        `
    }

    else{
        console.log('oiiiiiiiiii')
        privacidade.setAttribute('estado', 'privado')
        privacidade.innerHTML = `
            <i class="mt-2 fa-solid fa-lock fa-xl"></i
        <p class="ms-2 pp" style = "font-size: 18px; color:#000; font-weight: bold;">Privado</p>
        `
    }
})
