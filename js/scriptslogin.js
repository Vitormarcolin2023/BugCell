//parte do cliente
const cpf = document.getElementById("cpf");

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form_cadastro");

  form.addEventListener("submit", function (event) {
    const cpfValue = cpf.value;

    if (!checkCPF(cpfValue)) {
      setErrorFor(cpf, "Por favor, insira um CPF válido.");
      valid = false;
    } else {
      setSuccessFor(cpf);
      valid = true;
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
