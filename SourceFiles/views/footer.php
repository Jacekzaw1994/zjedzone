<!-- Footer -->
<div id="footer-wrapper">
    <div id="copyright" class="container">
        <ul class="links">
            <li>&copy; Zjedz.one. Wszelkie prawa zastrzeżone.</li>
        </ul>
    </div>
</div>


<!-- Scripts -->
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
