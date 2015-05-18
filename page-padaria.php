<?php
get_header();
?>

<div>
<div>
  <nav class="row container" id="stickyribbon">
    <ul class="menu-padaria">
      <li role="presentation" style="background: #FD9332"><a href="#historia">HISTÓRIA</a></li>
      <li role="presentation" style="background: #FD9332"><a href="#sustentabilidade">SUSTENTABILIDADE</a></li>
      <li role="presentation" style="background: #FD9332"><a href="#acaosocial">AÇÃO SOCIAL</a></li>
      <li role="presentation" style="background: #FD9332"><a href="#premios">PRÊMIOS</a></li>
    </ul>
  </nav>
</div>
</div>

<div class="row container">
  <?php 
    echo do_shortcode("[metaslider id=63]"); 
  ?>
</div>


<!-- HISTÓRIA -->
<div class="row container">
	<a id="anchor-name" name="historia"></a>

		<?php
			include("page-historia.php");
		?>

    </div>


<!-- SUSTENTABILIDADE -->
<div class="row container">
	<a id="anchor-name" name="sustentabilidade"></a>

		<?php
			include("page-sustentabilidade.php");
		?>

</div>


<!-- AÇÃO SOCIAL -->
<div class="row container">
	<a id="anchor-name" name="acaosocial"></a>

		<?php
			include("page-acaosocial.php");
		?>

</div>


<!-- PRÊMIOS -->
<div class="row container">
	<a id="anchor-name" name="premios"></a>

		<?php
			include("page-premios.php");
		?>

</div>

<?php
get_footer();
?>