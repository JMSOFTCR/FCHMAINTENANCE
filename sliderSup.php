
      <style>
     @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
/*================================================*/
@import url('https://fonts.googleapis.com/css?family=Roboto');
.carousel-item > div {
  float: left;
}
.carousel-by-item [class*="cloneditem-"] {
  display: none;
}
      </style>
<div class="container">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l1.jpg" alt=""/></a>
                                </div>    
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l2.jpg" alt=""/></a>    
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l3.jpg" alt=""/></a>    
                                </div>    
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l4.jpg" alt=""/></a>    
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l5.jpg" alt=""/></a>    
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l6.jpg" alt=""/></a>    
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l1.jpg" alt=""/></a>
                                </div>    
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l2.jpg" alt=""/></a>    
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l3.jpg" alt=""/></a>    
                                </div>    
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l4.jpg" alt=""/></a>    
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l5.jpg" alt=""/></a>    
                                </div>
                                <div class="col-md-2 col-sm-6 col-12">
                                    <a href="#"><img src="img/l6.jpg" alt=""/></a>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>    
        </div>


      <script>
          
          function GetUnique(e){var l=[],s=temp_c=[],t=["col-md-1","col-md-2","col-md-3","col-md-4","col-md-6","col-md-12","col-sm-1","col-sm-2","col-sm-3","col-sm-4","col-sm-6","col-sm-12","col-lg-1","col-lg-2","col-lg-3","col-lg-4","col-lg-6","col-lg-12","col-xs-1","col-xs-2","col-xs-3","col-xs-4","col-xs-6","col-xs-12","col-xl-1","col-xl-2","col-xl-3","col-xl-4","col-xl-6","col-xl-12"];$(e).each(function(){for(var l=$(e+" > div").attr("class").split(/\s+/),t=0;t<l.length;t++)s.push(l[t])});for(var c=0;c<s.length;c++)temp_c=s[c].split("-"),2==temp_c.length&&(temp_c.push(""),temp_c[2]=temp_c[1],temp_c[1]="xs",s[c]=temp_c.join("-")),-1==$.inArray(s[c],l)&&$.inArray(s[c],t)&&l.push(s[c]);return l}function setcss(e,l,s){for(var t=["","","","","",""],c=d=f=g=0,r=[1200,992,768,567,0],a="",o=[],a=0;a<e.length;a++){var i=e[a].split("-");if(3==i.length){switch(i[1]){case"xl":d=0;break;case"lg":d=1;break;case"md":d=2;break;case"sm":d=3;break;case"xs":d=4}t[d]=i[2]}}for(var n=0;n<t.length;n++)if(""!=t[n]){if(0==c&&(c=12/t[n]),f=12/t[n],g=100/f,a=s+" > .carousel-item.active.carousel-item-right,"+s+" > .carousel-item.carousel-item-next {-webkit-transform: translate3d("+g+"%, 0, 0);transform: translate3d("+g+", 0, 0);left: 0;}"+s+" > .carousel-item.active.carousel-item-left,"+s+" > .carousel-item.carousel-item-prev {-webkit-transform: translate3d(-"+g+"%, 0, 0);transform: translate3d(-"+g+"%, 0, 0);left: 0;}"+s+" > .carousel-item.carousel-item-left, "+s+" > .carousel-item.carousel-item-prev.carousel-item-right, "+s+" > .carousel-item.active {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);left: 0;}",f>1){for(k=0;k<f-1;k++)o.push(l+" .cloneditem-"+k);o.length&&(a=a+o.join(",")+"{display: block;}"),o=[]}0!=r[n]&&(a="@media all and (min-width: "+r[n]+"px) and (transform-3d), all and (min-width:"+r[n]+"px) and (-webkit-transform-3d) {"+a+"}"),$("#slider-css").prepend(a)}$(l).each(function(){for(var e=$(this),l=0;l<c-1;l++)(e=e.next()).length||(e=$(this).siblings(":first")),e.children(":first-child").clone().addClass("cloneditem-"+l).appendTo($(this))})}

//Use Different Slider IDs for multiple slider
$(document).ready(function() {
    var item = '#slider-1 .carousel-item';
    var item_inner = "#slider-1 .carousel-inner";
    classes = GetUnique(item);
    setcss(classes, item, item_inner);
    
    
    var item_1 = '#slider-2 .carousel-item';
    var item_inner_1 = "#slider-2 .carousel-inner";
    classes = GetUnique(item_1);
    setcss(classes, item_1, item_inner_1);
});
          
      </script>
