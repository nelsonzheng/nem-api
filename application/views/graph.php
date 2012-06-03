<?php $this->load->view('template/header'); ?>
<style>
    #chart-container {
        position: relative;
    }
    #chart {
        position: relative;
        left: 40px;
    }
    #yaxis {
        position: absolute;
        top: 0;
        width: 40px;
        bottom: 0;
    }
</style>

<div role="main">
    <div id="chart-container">
        <div id="yaxis"></div>
        <div id="chart"></div>
        <div id="legend-container">
            <div id="smoother"></div>
            <div id="legend"></div>
        </div> 
    </div>
</div>
<script>
    var nsw = [
<?php foreach ($nsw as $point): ?>
            { x: <?php echo strtotime($point->settlementdate) ?>, y: <?php echo $point->totaldemand; ?> }, 
<?php endforeach; ?>
    ]
    var qld = [
<?php foreach ($qld as $point): ?>
            { x: <?php echo strtotime($point->settlementdate) ?>, y: <?php echo $point->totaldemand; ?> }, 
<?php endforeach; ?>
    ]
    var sa = [
<?php foreach ($sa as $point): ?>
            { x: <?php echo strtotime($point->settlementdate) ?>, y: <?php echo $point->totaldemand; ?> }, 
<?php endforeach; ?>
    ]
    var tas = [
<?php foreach ($tas as $point): ?>
            { x: <?php echo strtotime($point->settlementdate) ?>, y: <?php echo $point->totaldemand; ?> }, 
<?php endforeach; ?>
    ]
    var vic = [
<?php foreach ($vic as $point): ?>
            { x: <?php echo strtotime($point->settlementdate) ?>, y: <?php echo $point->totaldemand; ?> }, 
<?php endforeach; ?>
    ]
    
</script>
<script>
    var graph = new Rickshaw.Graph( {
        element: document.querySelector("#chart"),
        width: 1000,
        height: 480,
        renderer: 'line',
        interpolation: 'cardinal',
        series: [{
                color: 'navy',
                data: vic,
                name: 'VIC'
            }, {
                color: 'green',
                data: tas,
                name: 'TAS'
            }, {
                color: 'red',
                data: sa,
                name: 'SA'
            }, {
                color: 'maroon',
                data: qld,
                name: 'QLD'
            }, {
                color: 'skyblue',
                data: nsw,
                name: 'NSW'
            },] 
    })
    
    var hoverDetail = new Rickshaw.Graph.HoverDetail( {
        graph: graph,
        formatter: function(series, x, y) {
            var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
            var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
            var content = swatch + series.name + ": " + parseInt(y) + " MW";
            return content; 
        }
    });
    
    var y_ticks = new Rickshaw.Graph.Axis.Y( {
        graph: graph,
        orientation: 'left',
        tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
        element: document.querySelector('#yaxis')
    });
    
    var legend = new Rickshaw.Graph.Legend( {
        element: document.querySelector('#legend'),
        graph: graph
    } );
    var shelving = new Rickshaw.Graph.Behavior.Series.Toggle( {
        graph: graph,
        legend: legend
    } );

    var x_axis = new Rickshaw.Graph.Axis.Time({
        graph: graph
    });
    
    graph.render();
</script>
<?php $this->load->view('template/footer'); ?>