

<div id="footer" style="position: fixed; bottom: 0;">
    <div class="row">
        <div class="col-md-12">
            <h2>(C) Footer</h2>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo SITE_ROOT; ?>public/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo SITE_ROOT; ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo SITE_ROOT; ?>public/js/custom.js"></script>


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