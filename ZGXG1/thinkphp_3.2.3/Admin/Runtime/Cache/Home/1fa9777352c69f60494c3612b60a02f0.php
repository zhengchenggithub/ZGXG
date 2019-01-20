<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>朝过夕改网站后台管理</title>
		<link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
		<!--<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/admin/layui/css/layui.css"/>-->
		<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/css/admin.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/css/layui.css"/>
	</head>
	<body>
		<div class="wrap-container welcome-container">
			<div id="main" style="height:400px"></div>

		</div>
		<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/js/echarts.js"></script>
		<script type="text/javascript">
            var myChart = echarts.init(document.getElementById('main'));
            var option = {
                title: {
                    x: 'center',
                    text: '课程评分统计',
                    subtext: '数据来源于数据库',
                },
                tooltip: {
                    trigger: 'item'
                },
                toolbox: {
                    show: true,
                    feature: {
                        dataView: {show: true, readOnly: false},
                        saveAsImage: {show: true},

                    },

                },
                calculable: true,
                grid: {
                    borderWidth: 0,
                    y: 80,
                    y2: 60
                },
                xAxis: [
                    {
                        type: 'category',
                        show: false,
                        data: <?php echo ($arr); ?>
                    }
                ],
                yAxis: [
                    {
                        type: 'value',
                        show: true
                    }
                ],
                series: [
                    {
                        name: '课程统计分数',
                        type: 'bar',
                        itemStyle: {
                            normal: {
                                color: function(params) {
// build a color map as your need.
                                    var colorList = [
                                        '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                                        '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                                        '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                                    ];
                                    return colorList[params.dataIndex]
                                },
                                label: {
                                    show: true,
                                    position: 'top',
                                    formatter: '{b}\n{c}'
                                }
                            }
                        },
                        data: <?php echo ($arr1); ?>,
                    }
                ]
            };
            myChart.setOption(option);
		</script>

		<!--<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>-->
	<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/layui.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>