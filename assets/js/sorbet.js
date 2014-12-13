$(document).ready(function(){

	if($('#trim').length > 0)
	{
		$.getJSON(config.base + 'ajax/getTrimSession', function(data) {
			$.each(data, function(key, value){
				console.log(value);
				$('#trim').append('<option value='+value['seriesId']+'>'+value['series']+'</option>');
			});

		});
	}


});

$('#validatetoppings').click(function(){
	// validate
	validateOkay = true;
	$.getJSON(config.base + 'ajax/getTrim?y='+$('#year').val()+'&a='+$('#make').val()+'&o='+$('#model').val(), function(data) {
		$.each(data, function(key, val){
			console.log(val);
			$.each(val, function(seriesId, series){
				if(series == "error")
				{
					alert(series);
					validateOkay = false;
				}
			});

		});

	});

	if(validateOkay)
		$('#detailsForm').submit();


});

$('#trim').change(function() {

	$('#style').html('');
	$.getJSON(config.base + 'ajax/getStyle?t=' + $('#trim').val(), function(data) {
		$.each(data, function(key, value){
			console.log(value);
			$('#style').append('<option value='+value['bodyStyleId']+'>'+value['bodyStyle']+'</option>');
		});

	});

});


function calcvalue() {
var mileage = Number(0);
//var province = Number(0);
//Allow for only one submodel selection: 0 = multiple selections
var countsubmod = 7;
//adds vars
var po1 = 0; var po2 = 0; var po3 = 0; var po4 = 0; var po5 = 0; var po6 = 0;
var po7 = 0; var po8 = 0; var po9 = 0; var po10 = 0; var po11 = 0; var po12 = 0;
var po13 = 0; var po14 = 0;
var po1; if (document.pricing.opt1.checked == true) po1 = Number(document.pricing.opt1.value); else {po1 = 0};
var po2; if (document.pricing.opt2.checked == true) po2 = Number(document.pricing.opt2.value); else {po2 = 0};
var po3; if (document.pricing.opt3.checked == true) po3 = Number(document.pricing.opt3.value); else {po3 = 0};
var po4; if (document.pricing.opt4.checked == true) po4 = Number(document.pricing.opt4.value); else {po4 = 0};
var po5; if (document.pricing.opt5.checked == true) po5 = Number(document.pricing.opt5.value); else {po5 = 0};
var po6; if (document.pricing.opt6.checked == true) po6 = Number(document.pricing.opt6.value); else {po6 = 0};
//deds vars
var pd1 = 0; var pd2 = 0; var pd3 = 0; var pd4 = 0;
var pd1; if (document.pricing.ded1.checked == true) pd1 = Number(document.pricing.ded1.value); else {pd1 = 0};
//truck vars
var tt1 = 0; var tt2 = 0; var tt3 = 0; var tt4 = 0; var tt5 = 0; var tt6 = 0; var tt7 = 0; var tt8 = 0;
var tt10 = 0; var tt11 = 0; var tt13 = 0; var tt14 = 0; var tt16 = 0;
var tt18 = 0; var tt19 = 0; var tt20 = 0; var tt23 = 0; var tt24 = 0;
//get selected radio value
var cardata;
if (document.pricing.submodel_prices[0].checked==true) cardata = (document.pricing.submodel_prices[0].value);
else { if (document.pricing.submodel_prices[1].checked==true) cardata = (document.pricing.submodel_prices[1].value);
else { if (document.pricing.submodel_prices[2].checked==true) cardata = (document.pricing.submodel_prices[2].value);
else { if (document.pricing.submodel_prices[3].checked==true) cardata = (document.pricing.submodel_prices[3].value);
else { if (document.pricing.submodel_prices[4].checked==true) cardata = (document.pricing.submodel_prices[4].value);
else { if (document.pricing.submodel_prices[5].checked==true) cardata = (document.pricing.submodel_prices[5].value);
else { if (document.pricing.submodel_prices[6].checked==true) cardata = (document.pricing.submodel_prices[6].value);
else { if (document.pricing.submodel_prices[7].checked==true) cardata = (document.pricing.submodel_prices[7].value);
else { if (document.pricing.submodel_prices[8].checked==true) cardata = (document.pricing.submodel_prices[8].value);
else { if (document.pricing.submodel_prices[9].checked==true) cardata = (document.pricing.submodel_prices[9].value);
else { if (document.pricing.submodel_prices[10].checked==true) cardata = (document.pricing.submodel_prices[10].value);
else { if (document.pricing.submodel_prices[11].checked==true) cardata = (document.pricing.submodel_prices[11].value);
else { if (document.pricing.submodel_prices[12].checked==true) cardata = (document.pricing.submodel_prices[12].value);
else { if (document.pricing.submodel_prices[13].checked==true) cardata = (document.pricing.submodel_prices[13].value);
else { if (document.pricing.submodel_prices[14].checked==true) cardata = (document.pricing.submodel_prices[14].value);
else { if (document.pricing.submodel_prices[15].checked==true) cardata = (document.pricing.submodel_prices[15].value);
else { if (document.pricing.submodel_prices[16].checked==true) cardata = (document.pricing.submodel_prices[16].value);
else { if (document.pricing.submodel_prices[17].checked==true) cardata = (document.pricing.submodel_prices[17].value);
else { if (document.pricing.submodel_prices[18].checked==true) cardata = (document.pricing.submodel_prices[18].value);
else { if (document.pricing.submodel_prices[19].checked==true) cardata = (document.pricing.submodel_prices[19].value);
else { if (document.pricing.submodel_prices[20].checked==true) cardata = (document.pricing.submodel_prices[20].value);
else { if (document.pricing.submodel_prices[21].checked==true) cardata = (document.pricing.submodel_prices[21].value);
else { if (document.pricing.submodel_prices[22].checked==true) cardata = (document.pricing.submodel_prices[22].value);
else { if (document.pricing.submodel_prices[23].checked==true) cardata = (document.pricing.submodel_prices[23].value);
else { if (document.pricing.submodel_prices[24].checked==true) cardata = (document.pricing.submodel_prices[24].value);
else { if (document.pricing.submodel_prices[25].checked==true) cardata = (document.pricing.submodel_prices[25].value);
else { if (document.pricing.submodel_prices[26].checked==true) cardata = (document.pricing.submodel_prices[26].value);
else { if (document.pricing.submodel_prices[27].checked==true) cardata = (document.pricing.submodel_prices[27].value);
else { if (document.pricing.submodel_prices[28].checked==true) cardata = (document.pricing.submodel_prices[28].value);
else { alert("You must select a model!");return;
}}}}}}}}}}}}}}}}}}}}}}}}}}}}}
//Parse car data
var parse_cardata = cardata.split("|");
var submodel = parse_cardata[0];
var wholesale = Number(parse_cardata[1]);
var retail = Number(parse_cardata[2]);
//calculate mileage adjustment
//model year var
var mdlyr = 2012
var yrval = 2014 - mdlyr;
//determine mileage group modifier
var groupval;
if (document.pricing.wholesale < 15000) groupval = .012;
else {if (document.pricing.wholesale > 30000) groupval = .021;
else { groupval = .018;
}}
//normal mileage for year
var normkm = (((yrval+1)*.8) * 22000);
var milevalue = (document.pricing.mileage.value);
//max and min mileage adjustments and mileage calculation
var maxmin = (.75 * wholesale);
var mileageadj = (normkm - (milevalue))*(groupval)*(1.1-(yrval/100));
var addorded4mi = (mileageadj/Math.abs(mileageadj));
var mileagerange = (normkm - milevalue);
if (Math.abs(mileageadj) > maxmin) mileageadj = (maxmin * addorded4mi); else {mileageadj = mileageadj}
if (mileagerange < 5000 && mileagerange > -5000) mileageadj = 0; else {(mileageadj = mileageadj)}
//add all vars to get final ws and retail
var calcws = wholesale+po1+po2+po3+po4+po5+po6+po7+po8+po9+po10+po11+po12+po13+po14-pd1-pd2-pd3-pd4+tt1+tt2+tt3+tt4+tt5+tt6+tt7+tt8+tt10+tt11+tt13+tt14+tt16+tt18+tt19+tt20+tt23+tt24+mileageadj;
var calcret = retail+po1+po2+po3+po4+po5+po6+po7+po8+po9+po10+po11+po12+po13+po14-pd1-pd2-pd3-pd4+tt1+tt2+tt3+tt4+tt5+tt6+tt7+tt8+tt10+tt11+tt13+tt14+tt16+tt18+tt19+tt20+tt23+tt24+mileageadj;
//display calculated values
if (isNaN(calcws) == true) calcws = 0; else {document.pricing.ws.value = Math.round(calcws/25)*25}
if (isNaN(calcret) == true) calcret = 0; else {document.pricing.retail.value = Math.round(calcret/25)*25}
}