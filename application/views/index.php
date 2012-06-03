<?php $this->load->view('template/header'); ?>
<div role="main">
    <pre>
        <?php echo anchor('upload', 'Upload Demand'); ?>
        <?php echo br(); ?>
        <?php echo anchor('upload/explore', 'Explore Demand'); ?>
        <?php echo br(); ?>
        <?php echo anchor('upload/upload_supply', 'Upload Supply'); ?>
        <?php echo br(); ?>
        <?php echo anchor('upload/explore_supply', 'Explore Supply'); ?>
        <?php echo br(); ?>
        <?php echo anchor('graph/index', 'Graph'); ?>
        <?php echo br(); ?>
        <?php echo anchor('graph/pie', 'Animated Pie'); ?>
        <?php echo br(); ?>
        <?php echo anchor('graph/map', 'Map'); ?>
        <?php echo br(); ?>
        <?php echo anchor('tool/index', 'Tool'); ?>
    </pre>
</div>
<?php $this->load->view('template/footer'); ?>
