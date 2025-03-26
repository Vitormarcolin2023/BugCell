//parte do cliente
const cpf = document.getElementById("cpf");
const data = document.getElementById("date");
const fone = document.getElementById("fone");
const passwordValue = document.getElementById("password");
const password_confirmation = document.getElementById("password_confirmation");

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form_cadastro");

  form.addEventListener("submit", function (event) {
    const cpfValue = cpf.value;
    const dataValue = data.value;
    const foneValue = fone.value;
    const passwordValue = password.value;
    const password_confirmationValue = password_confirmation.value;

    if (!checkCPF(cpfValue)) {
      setErrorFor(cpf, "Por favor, insira um CPF válido.");
      valid = false;
    } else {
      setSuccessFor(cpf);
      valid = true;
    }

    if (!checkData(dataValue)) {
      setErrorFor(data, "Acesso negado, você é menor de idade.");
      valid = false;
    } else {
      setSuccessFor(data);
      valid = true;
    }

    if (!checkFone(foneValue)) {
      setErrorFor(fone, "Número de telefone invalido");
      valid = false;
    } else {
      setSuccessFor(fone);
      valid = true;
    }

    if (!checkSenha(passwordValue)) {
      setErrorFor(
        password,
        "A senha precisa ter no mínimo 8 caracteres, \numa letra minuscola, uma maiscula e um número."
      );
      valid = false;
    } else {
      setSuccessFor(password);
      valid = true;
    }

    if (!checkConfimarSenha(passwordValue, password_confirmationValue)) {
      setErrorFor(password_confirmation, "A senha não é compativel");
      valid = false;
    } else {
      setSuccessFor(password_confirmation);
      valid = true;
    }
    if (valid == false) {
      event.preventDefault(); // Impede o envio do formulário se houver erros.
    }
  });
});

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  // Adiciona a mensagem de erro
  small.innerText = message;

  // Adiciona a classe de erro
  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;

  // Adicionar a classe de sucesso
  formControl.className = "form-control success";
}

//mascara do cpf
cpf.addEventListener("keypress", () => {
  let inputLength = cpf.value.length;

  // MAX LENGHT 14  cpf
  if (inputLength == 3 || inputLength == 7) {
    cpf.value += ".";
  } else if (inputLength == 11) {
    cpf.value += "-";
  }
});

//validação do cpf
function checkCPF(cpf) {
  cpf = cpf.replace(/\.|-/g, ""); //retira a mascara para a validação acontecer

  var Soma;
  var Resto;
  Soma = 0;
  if (cpf == "00000000000") return false;

  for (i = 1; i <= 9; i++)
    Soma = Soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(cpf.substring(9, 10))) return false;

  Soma = 0;
  for (i = 1; i <= 10; i++)
    Soma = Soma + parseInt(cpf.substring(i - 1, i)) * (12 - i);
  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(cpf.substring(10, 11))) return false;
  return true;
}

//validação da data de nascimento, verifica se o cliente é maior de idade
function checkData(data) {
  var dataNascimento = new Date(data);
  var hoje = new Date();

  // Calcula a diferença em milissegundos entre as datas
  var diferenca = hoje - dataNascimento;

  // Converte a diferença para anos
  var idade = Math.floor(diferenca / (1000 * 60 * 60 * 24 * 365.25));

  // Verifica se a idade é maior que 18
  if (idade >= 18) {
    return true;
  } else {
    return false;
  }
}

//verifa se no campo telefone a somente numero
function checkFone(fone) {
  var numeros = fone.replace(/\D/g, ""); // Remove todos os caracteres que não sejam dígitos

  if (numeros.length === 11 && /^\d+$/.test(numeros)) {
    return true;
  } else {
    return false;
  }
}

//mascara telefone
function adicionarMascaraTelefone(fone) {
  var telefone = fone.value.replace(/\D/g, ""); // Remove todos os caracteres que não sejam dígitos
  var padrao = /^(\d{2})(\d{4,5})(\d{4})$/;

  if (padrao.test(telefone)) {
    fone.value = telefone.replace(padrao, "($1) $2-$3");
  } else {
    fone.value = telefone;
  }
}

//verificar password
function checkSenha(password) {
  // Verifica o comprimento mínimo da password
  if (password.length < 8) {
    return false;
  }

  // Verifica se a password contém pelo menos uma letra maiúscula, uma letra minúscula e um número
  var temMaiuscula = /[A-Z]/.test(password);
  var temMinuscula = /[a-z]/.test(password);
  var temNumero = /\d/.test(password);

  return temMaiuscula && temMinuscula && temNumero;
}

//confirmar senha
function checkConfimarSenha(passwordValue, password_confirmationValue) {
  if (password_confirmationValue == passwordValue) {
    console.log("As senhas coincidem.");
    return true;
  } else {
    console.log("As senhas não coincidem.");
    return false;
  }
}
