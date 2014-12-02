<div id="page-wrapper">
    <div class="row">
        <p></p>
        <?php echo $this->Session->flash(); ?>
    </div>
    
    <div class="row">
        <?php echo $this->fetch('content'); ?>
    </div>
</div>
<!-- /#page-wrapper -->