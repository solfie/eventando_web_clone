const privacidade = document.getElementById('privacidade');
const estado = privacidade.getAttribute('estado')
privacidade.addEventListener('click', () => {
    console.log(estado)
    if(estado === 'privado'){
        privacidade.setAttribute('estado', 'publico')
        privacidade.innerHTML = `
            <i class="fa-solid fa-lock-open fa-flip-horizontal"></i>
            <p class="ms-2">Público</p>
        `
    }
    if(estado === 'publico'){
        console.log('oiiiiiiiiii')
        privacidade.setAttribute('estado', 'privado')
        privacidade.innerHTML = `
            <i class="fa-solid fa-lock"></i
            <p class="ms-2">Privado</p>
        `
    }
})
