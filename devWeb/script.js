document.getElementById('meuFormulario').addEventListener('submit', function(event) {
    event.preventDefault(); // Previne o envio padrão

    if (validarFormulario()) {

        processarFormulario();
    }
});

function validarFormulario() {
    let valido = true;
    
    document.querySelectorAll('.error').forEach(el => el.remove());
    
    const nome = document.getElementById('nome');
    if (nome.value.trim() === '') {
        mostrarErro(nome, 'Por favor, insira seu nome');
        valido = false;
    }
    
    const email = document.getElementById('email');
    if (!email.value.includes('@') || !email.value.includes('.')) {
        mostrarErro(email, 'Por favor, insira um email válido');
        valido = false;
    }
    
    const senha = document.getElementById('senha');
    if (senha.value.length < 6) {
        mostrarErro(senha, 'A senha deve ter pelo menos 6 caracteres');
        valido = false;
    }
    
    const termos = document.getElementById('termos');
    if (!termos.checked) {
        mostrarErro(termos, 'Você deve aceitar os termos de uso');
        valido = false;
    }
    
    return valido;
}

function mostrarErro(campo, mensagem) {
    const divErro = document.createElement('div');
    divErro.className = 'error';
    divErro.textContent = mensagem;
    campo.parentNode.appendChild(divErro);
    
    // Destaca o campo com erro
    campo.style.borderColor = 'red';
    campo.addEventListener('input', function() {
        campo.style.borderColor = '#ddd';
        divErro.remove();
    });
}

function processarFormulario() {
    const formData = new FormData(document.getElementById('meuFormulario'));
    const dados = {};
    
    // Coleta todos os dados do formulário
    for (let [key, value] of formData.entries()) {
        if (key === 'habilidades') {
            if (!dados[key]) dados[key] = [];
            dados[key].push(value);
        } else {
            dados[key] = value;
        }
    }
    
    // Exibe os dados no console (poderia enviar para um servidor)
    console.log('Dados do formulário:', dados);
    
    // Mostra mensagem de sucesso
    alert('Formulário enviado com sucesso!\n\n' + 
          `Nome: ${dados.nome}\n` +
          `Email: ${dados.email}\n` +
          `País: ${document.getElementById('pais').options[document.getElementById('pais').selectedIndex].text}\n` +
          `Habilidades: ${dados.habilidades ? dados.habilidades.join(', ') : 'Nenhuma'}`);
    
    // Limpa o formulário (opcional)
    document.getElementById('meuFormulario').reset();
}