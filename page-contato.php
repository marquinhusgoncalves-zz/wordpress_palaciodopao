<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='button'>{$message}</div>";
  }

  //Placeholder
  $ph_name = "Nome";
  $ph_email = "e-maill";
  $ph_message = "Mensagem";
  $ph_human = "";

  //response messages
  $not_human       = "Verificação humana incorreta.";
  $missing_content = "Por favor coloque todas as informações.";
  $email_invalid   = "Email inválido.";
  $message_unsent  = "Mensagem não enviada. Tente de novo.";
  $message_sent    = "Obrigado! Sua mensagem foi enviada.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
  $machine = $_POST['message_machine'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Email enviado do site da ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != $machine) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

get_header(); ?>

	<div class = "produto-box-title" style = "background: #789 url(<?php bloginfo('stylesheet_directory');?>/img/marcadagua.png);">
		<h1 class = "produto-title">entre em contato com a gente</h1>
	</div>

	<div class = "clearfix" style = "background-color: #EFEEEA; margin-top: -1px">

		<div class = "col-xs-12 col-md-6" style = "padding: 4% 3% 3%; color: #6B6B6B; font-weight: 300" id = "respond">
		
		  <form action = "<?php the_permalink(); ?>" method = "post">
		    <input class = "col-xs-12" type = "text" name = "message_name" value = "<?php echo esc_attr($_POST['message_name']); ?>" placeholder = "<?php echo $ph_name; ?>" />
		    <input class = "col-xs-12" type = "text" name = "message_email" value = "<?php echo esc_attr($_POST['message_email']); ?>" placeholder = "<?php echo $ph_email; ?>" />
		    <textarea class = "col-xs-12" type="text" name = "message_text" rows = "2" placeholder = "<?php echo $ph_message; ?>"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
		    <p style = "padding-left: 0; display: inline-block">digite o número <strong><?php $Random_code=rand(10,100); echo$Random_code; ?></strong> para enviar</p>
        <label style = "padding-left: 20px"><input type = "text" style = "width: 20px" name="message_human" placeholder = "<?php echo $ph_human; ?>" /></label>
        <input type = "hidden" name = "message_machine" value = "<?php echo $Random_code; ?>" />
		    <input type = "hidden" name = "submitted" value = "1">
		    
        <button class = "btn btn-default" type = "submit" name = "send" style = "float: right">enviar</button>
		  </form>

      <div style = "padding: 10px 0"><?php echo $response; ?></div>

		  <a class = "clearfix" style = "font-size: 1.2em; font-weight: 800; line-height: 1.4; color: #6B6B6B !important" href = "mailto:contato@palaciodopao.com.br">Ou clique aqui e envie um e-mail</a>

		</div>
	 
	  <div class = "box-pagamento col-xs-12 col-md-6" role = "form">
  		<div style = "display: table-cell; vertical-align: middle"><img class = "pagamento" src = "<?php bloginfo('stylesheet_directory');?>/img/pagamento.png"></div>
	  </div>

	</div>

	<div id = "map-canvas"></div>

  <script src = "https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

  <script type="text/javascript">
    function initialize() {
        var myLatlng = new google.maps.LatLng(-23.646776, -46.514396,17);
        var mapOptions = {
            zoom: 17,
            center: myLatlng,
            disableDefaultUI: false,
            scrollwheel: false,
            draggable: false
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Palácio do Pão'
        });
        var styles = [
            {
                stylers: [
                    { hue: "#23408F" },
                    { saturation: -20 }
                ]
            },{
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    { lightness: 100 },
                    { visibility: "simplified" }
                ]
            },{
                featureType: "road.local",
                elementType: "labels",
            }
        ];
        map.setOptions({styles: styles});
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

<?php get_footer(); ?>