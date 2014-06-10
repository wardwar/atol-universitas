
	window.onload = function () {
		// initial values of dataPoints
		var dps = [
		{label: "Staff Keamanan", y: 125},
		{label: "Ayam Kampus", y: 332},
		{label: "Pencabul", y: 55},
		{label: "Staff Pelacur", y: 46},
		{label: "Pembuat Video", y: 32}
		];
		var totalEmployees = "Jumlah Karyawan UNIBO : 590";

		var chart = new CanvasJS.Chart("chartContainer",{
			theme: "theme2",
			title:{ 
				text: "Karyawan Universitas Bool"
			},
			axisY: {				
				title: "Angka Karyawan",
			},					
			legend:{
				verticalAlign: "top",
				horizontalAlign: "centre",
				fontSize: 18

			},
			data : [{
				type: "column",
				showInLegend: true,
				legendMarkerType: "none",				
				legendText: totalEmployees,
				indexLabel: "{y}",
				dataPoints: dps
			}]
		});

		// renders initial chart
		chart.render();

		}	