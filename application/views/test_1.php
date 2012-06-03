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
                            <div class="chart behind" id="nsw_chart">
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
            var tw = 180,
            th = 130,
            tp = 0,
            mmax = d3.max(nsw_demand),
            mmin = d3.min(nsw_demand),
            tx = d3.scale.linear().domain([1, 12]).range([0, tw]),
            ty = d3.scale.linear().domain([0, 14000]).range([th, 0]);
    
            var nsw_chart = d3.select("#nsw_chart")
            .append("svg")
            .data([nsw_demand])
            .attr("class","chart")
            .attr("width", tw)
            .attr("height", th)
            .append("g")
            
            nsw_chart.append("path")
            .attr("class", "area")
            .attr("d", d3.svg.area()
            .interpolate("linear")
            .x(function(d) { return tx(d.x); })
            .y0(ty.range()[0])
            .y1(function(d) { return ty(d.y); }));


            var qld_chart = d3.select("#qld_chart")
            .append("svg")
            .attr("class","chart")
            .attr("width", tw)
            .attr("height", th)
            .append("g")
            
            d3.json(
                "../api/demand/qld/monthly/2011", 
                function(data) {
                    d3.select("#qld_chart")
                    .append("svg")
                    
                }
            });    
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
                stroke-width: 1.5px;
            }
            .area {
                fill: #403D3D;
            }
        </style>
        <footer>

        </footer>
    </body>
</html>