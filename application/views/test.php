<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="http://graph.nelsonzheng.com/css/rickshaw.css">
        <link rel="stylesheet" href="http://graph.nelsonzheng.com/css/lines.css">
        <link rel="stylesheet" href="http://graph.nelsonzheng.com/css/extensions.css">
        <link rel="stylesheet" href="http://graph.nelsonzheng.com/js/src/css/detail.css">
        <link rel="stylesheet" href="http://graph.nelsonzheng.com/js/src/css/graph.css">
        <link rel="stylesheet" href="http://graph.nelsonzheng.com/js/src/css/legend.css">
        <link rel="stylesheet" href="http://graph.nelsonzheng.com/css/style.css">
        <link rel="stylesheet" href="http://graph.nelsonzheng.com/css/styles.css">

        <script src="http://graph.nelsonzheng.com/js/vendor/d3.min.js"></script>
        <script src="http://graph.nelsonzheng.com/js/vendor/d3.layout.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

        <script src="http://graph.nelsonzheng.com/js/plugins.js"></script>
        <script src="http://graph.nelsonzheng.com/js/script.js"></script>
        <script src="http://d3js.org/d3.v2.js"></script>

        <script src="http://graph.nelsonzheng.com/js/rickshaw.min.js"></script>
<!--        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Class.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Compat.ClassList.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Renderer.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Renderer.Area.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Renderer.Line.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Renderer.Bar.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Renderer.ScatterPlot.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.RangeSlider.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.HoverDetail.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Annotate.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Legend.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Axis.Time.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Behavior.Series.Toggle.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Behavior.Series.Order.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Behavior.Series.Highlight.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Smoother.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Unstacker.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Fixtures.Time.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Fixtures.Number.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Fixtures.RandomData.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Fixtures.Color.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Color.Palette.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.Graph.Axis.Y.js"></script>-->

        <!--<script src="http://graph.nelsonzheng.com/js/libs/modernizr-2.5.3.min.js"></script>-->


    </head>
    <body>
      <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
        <header>

        </header>
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
                    <div class="onecol col">
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
                            <div class="chart" id="nsw_chart">
                            </div>
                            <span>New South Wales</span>
                        </div>
                        <div class="state_graph">
                            <div class="chart" id="qld_chart">
                            </div>
                            <span>Queensland</span>
                        </div>
                        <div class="state_graph">
                            <div class="chart" id="sa_chart">

                            </div>
                            <span>South Australia</span>
                        </div>
                        <div class="state_graph">
                            <div class="chart" id="tas_chart">

                            </div>
                            <span>Tasmania</span>
                        </div>
                        <div class="state_graph last">
                            <div class="chart" id="vic_chart">

                            </div>
                            <span>Victoria</span>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="twocolleft col">
                        <div id="map"></div>
                    </div>
                    <div class="twocolright col">
                        <div id="donut"></div>
                    </div> 
                </div>
            </div>
        </div>
        <script>
            
            var tw = 180,
            th = 130,
            tp = 0,
            mmax = 20000,
            mmin = 0,
            tx = d3.scale.linear().domain([1, 12]).range([0, tw]),
            ty = d3.scale.linear().domain([0, 15000]).range([th, 0]);
            
            // New South Wales
            var nsw_chart = d3.select("#nsw_chart")
            .append("svg");
            
            var nsw_demand = nsw_chart.append("g")
            .attr("id", "nsw_demand")
            .attr("class", "demand")
            .attr("width", 180)
            .attr("height", 130);
            
            var nsw_price = nsw_chart.append("g")
            .attr("id", "nsw_price")
            .attr("class", "price");
            
            d3.json(
            "../api/demand/nsw/monthly/2011",
            function(d) {
                nsw_demand.append("path")
                .data([d])
                .attr("class", "area")
                .attr("d", d3.svg.area()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y0(ty.range()[0])
                .y1(function(d) { return ty(d.y); }));
            }); 
            d3.json(
            "../api/rrp/nsw/monthly/2011",
            function(d) {
                nsw_price.append("path")
                .data([d])
                .attr("class", "line")
                .attr("d", d3.svg.line()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y(function(d) { return ty(d.y*100); }));
            }); 
            
            // Queensland
            var qld_chart = d3.select("#qld_chart")
            .append("svg");
            
            var qld_demand = qld_chart.append("g")
            .attr("id", "qld_demand")
            .attr("class", "demand")
            .attr("width", 180)
            .attr("height", 130);
            
            var qld_price = qld_chart.append("g")
            .attr("id", "qld_price")
            .attr("class", "price");
            
            d3.json(
            "../api/demand/qld/monthly/2011",
            function(d) {
                qld_demand.append("path")
                .data([d])
                .attr("class", "area")
                .attr("d", d3.svg.area()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y0(ty.range()[0])
                .y1(function(d) { return ty(d.y); }));
            }); 
            d3.json(
            "../api/rrp/qld/monthly/2011",
            function(d) {
                qld_price.append("path")
                .data([d])
                .attr("class", "line")
                .attr("d", d3.svg.line()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y(function(d) { return ty(d.y*100); }));
            });
            
            // South Australia
            var sa_chart = d3.select("#sa_chart")
            .append("svg");
            
            var sa_demand = sa_chart.append("g")
            .attr("id", "sa_demand")
            .attr("class", "demand")
            .attr("width", 180)
            .attr("height", 130);
            
            var sa_price = sa_chart.append("g")
            .attr("id", "sa_price")
            .attr("class", "price");
            
            d3.json(
            "../api/demand/sa/monthly/2011",
            function(d) {
                sa_demand.append("path")
                .data([d])
                .attr("class", "area")
                .attr("d", d3.svg.area()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y0(ty.range()[0])
                .y1(function(d) { return ty(d.y); }));
            }); 
            d3.json(
            "../api/rrp/sa/monthly/2011",
            function(d) {
                sa_price.append("path")
                .data([d])
                .attr("class", "line")
                .attr("d", d3.svg.line()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y(function(d) { return ty(d.y*100); }));
            });
            
            // Tasmania
            var tas_chart = d3.select("#tas_chart")
            .append("svg");
            
            var tas_demand = tas_chart.append("g")
            .attr("id", "tas_demand")
            .attr("class", "demand")
            .attr("width", 180)
            .attr("height", 130);
            
            var tas_price = tas_chart.append("g")
            .attr("id", "tas_price")
            .attr("class", "price");
            
            d3.json(
            "../api/demand/tas/monthly/2011",
            function(d) {
                tas_demand.append("path")
                .data([d])
                .attr("class", "area")
                .attr("d", d3.svg.area()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y0(ty.range()[0])
                .y1(function(d) { return ty(d.y); }));
            }); 
            d3.json(
            "../api/rrp/tas/monthly/2011",
            function(d) {
                tas_price.append("path")
                .data([d])
                .attr("class", "line")
                .attr("d", d3.svg.line()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y(function(d) { return ty(d.y*100); }));
            });
            
            // Victoria
            var vic_chart = d3.select("#vic_chart")
            .append("svg");
            
            var vic_demand = vic_chart.append("g")
            .attr("id", "vic_demand")
            .attr("class", "demand")
            .attr("width", 180)
            .attr("height", 130);
            
            var vic_price = vic_chart.append("g")
            .attr("id", "vic_price")
            .attr("class", "price");
            
            d3.json(
            "../api/demand/vic/monthly/2011",
            function(d) {
                vic_demand.append("path")
                .data([d])
                .attr("class", "area")
                .attr("d", d3.svg.area()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y0(ty.range()[0])
                .y1(function(d) { return ty(d.y); }));
            }); 
            d3.json(
            "../api/rrp/vic/monthly/2011",
            function(d) {
                vic_price.append("path")
                .data([d])
                .attr("class", "line")
                .attr("d", d3.svg.line()
                .interpolate("linear")
                .x(function(d) { return tx(d.x); })
                .y(function(d) { return ty(d.y*100); }));
            });
            
            // Map
            var data; // loaded asynchronously

            var path = d3.geo.path().projection(d3.geo.mercator().scale(4800).translate([-1478,-60]));

            var svg = d3.select("#map")
            .append("svg");


            var states = svg.append("g")
            .attr("id", "states");

            d3.json("/svg/au-states.json", function(json) {
                states.selectAll("path")
                .data(json.features)
                .enter().append("path")
                .attr("class", data ? quantize : null)
                .attr("id",
                function(d) {
                    return d.properties.name;
                })
                .attr("d", path)
                .translate(10,10);
            });



            d3.json("../api/consumption/nem/2011", function(json) {
                data = json;
                states.selectAll("path")
                .attr("class", quantize);
            });

            function quantize(d) {
                return "q" + Math.min(8, ~~(data[d.id] / 10000000)) + "-9";
            }
            
            var data1 = [46053.55, 40408.75, 8565.5, 49002.3, 46147.11, 50880.06,50654.16],
            data2 = [200, 200, 200, 200, 200],
            data = data1;

            var w = 320,
            h = 320,
            r = Math.min(w, h) / 2,
            color = d3.scale.category20(),
            donut = d3.layout.pie().sort(null),
            arc = d3.svg.arc().innerRadius(r - 100).outerRadius(r - 20);

            var svg = d3.select("#donut").append("svg:svg")
            .attr("width", w)
            .attr("height", h)
            .append("svg:g")
            .attr("transform", "translate(" + w / 2 + "," + h / 2 + ")");

            var arcs = svg.selectAll("path")
            .data(donut(data))
            .enter().append("svg:path")
            .attr("fill", function(d, i) { return color(i); })
            .attr("d", arc)
            .each(function(d) { this._current = d; });

            d3.select(window).on("click", function() {
                data = data === data1 ? data2 : data1; // swap the data
                arcs = arcs.data(donut(data)); // recompute the angles and rebind the data
                arcs.transition().duration(500).attrTween("d", arcTween); // redraw the arcs
            });

            // Store the currently-displayed angles in this._current.
            // Then, interpolate from this._current to the new angles.
            function arcTween(a) {
                var i = d3.interpolate(this._current, a);
                this._current = i(0);
                return function(t) {
                    return arc(i(t));
                };
            }
            
        </script>
        <style>
            .rule line {
                stroke: #eee;
                shape-rendering: crispEdges;
            }
            .chart {
                background: white;
            }
            .line{
                fill: none;
                stroke: #B91120;
                stroke-width: 2px;
            }
            .area {
                fill: #403D3D;
            }
            .q0-9,
            .q1-9,
            .q2-9,
            .q3-9,
            .q4-9,
            .q5-9,
            .q6-9,
            .q7-9,
            .q8-9 {
                fill:rgb(185,17,32);
            }
            .q0-9 {
                fill: rgba(34,31,31, 0.9);
            }
            .q1-9 {
                fill-opacity:0.2;
            }
            .q2-9 {
                fill-opacity:0.3;
            }
            .q3-9 {
                fill-opacity:0.4;
            }
            .q4-9 {
                fill-opacity:0.5;
            }
            .q5-9 {
                fill-opacity:0.6;
            }
            .q6-9 {
                fill-opacity:0.7;
            }
            .q7-9 {
                fill-opacity:0.8;
            }
            .q8-9 {
                fill-opacity:0.9;
            }

        </style>
        <footer>

        </footer>
    </body>
</html>