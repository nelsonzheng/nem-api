<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=no-js lang=en> <!--<![endif]-->
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
<title></title>
<meta name=description content="">
<meta name=viewport content="width=device-width">
<link rel=stylesheet type="text/css" href="http://graph.nelsonzheng.com/css,_rickshaw.css+css,_lines.css+css,_extensions.css+js,_src,_css,_detail.css+js,_src,_css,_graph.css+js,_src,_css,_legend.css+css,_style.css+css,_styles.css.pagespeed.cc.R8G1dVl7nX.css">
<script src="http://graph.nelsonzheng.com/js/vendor/d3.min.js.pagespeed.ce.62jT0QNXid.js"></script>
<script src="http://graph.nelsonzheng.com/js/vendor/d3.layout.min.js.pagespeed.ce.TXPeoWB3sN.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script>window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());


</script>
<script>/* Author:

*/





</script>
<script src="http://d3js.org/d3.v2.js"></script>
<!--        <script src="http://graph.nelsonzheng.com/js/rickshaw.min.js"></script>
        <script src="http://graph.nelsonzheng.com/js/src/js/Rickshaw.js"></script>
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
</header><script>
    var data; // loaded asynchronously

    var path = d3.geo.path();

    var svg = d3.select("#chart")
    .append("svg");

    var counties = svg.append("g")
    .attr("id", "counties")
    .attr("class", "Blues");

    var states = svg.append("g")
    .attr("id", "states");

    d3.json("http://graph.nelsonzheng.com/svg/us-counties.json", function(json) {
        counties.selectAll("path")
        .data(json.features)
        .enter().append("path")
        .attr("class", data ? quantize : null)
        .attr("d", path);
    });

    d3.json("http://graph.nelsonzheng.com/svg/us-states.json", function(json) {
        states.selectAll("path")
        .data(json.features)
        .enter().append("path")
        .attr("d", path);
    });

    d3.json("unemployment.json", function(json) {
        data = json;
        counties.selectAll("path")
        .attr("class", quantize);
    });

    function quantize(d) {
        return "q" + Math.min(8, ~~(data[d.id] * 9 / 12)) + "-9";
    
</script>
<div class=container>
<header>
<div id=emblem>
<img></img>
</div>
<h1>Factors Impacting the <br/>National Electricity Market</h1>
<div class=description>
Day to day operation of Australian energy markets involves dynamic trading between energy generators, wholesalers and retailers based on variable pricing levels that reflect current levels of demand. AEMO maintains the systems through which prices are set and transactions carried out and provides accurate and timely market data to participants. In some markets, AEMO also acts as the clearing house for market transactions.
</div>
</header>
<div class=content>
<div class=onecol>
<nav>
<ul>
<li>
<select>
<option>2011</option>
<option>2010</option>
<option>2009</option>
<option>2008</option>
<option>2007</option>
</select>
</li>
</ul>
</nav>
<div id=chart>
</div>
</div>
</div>
</div>
<footer>
</footer>
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>