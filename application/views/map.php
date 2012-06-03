<!DOCTYPE html>
<meta charset="utf-8">
<script src="http://d3js.org/d3.v2.js"></script>
<style>

    .background {
        fill: none;
        pointer-events: all;
    }

    #states {
        fill: #aaa;
        stroke: #fff;
        stroke-width: 1.5px;
    }

    #states path:hover {
        stroke: white;
    }

</style>
<body>
    <script>

        var width = 960,
        height = 500,
        centered;

        var projection = d3.geo.mercator()
        .scale(1920)
        .translate([-500, 0]);

        var path = d3.geo.path()
        .projection(projection);

        var svg = d3.select("body").append("svg")
        .attr("width", width)
        .attr("height", height);

        svg.append("rect")
        .attr("class", "background")
        .attr("width", width)
        .attr("height", height)
        .on("click", click);

        var states = svg.append("g")
        .attr("transform", "translate(" + 0 + "," + 0 + ")")
        .append("g")
        .attr("id", "states");

        d3.json("../../svg/test.json", function(json) {
            states.selectAll("path")
            .data(json.features)
            .enter().append("path")
            .attr("d", path)
            .on("click", click);
        });

        function click(d) {
            var x = 0,
            y = 0,
            k = 1;

            if (d && centered !== d) {
                var centroid = path.centroid(d);
                x = -centroid[0];
                y = -centroid[1];
                k = 4;
                centered = d;
            } else {
                centered = null;
            }

            states.transition()
            .duration(1000)
            .attr("transform", "scale(" + k + ")translate(" + x + "," + y + ")")
            .style("stroke-width", 1.5 / k + "px");
        }

    </script>