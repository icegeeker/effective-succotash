<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"F:\phpStudy\PHPTutorial\WWW\kill\public/../application/admin\view\collectplay\add.html";i:1523495218;s:75:"F:\phpStudy\PHPTutorial\WWW\kill\application\admin\view\layout\default.html";i:1523111344;s:72:"F:\phpStudy\PHPTutorial\WWW\kill\application\admin\view\common\meta.html";i:1523111344;s:74:"F:\phpStudy\PHPTutorial\WWW\kill\application\admin\view\common\script.html";i:1523111344;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <!--<div class="form-group">-->
        <!--<label for="c-user_id" class="control-label col-xs-12 col-sm-2"><?php echo __('User_id'); ?>:</label>-->
        <!--<div class="col-xs-12 col-sm-8">-->
            <!--<input id="c-user_id" data-rule="required" data-source="user/index" data-field="nickname" class="form-control selectpage" name="row[user_id]" type="text" value="">-->
        <!--</div>-->
    <!--</div>-->
    <div class="form-group">
        <label for="c-name" class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-name" data-rule="required" class="form-control" name="row[name]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="c-content" class="control-label col-xs-12 col-sm-2"><?php echo __('Content'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-content" data-rule="required" class="form-control" name="row[content]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="c-images" class="control-label col-xs-12 col-sm-2"><?php echo __('Images'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-images" data-rule="required" class="form-control" size="50" name="row[images]" type="text">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-images" class="btn btn-danger plupload" data-input-id="c-images" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="true" data-preview-id="p-images"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-images" class="btn btn-primary fachoose" data-input-id="c-images" data-mimetype="image/*" data-multiple="true"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-images"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-images"></ul>
        </div>
    </div>
    <div class="form-group">
        <label for="c-numb" class="control-label col-xs-12 col-sm-2"><?php echo __('Numb'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-numb" data-rule="required" class="form-control" name="row[numb]" type="number">
        </div>
    </div>
    <div class="form-group">
        <label for="c-numbs" class="control-label col-xs-12 col-sm-2"><?php echo __('Numbs'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-numbs" data-rule="required" class="form-control" name="row[numbs]" type="number">
        </div>
    </div>
    <div class="form-group">
        <label for="c-description" class="control-label col-xs-12 col-sm-2"><?php echo __('Description'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-description" data-rule="required" class="form-control" name="row[description]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-2"><?php echo __('Keywords'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-keywords" class="form-control" name="row[keywords]" type="text">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>