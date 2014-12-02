<div class="row">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Session->flash(); ?>
    
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Por Favor, Ingrese.</h3>
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('User', array('role'=>'form')); ?>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="username" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Recuerdame
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <?php echo $this->Form->submit('Login', array('class'=>'btn btn-lg btn-success btn-block')) ?>
                        
                    </fieldset>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
    <?php $this->Session->read('Auth.User') ?>
</div>

<!--<div class="users form">-->

<?php /*echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); */?>
<!--</div>-->