<!-- Footer -->
<div id="footer-wrapper">
    <div class="users-online">
       <h3> Zalogowanych: <?php $variable = $this->loggedInUsers;  if($variable[0][0] == 1){ echo $variable[0][0] . " użytkownik.";} else{ echo $variable[0][0] . " użytkowników.";}; ?> </h3>
    </div>
    <div id="copyright" class="container">
        <ul class="links">
            <li>&copy; Zjedz.one. Wszelkie prawa zastrzeżone.</li>
        </ul>
    </div>
</div>



<!-- Scripts -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"Ta strona wykorzystuje pliki cookie w celu poprawnego działania",
        "dismiss":"Rozumiem","learnMore":"Info","link":null,"theme":"dark-bottom"};
</script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
<script src="<?php echo SITE_ROOT; ?>public/assets/js/jquery.min.js"></script>
<script src="<?php echo SITE_ROOT; ?>public/assets/js/jquery.dropotron.min.js"></script>
<script src="<?php echo SITE_ROOT; ?>public/assets/js/skel.min.js"></script>
<script src="<?php echo SITE_ROOT; ?>public/assets/js/skel-viewport.min.js"></script>
<script src="<?php echo SITE_ROOT; ?>public/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="<?php echo SITE_ROOT; ?>public/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php echo SITE_ROOT; ?>public/assets/js/main.js"></script>
<script src="<?php echo SITE_ROOT; ?>public/js/custom.js"></script>
<script src="<?php echo SITE_ROOT; ?>views/register/js/checkLogin.js"></script>
<script src="<?php echo SITE_ROOT; ?>views/add_recipe/js/addIngredient.js"></script>
<script src="<?php echo SITE_ROOT; ?>views/search/js/searchByIngredient.js"></script>

<?php
if(isset($this->js))
{
    foreach($this->js as $js)
    {
        echo '<script src="' .SITE_ROOT. 'views/' . $js .'"></script>';
    }
}
?>

</body>
</html>
