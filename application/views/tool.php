<?php $this->load->view('template/header.php'); ?>
<style>

</style>
<div class="container">
    <header>
        <div id="emblem">
            <img src="../../img/emblem.png" />
        </div>
        <h1>The National Electricity Market</h1>
        <div class="description">
            Day to day operation of Australian energy markets involves dynamic trading between energy generators, wholesalers and retailers based on variable pricing levels that reflect current levels of demand. AEMO maintains the systems through which prices are set and transactions carried out and provides accurate and timely market data to participants. In some markets, AEMO also acts as the clearing house for market transactions.
        </div>
    </header>
    <div class="content">
        <div class="row">
            <div class="onecol">
                <nav>
                    <ul>
                        <li>
                            <select>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                            </select>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="onecol">
                <div class="state_graph">
                    <div class="chart behind" id="nsw_demand">
                    </div>
                    <div class="chart" id="nsw_price">
                    </div>
                    <span>New South Wales</span>
                </div>
                <div class="state_graph">
                    <div class="chart" id="qld_chart">

                    </div>
                    <span>Queensland</span>
                </div>
                <div class="state_graph">
                    <div class="chart" id="qld_chart">

                    </div>
                    <span>South Australia</span>
                </div>
                <div class="state_graph">
                    <div class="chart" id="qld_chart">

                    </div>
                    <span>Tasmania</span>
                </div>
                <div class="state_graph last">
                    <div class="chart" id="qld_chart">

                    </div>
                    <span>Victoria</span>
                </div>

            </div>
            <div id="chart"></div>
        </div>
    </div>
</div>
<script>
    var nsw_demand = [
        { x: 1, y: 8827.23 },
        { x: 2, y: 9247.08 },
        { x: 3, y: 8592.83 },
        { x: 4, y: 8189.93 },
        { x: 5, y: 9068.06 },
        { x: 6, y: 9474.74 },
        { x: 7, y: 9558.22 },
        { x: 8, y: 9024.85 },
        { x: 9, y: 8447.95 },
        { x: 10, y: 8141.06 },
        { x: 11, y: 8387.46 },
        { x: 12, y: 7816.35 },
    ]
    var nsw_price = [
        { x: 1, y: 4836.0 },
        { x: 2, y: 13677.46 },
        { x: 3, y: 2634.05 },
        { x: 4, y: 2642.74 },
        { x: 5, y: 2911.22 },
        { x: 6, y: 2739.59 },
        { x: 7, y: 3062.97 },
        { x: 8, y: 3015.25 },
        { x: 9, y: 2855.57 },
        { x: 10, y: 2852.31 },
        { x: 11, y: 3712.45 },
        { x: 12, y: 2578.44 },
    ]
    var qld_demand = [
        { x: 1, y: 8827.23 },
        { x: 2, y: 9247.08 },
        { x: 3, y: 8592.83 },
        { x: 4, y: 8189.93 },
        { x: 5, y: 9068.06 },
        { x: 6, y: 9474.74 },
        { x: 7, y: 9558.22 },
        { x: 8, y: 9024.85 },
        { x: 9, y: 8447.95 },
        { x: 10, y: 8141.06 },
        { x: 11, y: 8387.46 },
        { x: 12, y: 7816.35 },
    ]
    
    
    
    var graph = new Rickshaw.Graph({
        element: document.querySelector("#nsw_demand"),
        width: 180,
        height:  130,
        renderer: 'area',
        interpolation: 'cardinal',
        max: 14000,
        min: 0,
        series: [{
                color: '#403D3D',
                data: nsw_demand,
                name: 'NSW'
            }]
    })
    var graph2 = new Rickshaw.Graph({
        element: document.querySelector("#nsw_price"),
        width: 180,
        height:  130,
        renderer: 'line',
        interpolation: 'cardinal',
        max: 14000,
        min: 0,
        series: [{
                color: '#B91120',
                data: nsw_price,
                name: 'NSW'
            }]
    })
    graph.render();
    graph2.render();
</script>
<div id="svgpathSVGdata"></div>

<script type="text/javascript">
    var divElem = d3.select("#svgpathSVGdata");

    var svgcanvas = divElem.append("svg:svg")
    .attr("width", 200)
    .attr("height", 200);

    // (1) Specifying path data the SVG way
    svgcanvas.append("svg:path")
    .attr("d","M 0 60 L 50 110 L 90 70 L 140 100")
    .style("stroke-width", 2)
    .style("stroke", "steelblue")
    .style("fill", "none");
</script>
<?php $this->load->view('template/footer.php'); ?>