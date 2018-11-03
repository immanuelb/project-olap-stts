//[Dashboard Javascript]

//Project:	Lion Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';

  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder         : 'sort-highlight',
    connectWith         : '.connectedSortable',
    handle              : '.box-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex              : 999999
  });
  $('.connectedSortable .box-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move');

  // bootstrap WYSIHTML5 - text editor
  $('.textarea').wysihtml5();

	
	
  $('.daterange').daterangepicker({
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
  }, function (start, end) {
    window.alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  });
		

	
// Morris-chart
	
	 //Attendance BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '18/4/2018', a: 80, b: 95},
        {y: '19/4/2018', a: 85, b: 95},
        {y: '20/4/2018', a: 83, b: 86},
        {y: '21/4/2018', a: 77, b: 92},
        {y: '22/4/2018', a: 65, b: 100},
        {y: '23/4/2018', a: 100, b: 60},
		{y: '24/4/2018', a: 89, b: 90}
      ],
		barColors: ['#03a9f3', '#fb9678'],
		barSizeRatio: 0.5,
		barGap:5,
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Students', 'Employee'],
		hideHover: 'auto'
    });
	
	//-------------------------------------------------------------------------------
	// revenue CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        { y: '2014', a: 50,  b: 10 },
		{ y: '2015', a: 75,  b: 50 },
		{ y: '2016', a: 30,  b: 80 },
		{ y: '2017', a: 50,  b: 50 },
		{ y: '2018', a: 75,  b: 10 },
		{ y: '2019', a: 50,  b: 40 },
		{ y: '2020', a: 100, b: 70 }
      ],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Commercial Projects', 'Residential Projects'],
		fillOpacity: 0,
		lineWidth:1,
		lineColors: ['#03a9f3', '#00c292'],
		hideHover: 'auto'
    });
	
	
	//------------------------------------------------------------------------------
	
	var donut = new Morris.Donut({
      element: 'daily-inquery',
      resize: true,
      colors: ["#00c292", "#03a9f3", "#ab8ce4"],
      data: [
        {label: "On Site", value: 300},
        {label: "By eMail", value: 55},
        {label: "By Phone", value: 100}
      ],
      hideHover: 'auto'
    });
	
	

}); // End of use strict
