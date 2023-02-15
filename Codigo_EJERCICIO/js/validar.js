$(function(){
	$("select[name='tipo']").change(function(){
		if($(this).val() == "cuadrado"){
			$("input[name='lado_1']").prop("disabled", false);
      $("input[name='lado_2']").prop("disabled", true);
      $("input[name='lado_3']").prop("disabled", true);
		}else if($(this).val() == "rectangulo"){
      $("input[name='lado_1']").prop("disabled", false);
      $("input[name='lado_2']").prop("disabled", false);
      $("input[name='lado_3']").prop("disabled", true);
    }else{
      $("input[name='lado_1']").prop("disabled", false);
      $("input[name='lado_2']").prop("disabled", false);
      $("input[name='lado_3']").prop("disabled", false);
    }
	});
});