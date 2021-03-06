<div class="page-header">
    <?php
$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Wlinks'=>array('index'),
        ),
    ));
    ?>

    <h1 id="main-heading">
        Detail CompetencyCategory #<?php echo $model->id; ?> <span>data detail CompetencyCategory pada aplikasi</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">Detail data menu #</span>
                </div>
                <div class="widget-content table-container">
                    <table class="table table-striped table-detail-view">
                        <tbody>
                                                        <tr>
                                <th><?php echo $model->getAttributeLabel('id');?></th>
                                <td><?php echo $model->id;?></td>
                            </tr>
                                                        <tr>
                                <th><?php echo $model->getAttributeLabel('code');?></th>
                                <td><?php echo $model->code;?></td>
                            </tr>
                                                        <tr>
                                <th><?php echo $model->getAttributeLabel('name');?></th>
                                <td><?php echo $model->name;?></td>
                            </tr>
                                                        <tr>
                                <th><?php echo $model->getAttributeLabel('description');?></th>
                                <td><?php echo $model->description;?></td>
                            </tr>
                                                        <tr>
                                <th><?php echo $model->getAttributeLabel('definition');?></th>
                                <td><?php echo $model->definition;?></td>
                            </tr>
                                                        <tr>
                                <th><?php echo $model->getAttributeLabel('competency_type_id');?></th>
                                <td><?php echo $model->competency_type_id;?></td>
                            </tr>
                                                    </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <div class="btn-toolbar pull-right"> 
                                        <div class="btn-group">
                                            <a href="/ihcms/index.php/gii/bootstrap/create"><button class="btn" rel="tooltip" title="Schedule"><i class="icon-plus"></i></button> </a>                                                           
                                            <a href="/ihcms/index.php/gii/bootstrap/update/id"><button class="btn" rel="tooltip" title="Edit"><i class="icon-pencil"></i></button></a>                                            <a href="#" id="yt0"><button class="btn" rel="tooltip" title="Edit"><i class="icon-trash"></i></button></a>                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
