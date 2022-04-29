export function do_calc(somme_temp, value_temp, opera) {
    alert("do calc");
    switch(opera){
        case '+':
            return somme_temp += value_temp;
        case '-':
            return somme_temp -= value_temp;
        case '*':
            return somme_temp *= value_temp;
        case '/':
            return somme_temp /= value_temp;
        default: return;
    }
}