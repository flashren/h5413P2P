var myChart = echarts.init(document.getElementById('echartsMain'));

//指定图表的配置项和数据
var option = {
	//标题文字
	title: {
		text: '用户学历统计情况',
		subtext: '蓝源p2p平台',
		x: 'center'
	},
	//工具提示
	tooltip: {
		trigger: 'item',
		formatter: "{a} <br/>{b} : {c} ({d}%)"
	},
	//数据的分类
	legend: {
		orient: 'vertical',
		x: 'left',
		data: ['博士', '硕士', '本科', '大专', '高中/中专','初中','小学']
	},
	//定制工具箱
	toolbox: {
		show: true, //是否显示工具箱
		feature: {
			mark: {
				show: false
			},
			dataView: {
				show: false,
				readOnly: false
			},
			magicType: {
				show: false,
				type: ['pie', 'funnel'],
				option: {
					funnel: {
						x: '25%',
						width: '50%',
						funnelAlign: 'left',
						max: 1548
					}
				}
			},
			restore: {
				show: false
			},
			saveAsImage: {
				show: true
			}
		}
	},
	//重新计算
	calculable: true,
	//数据系列
	series: [{
		name: '访问来源',
		type: 'pie', //图表类型
		radius: '55%', //半径
		center: ['50%', '60%'], //位置
		
		//具体数据
		data: []
	}]
};

//使用刚指定的配置项和数据显示图表。
myChart.setOption(option);

//数据不能写死，只能从数据库中动态获取
$.get("api/getUserEdu.php",function (eduData) {
	console.log("后台获取的学历数据",eduData);
	
	//把后端提供的数据动态设置到配置对象中
	option.series[0].data=eduData;
	
	//使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
    
    //隐藏默认的loading动画
    myChart.hideLoading();
},"json");