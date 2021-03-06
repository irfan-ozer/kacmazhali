
<?php echo $this->utils->alert(); ?>
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-table"></i> <?php echo $this->moduleTitle ?></div>
    <div class="panel-toolbar clearfix">
        <div class="row">
            <div class="col-md-4">
                <?php if ($this->isRoot()): ?>
                    <a class="btn btn-sm btn-info checkall" data-toggle="button"><i class="fa fa-check-square-o"></i> Hepsini Seç</a>
                    <a class="btn btn-sm btn-danger deleteall" href="<?php echo $this->module ?>/groupDelete"><i class="fa fa-trash-o"></i></a>
                    <a id="modal-modules-button" class="btn btn-sm btn-success" href="<?php echo $this->module ?>/groupInsert"><i class="fa fa-plus"></i> Yeni Kayıt</a>
                <?php endif; ?>

            </div>

            <div class="col-md-8 text-right">
                <form class="form-inline" action="" method="get" id="filter" accept-charset="utf-8" style="display: inline-block;">
                    <?php $this->view('filter') ?>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th width="40" class="text-center"><i class="fa fa-ellipsis-v"></i></th>
            <th width="50">#</th>
            <th>Başlık</th>
            <th width="100" class="text-center">Kayıtlar</th>
            <th width="100" class="text-right">İşlem</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($records as $item): ?>
        <tr>
            <td class="text-center"><input type="checkbox" class="checkall-item" value="<?php echo $item->id ?>" /></td>
            <td><?php echo $item->id ?></td>
            <td><?php echo $item->title ?></td>
            <td class="text-center"><?php echo $item->childs ?></td>
            <td class="text-right">
                <a class="btn btn-xs btn-success" href="<?php echo $this->module ?>/childs/<?php echo $item->id ?>"><i class="fa fa-share-alt"></i></a>
                <?php if ($this->isRoot()): ?>
                    <a class="btn btn-xs btn-primary" href="<?php echo $this->module ?>/groupUpdate/<?php echo $item->id ?>"><i class="fa fa-edit"></i></a>
                <?php endif; ?>
                <?php if ($this->isRoot()): ?>
                    <a class="btn btn-xs btn-danger confirm-delete" href="<?php echo $this->module ?>/groupDelete/<?php echo $item->id ?>"><i class="fa fa-trash-o"></i></a>
                <?php endif; ?>
            </td>

        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    <?php if (! empty($pagination)): ?>
        <div class="panel-footer">
            <?php echo $pagination ?>
        </div>
    <?php endif; ?>
</div>