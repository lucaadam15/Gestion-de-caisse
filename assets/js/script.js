$(document).ready(function(){
    $pave_nums = $(".pave_calc").children();
    $quentite = $("#qnte");
    $somme=0;
    $operator='';
    $("#list-article").DataTable({
        paging: true,
        scrollY:200
    });
    
    setInterval(function(){
        $("#temps").load("../../utilities/time.php");
    }, 1000);
    
    
    $('#ce_button').on('click', function(){
        $quentite.val(0);
    });
    
    $pave_nums.each(function(){
        $(this).on('click', function(){
            $quentite.focus();
            const temp = $quentite.val().trim();
            if(temp!=='0' || temp!==''){
                switch($(this).attr('id')){
                    case '+':
                    case '-':
                    case '*':
                    case '/':
                        $operator = $(this).attr('id');
                        $somme+=parseFloat(temp);
                        $quentite.val('0');
                        break;
                    case '=':
                        $somme=do_calcul($somme, parseFloat(temp), $operator);
                        $quentite.val($somme);
                        $somme=0;
                        break;
                    default:
                        if(temp=='0'){
                            $quentite.val($(this).attr('id'));
                        }else{
                            $quentite.val($quentite.val() + $(this).attr('id'));
                        }
                }
            }else{
                $quentite.val(0);
            }
        });
    });
});

function do_calcul(somme_temp, value_temp, opera) {
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