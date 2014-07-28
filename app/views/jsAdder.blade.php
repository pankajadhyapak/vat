<script>
    $(document).ready(function(){

        $("#total_value").val('0');

        var error = false;

        $("#tax_value").keyup(function(){
            if(Validatae('#tax_value',0) ){
                sum();
            }
        });

        $("#net_value").keyup(function(){
            if(Validatae('#net_value',0) ){
                sum();
            }
        });

        $("#other_charges").keyup(function(){
            if(Validatae('#other_charges',0) ){
                sum();
            }
        });

        function sum(){
            var tax_value =  $("#tax_value").val();
            var net_value = $("#net_value").val();
            var other_charges = $("#other_charges").val();

            if(tax_value == '' ){
                tax_value = 0;
            }else{
                tax_value = parseInt(tax_value);
            }

            if(net_value == ''){
                net_value = 0;
            }else{
                net_value = parseInt(net_value);
            }

            if(other_charges == ''){
                other_charges = 0;
            }else{
                other_charges = parseInt(other_charges);
            }

            $("#total_value").val( tax_value + net_value + other_charges );

        }
        function Validatae(BoxId,min){
            var taxValue = $(BoxId).val();
            if($.isNumeric(taxValue)){
                if(taxValue >= min ){
                    $(BoxId).parent().removeClass('has-error');
                    $(BoxId).parent().addClass('has-success');
                    return true;
                }else{
                    $(BoxId).parent().removeClass('has-success');
                    $(BoxId).parent().addClass('has-error');
                    return false;
                }
            }else{
                $(BoxId).parent().removeClass('has-success');
                $(BoxId).parent().addClass('has-error');
                return false;
            }
        }
    });
</script>