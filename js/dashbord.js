function getXHR() {
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        return new XMLHttpRequest();
    }
    else { // code for IE6, IE5
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
    }

		var totalresponse;
		var totaluniversity;
		var todayresponse;

		var arobj=[];

        var text=[];
        text[1]="How familiar are you with artificial intelligence?";
        text[2]="Have you ever taken the help of any AI tools for your studies? If yes, please mention the name of the tool used.";
        text[3]="Do you think artificial intelligence can improve the quality of your studies? ";
        text[4]="Have you heard about generative AI? ";
        text[5]="Do you believe AI technologies like ChatGPT can provide valuable support for your project/studies research?";
        text[6]="Do you think AI technologies like ChatGPT can help your career?";
        text[7]="Have you felt that AI can provide personalised learning experiences based on your learning styles, interests, and abilities?";
        text[8]="Do you think artificial intelligence can impact the management industry?";
        text[9]="Do you think that the existing business education needs to change with the concept of AI, both in terms of how and what is delivered in the classroom? ";
        text[10]="Do you think that an AI-integrated business school’s curriculum will prepare you for the evolving job market?";
        text[11]="Do you think artificial intelligence can help improve the efficiency and productivity of management professionals?";
        text[12]="Artificial intelligence can provide a more efficient way of managing projects. Do you agree?";
        text[13]="Do you think AI can replace MBA students? ";
        text[14]="Do you think that AI Skills are mandatory for next-generation jobs? ";
        text[15]="Do you think artificial intelligence is likely to have a negative influence on the future of management? ";
        text[16]="Would you be interested in specializing in AI as part of your MBA program?";
        text[17]="Do you think that AI and related technologies will lead to the displacement of current jobs and workers?";
        text[18]="AI-related roles will require workers with a strong skill set and orientation in areas such as ethics, leadership, emotional intelligence, and change management. Are you preparing yourselves for these skill sets?";
        text[19]="Is artificial intelligence posing a threat to management studies?";
        text[20]="Do you trust AI to make significant decisions about your future/career?";

		for (let index = 1; index < text.length; index++) {
			console.log
			$("#text_"+(index)).text( text[index]);
			
			
		}

        // select question_1 as name,count(question_1) as y from surveytb GROUP by question_1;
        $(document).ready(function() {
			
            var data;
            var count=0;
            var xmlhttp=[];
            for(var j=1;j<=20;j++){
            // xmlhttp[j] = new XMLHttpRequest();
            xmlhttp[j] = getXHR();
            xmlhttp[j].onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var ar = JSON.parse(this.responseText);
                   console.log(ar);  
                    count++;
                    var objects=ar;
                    // console.log(count+":"+text[count]);
                    // console.log(objects);
                    for(var i = 0; i < objects.length; i++){
                    var obj = objects[i];
                    for(var prop in obj){
                        if(obj.hasOwnProperty(prop) && obj[prop] !== null && !isNaN(obj[prop])){
                            obj[prop] = +obj[prop];   
                        }
                    }
                    }
                // console.log(count);
                Highcharts.chart('container'+ar[0].test,{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: null,
                align: 'left'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
			colors: [
'#4572A7', 
'#AA4643', 
'#89A54E', 
'#80699B', 
'#3D96AE', 
'#DB843D', 
'#92A8CD', 
'#A47D7C', 
'#B5CA92'
],
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                },
				column: {
        colorByPoint: true
    }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data:objects
            }]
        });
                }
            };
            xmlhttp[j].open("GET", "Backend/getdata?q=" + j+"&fun=chart", true);
            xmlhttp[j].send();
}
		scount=0;
		var srdata=[];
		var lbdata=[];
		for(var l=1;l<=5;l++){
		var xhttp = getXHR();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
			var ardata = JSON.parse(this.responseText);
			scount++;
			console.log(ardata);
			arobj.push(ardata)
			console.log(arobj);

			

			
		if(scount==5){

			totalresponse=parseInt(arobj[0][0].totalresponse);
			totaluniversity=parseInt(arobj[1][0].totaluniversity);
			todayresponse=parseInt(arobj[2][0].todayresponse);


			for(var p=0;p<arobj[4].length;p++){

				// console.log(arobj[4][p].uname);

				srdata.push(parseInt(arobj[4][p].y));
				lbdata.push(arobj[4][p].uname);

			}

		
			for(var x=1;x<=5;x++){

				document.getElementById("time_"+x).innerHTML = arobj[3][x-1].taim;
				document.getElementById("word_"+x).innerHTML = arobj[3][x-1].firstname+" responded from "+arobj[3][x-1].universityname;

			}
			console.log(srdata);
			console.log(lbdata);

		var options0 = {
        series: srdata,
        chart: {
          type: 'donut',
			width: '100%',
      		height: 240
        },
		colors:['#4572A7', 
				'#AA4643', 
				'#89A54E', 
				'#80699B', 
				'#3D96AE', 
				'#DB843D', 
				'#92A8CD', 
				'#A47D7C', 
				'#B5CA92'],
		labels: lbdata,
		legend: {
		  show: true,
		  position: 'bottom',
      	  horizontalAlign: 'center', 
		},
		dataLabels: {
			enabled: false,
		  },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
          }
        }]
      };

      var chart = new ApexCharts(document.querySelector("#sales_chart"), options0);
      chart.render();

		var options = {
          series: [totalresponse,0],
          chart: {
          type: 'donut',
			 height: 140,
			  width: 140,
        },
		legend: {
      		show: false,
		},
		dataLabels: {
			enabled: false,
		  },
		plotOptions: {
			pie: {
			  customScale: 0.90,
			  donut: {
				size: '80%',
				  labels: {
					show: true,
					total: {
					  showAlways: true,
					  show: true,
					}
				  }
			  },
			  offsetY: 0,
			},
			stroke: {
			  colors: undefined
			}
		  },
		colors:['#3596f7', '#cce5ff'],
        };
        var chart = new ApexCharts(document.querySelector("#chart_41"), options);
        chart.render();
		var options1 = {
          series: [totaluniversity,0],
          chart: {
          type: 'donut',
			 height: 140,
			  width: 140,
        },
		legend: {
      		show: false,
		},
		dataLabels: {
			enabled: false,
		  },
		plotOptions: {
			pie: {
			  customScale: 0.90,
			  donut: {
				size: '80%',
				  labels: {
					show: true,
					total: {
					  showAlways: true,
					  show: true,
					}
				  }
			  },
			  offsetY: 0,
			},
			stroke: {
			  colors: undefined
			}
		  },
		colors:['#3596f7', '#cce5ff'],
        };
        var chart = new ApexCharts(document.querySelector("#chart_42"), options1);
        chart.render();

		var options2 = {
          series: [todayresponse,0],
          chart: {
          type: 'donut',
			 height: 140,
			  width: 140,
        },
		legend: {
      		show: false,
		},
		dataLabels: {
			enabled: false,
		  },
		plotOptions: {
			pie: {
			  customScale: 0.90,
			  donut: {
				size: '80%',
				  labels: {
					show: true,
					total: {
					  showAlways: true,
					  show: true,
					}
				  }
			  },
			  offsetY: 0,
			},
			stroke: {
			  colors: undefined
			}
		  },
		colors:['#3596f7', '#cce5ff'],
        };
        var chart = new ApexCharts(document.querySelector("#chart_43"), options2);
        chart.render();
		
	}
		
    		}
  		};
				xhttp.open("GET", "Backend/getdata?q=" + l+"&fun=spcharts", true);
				xhttp.send();
				
        }
		
		
	});