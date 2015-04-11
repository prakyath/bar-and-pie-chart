<html>

<head>
 <title>
   yo yo    
 </title>
 <script src="jquery-1.11.2.min.js" charset="utf-8"></script>
 <script src="d3.js" charset="utf-8"></script>
 <script src="d3.min.js" charset="utf-8"></script>
 <style type="text/css">
rect.highlight {
    fill: purple;
}
.cell {
  fill:steelblue;
}

 .axis {
   font: 10px sans-serif;
 }

 .axis path,
 .axis line {
   fill: none;
   stroke: #000;
   shape-rendering: crispEdges;
 }
rect.cell
{
border-style: solid;
border-bottom: 15px;
    border-bottom-color: #ff0000;
}

p.input {
border-style: solid;
border-radius: 2px;
border-width: 2px;
padding-left: 45%;


}
 </style>
 

</head>

<body>

     


    <script type="text/javascript">




 function bar()
 {  


 $('.svg').remove(); 
result=[]
main_result=[]
barHeight=50;

       //  $(document).ready(function(){
                /* call the php that has the php array which is json_encoded */
                $.getJSON('testing.php', function(data) {

          //  console.log(data);
 
            for(i=0;i<data.length;i++)
{      
        
           result.push(parseInt(data[i].Points));
          main_result.push(data[i].HostelName);
            }
            console.log(result);

var xScale = d3.scale.linear()
               .domain([0, d3.max(result)])
               .range([0, 600]);
var x = d3.scale.ordinal()
    .domain([main_result])
    .rangeRoundBands([0, 50], .1);


x.domain(result.map(function(d) { return d.name; }));



 var y = d3.scale.linear()
  .range([600, 0]);


y.domain([0, d3.max(result)]);





var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .ticks(10);         
      

   var svg = d3.select("body").append("svg")
                     .attr("class","svg") 
                     .attr("width",1500)
                     .attr("height",1500)
                     .append("g")
                     .attr("transform","translate(40,10)")
                     ;
            





     var chart=svg.selectAll("rect")
                  .data(result)
                  .enter()
                  .append("rect")
                  .attr("class","cell")
                  .attr("x",function(d,i){return i*barHeight;})
                  .attr("y",function(d){ return 600-xScale(d);})
                  .attr("width", barHeight-5)
                  .attr("height",function(d){return xScale(d)})
                  .on("mouseover", function() {
    d3.select(this).classed("highlight", true);})

.on("mouseout", function() {
    d3.select(this).classed("highlight", false)});


svg.append("g")
   .call(yAxis)
   ;


svg.append("text")
      .attr("x", x.rangeBand() / 2)
      .attr("y", function(d) { return y(d.value) + 3; })
      .attr("dy", ".75em")
      .text(function(d) { return d.value; });





            });
            


    //        });


}



function pie(){

  $('.svg').remove();


result=[]

     //    $(document).ready(function(){
                /* call the php that has the php array which is json_encoded */
                $.getJSON('testing.php', function(data) {

          //  console.log(data);
 
            for(i=0;i<data.length;i++)
{      
        
           result.push(parseInt(data[i].Points));

            }
            console.log(result);
          


var r=300;




var canvas=d3.select("body").append("svg")
             .attr("class","svg")
             .attr("width",1500)
             .attr("height",1500);


      var color=d3.scale.ordinal()
                .range(["red","blue","orange","cyan","pink","green","violet","orange","red","grey","silver","lime","#547D2A","purple","olive","maroon","#E5E4E2","#2B547E","#462A7D","#7D2A7D","#8C70C3"]); 

      var group =canvas.append("g")
                 .attr("transform","translate(300,300)");
       var arc=d3.svg.arc()
                  .innerRadius(200)
                  .outerRadius(r)

       var pie=d3.layout.pie()
               .value(function(d){return d});





       var arcs=group.selectAll(".arc")
                .data(pie(result))
                .enter()
                .append("g")
                .attr("class","arc");
                console.log(result);
                console.log(pie(result));

   arcs.append("path")
       .attr("d",arc)
       .attr("fill",function(d){return color(d.data);});


    arcs.append("text")
        .attr("transform",function (d){return "translate("+arc.centroid(d)+")";})
       .attr("text-anchor","middle")
       .text(function (d) {return d.data ;} ); 






























          });


































}

</script>


<p class="input" >
<input type="radio" name="option" class="input"  value="male" onclick="bar();">Bar Graph
<input type="radio" name="option" class="input" value="female" onclick="pie();">Pie 
</p>
</body>
</html>



