<script type="text/javascript">
    chart = google.charts.setOnLoadCallback(drawChart)

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            [
                'Element', "<?php echo $model->element_label; ?>"],
                <?php for($i = 0; $i < count($model->values); $i++): ?>
                    ["<?php echo $model->labels[$i]; ?>", <?php echo e($model->values[$i]); ?>],
                <?php endfor; ?>
        ])

        var options = {
            <?php echo $__env->make('charts::_partials.dimension.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            fontSize: 12,
            <?php echo $__env->make('charts::google.titles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('charts::google.colors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            legend: { position: 'top', alignment: 'end' }
        };

        var chart = new google.visualization.LineChart(document.getElementById("<?php echo e($model->id); ?>"))

        chart.draw(data, options)
    }
</script>

<?php if(!$model->customId): ?>
    <?php echo $__env->make('charts::_partials.container.div', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
