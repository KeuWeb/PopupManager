var msgPopup = function(tipo,posicao,texto){
  if(tipo == "alert" || tipo == "delete" || tipo == "excluse"){
    var cor = "#F27935";
    var borda = "#CA4F0D";
  }else if(tipo == "error" || tipo == "firewall"){
    var cor = "#E83B53";
    var borda = "#C61732";
  }else if(tipo == "success"){
    var cor = "#1FBBA6";
    var borda = "#168577";
  }else{
    var cor = "#00AFD1";
    var borda = "#00849F";
  }

  $('#msg-popup').css({
    'top':"initial",
    'left':"initial",
    'right':"initial",
    'bottom':"initial"
  });

  if(posicao == "TL"){
    $('#msg-popup').css({
      'top':"10px",
      'left':"10px"
    });
  }else if(posicao == "TR"){
    $('#msg-popup').css({
      'top':"10px",
      'right':"10px"
    });
  }else if(posicao == "BL"){
    $('#msg-popup').css({
      'bottom':"10px",
      'left':"10px"
    });
  }else if(posicao == "BR"){
    $('#msg-popup').css({
      'bottom':"10px",
      'right':"10px"
    });
  }else if(posicao == "BC"){
    $('#msg-popup').css({
      'bottom':"10px",
      'left':"30%"
    });
  }else{
    $('#msg-popup').css({
      'top':"10px",
      'left':"30%"
    });
  }

  $('#msg-popup span').html(texto);

  if($('#msg-popup').attr("data-status") == "on"){
  	$('#msg-popup').removeClass("bounceIn").addClass("bounceOut").attr('data-status',"off");
  	
  	clearTimeout(timePopup);

  	setTimeout(function(){
  		$('#msg-popup').css({
  			'background-color':cor,
  			'display':"block",
        posicao:"10px"
  		}).removeClass('bounceOut').addClass('bounceIn').attr('data-status',"on");

  		$('.time-bar').html("<div></div>");
  		$('.time-bar div').css({
  		'background-color':borda
  		});
	  },500);
  }else{
		$('#msg-popup').css({
			'background-color':cor,
			'display':"block",
      posicao:"10px"
		}).removeClass('bounceOut').addClass('bounceIn').attr('data-status',"on");

		$('.time-bar').html("<div></div>");
		$('.time-bar div').css({
		'background-color':borda
		});
  }

  timePopup = setTimeout(
    function(){
  	  $('#msg-popup').removeClass('bounceIn').addClass('bounceOut').attr('data-status',"off");
  },10000);

  return false;
}

var timePopup;

$(document).on('click','#msg-popup',function(){
  $(this).removeClass('bounceIn').addClass('bounceOut').attr('data-status',"off");
  
  clearTimeout(timePopup);
});