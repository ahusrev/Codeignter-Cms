<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->user_name</b> kaydını düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("users/guncelle/$item->id"); ?>" method="post">


                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input class="form-control" placeholder="Kullanıcı Adını Giriniz" name="user_name" value="<?php echo $item->user_name;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("user_name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Adı ve Soyadı</label>
                        <input class="form-control" placeholder="Adını ve Soyadını Giriniz" name="full_name" value="<?php echo $item->full_name;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("full_name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>E-Posta Adresi</label>
                        <input class="form-control" type="email" placeholder="E-Posta Adresi Giriniz" name="email" value="<?php echo $item->email;?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("users"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>