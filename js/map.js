createmapmarker = function(element){
    var mapObj = new AMap.Map(element,{
        resizeEnable:true,
        zoom:11,
        center:[120.143261,30.258725]
        });
    var marker = new AMap.Marker({
        position:[120.143261,30.258725],
        title:"杭州市香格里拉饭店",
        map:mapObj}
    )
}