function validaForm() {
    // Atividade Numéro 1
    if(document.getElementsByName("num1")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num1")[0].focus();
        return false;
    }
    let num2 = document.getElementsByName("num2")[0].value;
    if(num2 =="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num2")[0].focus();
        return false;
    }
    // Atividade Numéro 2
    if(document.getElementsByName("num3")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num3")[0].focus();
        return false;
    }
    let num4 = document.getElementsByName("num4")[0].value;
    if(num4 =="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num4")[0].focus();
        return false;
    }
    // Atividade Numéro 3
    if(document.getElementsByName("num5")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num5")[0].focus();
        return false;
    }
    // Atividade Numéro 4
    if(document.getElementsByName("num6")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num6")[0].focus();
        return false;
    }
    let num7 = document.getElementsByName("num7")[0].value;
    if(num7 =="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num7")[0].focus();
        return false;
    }
    // Atividade Numéro 5
    if(document.getElementsByName("num8")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num8")[0].focus();
        return false;
    }
    let num9 = document.getElementsByName("num9")[0].value;
    if(num9 =="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num9")[0].focus();
        return false;
    }
}