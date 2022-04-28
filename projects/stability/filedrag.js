/*
filedrag.js - HTML5 File Drag & Drop demonstration
Featured on SitePoint.com
Developed by Craig Buckler (@craigbuckler) of OptimalWorks.net

Modified to calculate feature selection stability - by Gavin Brown, University of Manchester.

*/
(function() {

	var Z1, Z2;
	var stability1, stability2;
	var variance1, variance2;
		
	// getElementById
	function $id(id) { return document.getElementById(id); }
	// output information
	function Output(channel, msg) { var m = $id(channel); m.innerHTML = msg; }
	
	// file drag hover
	function FileDragHover(e) {
		e.stopPropagation();
		e.preventDefault();
		e.target.className = (e.type == "dragover" ? "hover" : "");
	}

	// file selection
	function LeftHandler(e) {
		FileDragHover(e); 							// cancel event and hover styling
		var files = e.target.files || e.dataTransfer.files; 		// fetch FileList object
		for (var i = 0, f; f = files[i]; i++) {
			ParseFile(f,"leftmessages");					// process all File objects
		}
	}
	
	function RightHandler(e) {
		FileDragHover(e); 							// cancel event and hover styling
		var files = e.target.files || e.dataTransfer.files; 		// fetch FileList object
		for (var i = 0, f; f = files[i]; i++) {
			ParseFile(f,"rightmessages");					// process all File objects
		}
	}
	


	// deal with the file just uploaded
	function ParseFile(file, channel) {
				
		if (file.type.indexOf("text") == 0) {
			
			var reader = new FileReader();

			reader.onload = (function(f, channel) {
					return function(e) {

					var text = reader.result;
					var lines = text.split("\n");
				
					//THE NEXT BIT IS A CLEVER THING I FOUND ONLINE TO REMOVE BLANK LINES
					lines = lines.filter(function(entry) { return /\S/.test(entry); });
				
					lines[0] = lines[0].replace(/,/g,""); //strip commas
					lines[0] = lines[0].replace(/\s+/g,""); //strip tabs and spaces
					var featureList = lines[0].split("");   //split char by char

					M = lines.length;
					d = featureList.length;
				
					var Z = new Array(); //full binary matrix
					var pf = new Array(); //the mean of each column
					for (var f=0; f<d; f++) { pf[f] = 0; }
					
					var k = new Array(); //the sum of each row
					var kbar = 0; // average of k
					for (var i=0; i<lines.length; i++) {
						k[i] = 0;
						Z[i] = new Array();			
								
						lines[i] = lines[i].replace(/,/g,""); //strip commas
						lines[i] = lines[i].replace(/\s+/g,""); //strip tabs and spaces
						
						featureList = lines[i].split("");					
						for (var f=0; f<d; f++) {
							Z[i][f] = Number(featureList[f]);	

							pf[f] = pf[f] + (Z[i][f] / M);
							k[i] = k[i] + Z[i][f];
						}
						kbar = kbar + k[i];
					}
					kbar = kbar/M;
					
					var sumPFInnerProduct = 0;
					for (var f=0; f<d; f++) {
						sumPFInnerProduct = sumPFInnerProduct + pf[f]*(1-pf[f]);
					}
					
					var sampleVariance = (M/(M-1)) * 1/d * sumPFInnerProduct;
					var expectedSampleVariance = (kbar/d) * (1 - (kbar/d));
	
					var stab = 1 - (sampleVariance / expectedSampleVariance);



					
					var variance = 0;

					/* XXXXXXXXXXXX */
					/* XXXXXXXXXXXX */
					/* XXXXXXXXXXXX */
					
					var phisubi = new Array();
					var meanphisubi = 0;
					for (var i=0; i<M; i++) {
						var tmp = 0;
						for  (var f=0; f<d; f++) {
							tmp = tmp + 1/d * Z[i][f]*pf[f];
						}
						
						tmp = tmp - (k[i]*kbar)/(d*d) + (stab/2) * ( 2*(k[i]*kbar)/(d*d) - k[i]/d - kbar/d + 1 );
						phisubi[i] = tmp / ( (kbar/d) * (1 - (kbar/d)) );
						meanphisubi = meanphisubi + phisubi[i];
					}
					meanphisubi = meanphisubi / M;
					
					for (var i=0; i<M; i++) {
						variance = variance + (phisubi[i] - meanphisubi)*(phisubi[i] - meanphisubi);
					}
					variance = 4/(M*M) * variance;
					
					
					/* XXXXXXXXXXXX */
					/* XXXXXXXXXXXX */
					/* XXXXXXXXXXXX */
					/*
					pai = new Array();
					pei = new Array();
					var phisubi = new Array();
					var meanphisubi = 0;
					pe=1-2*((kbar/d)*(1-kbar/d));
					for (var i=0; i<M; i++) {
						var tmp=0;
						for  (var f=0; f<d; f++) {
							tmp = tmp + Z[i][f]*pf[f];
						}
						pai[i] = 1 - k[i]/d - kbar/d + (2 / d)*tmp;
						pei[i] =  (1-stab) * ( kbar/d * (k[i]/d) + ( 1 - kbar/d ) * ( 1 - k[i]/d ) );
						phisubi[i] = (pai[i]-pei[i]) / (1-pe);
						meanphisubi = meanphisubi + phisubi[i];
					}
					meanphisubi = meanphisubi / M;
					for (var i=0; i<M; i++) {
						variance = variance + (phisubi[i] - meanphisubi)*(phisubi[i] - meanphisubi);
					}
					variance = 4/(M*M) * variance;
					*/
					
						
					var confint = 1.959963984540054*Math.sqrt(variance);

					txt = "<i><b>M</i> = "+M.toString()+"</b> runs of selecting from <i><b>d</i> = "+d.toString()+"</b> features.<br><br>";
					txt = txt.concat("On average you selected <i><b>k</i> = "+kbar.toString()+"</b> features.<br><br>");
					txt = txt.concat("Your estimated stabilty, with a 95% confidence interval, is...<br><br>");
					txt = txt.concat("<b><font>Stability</b>&nbsp;&nbsp;");
					txt = txt.concat("<img width=12px src=\"./images/phi.png\" border=0>&nbsp;&nbsp; = "+stab.toString()+"");
					txt = txt.concat("&nbsp;&nbsp;&plusmn;&nbsp;"+confint.toString()+"</font><br>");

					//txt = txt.concat("<br>Variance is "+variance.toString()+"<br><br><br>");
					
					var stab0 = 0.0; var Vm = (stab - stab0) / Math.sqrt(variance);
					if (Vm < 1.644853626951472)
							txt = txt.concat("<br>The null hypothesis, that stability is zero, cannot be rejected.  This appears to be a purely random process.");
			
					if (Vm > 1.644853626951472)
							txt = txt.concat("<br>True stability is greater than "+stab0.toString()+" with 95% confidence.");

					var stab0 = 0.4; var Vm = (stab - stab0) / Math.sqrt(variance);
					if (Vm > 1.644853626951472)
							txt = txt.concat("<br>True stability is greater than "+stab0.toString()+" with 95% confidence.");

					var stab0 = 0.75; var Vm = (stab - stab0) / Math.sqrt(variance);
					if (Vm > 1.644853626951472)
							txt = txt.concat("<br>True stability is greater than "+stab0.toString()+" with 95% confidence.");


					//for (var f=0; f<d; f++) txt = txt.concat( "pf["+f+"] = "+pf[f].toFixed(5) + "<br>" );
	
					Output(channel, "<blockquote>"+txt+"</blockquote>");

					if (channel === "leftmessages") {
						Z1 = Z;
						stability1 = stab;
						variance1 = variance;
						$id("leftfiledrag").innerHTML = file.name;
					}
					else {
						Z2 = Z;
						stability2 = stab;
						variance2 = variance;
						$id("rightfiledrag").innerHTML = file.name;
					}
					
					if (Z1.length==Z2.length && Z1[0].length==Z2[0].length ) {
						var m = $id("globalmsg");
						m.style.background="lightgreen";
						// m.innerHTML = "<center>As soon as I get around to implementing a test to compare these, it will appear here.</center>";

						var Tm = (stability2 - stability1) / Math.sqrt( variance1+variance2 );
						if (Math.abs(Tm) > 1.959963984540054) {
							m.innerHTML = "<center>The null hypothesis, of the true stabilities being equal, is rejected at alpha=0.05.</center>";
							p = 2*(1-GetZPercent(Math.abs(Tm)));
							m.innerHTML = m.innerHTML + "<br><center>p-value is "+p.toString()+"</center>";
						}
						else {
							m.innerHTML = "<center>The null hypothesis of equality cannot be rejected (alpha=0.05).  These <b>may</b> have the same true stability.</center>";
							p = 2*(1-GetZPercent(Math.abs(Tm)));
							m.innerHTML = m.innerHTML + "<br><center>p-value is "+p.toString()+"</center>";
						}
					}
					else {
						var m = $id("globalmsg");
						m.style.background="#F08080";
						m.innerHTML = "<center>Files are of different sizes - cannot compare them.</center>";
					}



					};
			})(file, channel);
			
			
			reader.readAsText(file);

		} //endif

	} //endfunction


function GetZPercent(z) 
  {
    //z == number of standard deviations from the mean

    //if z is greater than 6.5 standard deviations from the mean
    //the number of significant digits will be outside of a reasonable 
    //range
    if ( z < -6.5)
      return 0.0;
    if( z > 6.5) 
      return 1.0;

    var factK = 1;
    var sum = 0;
    var term = 1;
    var k = 0;
    var loopStop = Math.exp(-23);
    while(Math.abs(term) > loopStop) 
    {
      term = .3989422804 * Math.pow(-1,k) * Math.pow(z,k) / (2 * k + 1) / Math.pow(2,k) * Math.pow(z,k+1) / factK;
      sum += term;
      k++;
      factK *= k;
    }
    sum += 0.5;

    return sum;
  }

	// initialize
	function Init() {

		var fileselect = $id("fileselect"), leftfiledrag = $id("leftfiledrag");
		var fileselect2 = $id("fileselect2"), rightfiledrag = $id("rightfiledrag");
		
		// file select
		fileselect.addEventListener("change", LeftHandler, false);
		fileselect2.addEventListener("change", RightHandler, false);

		// is XHR2 available?
		var xhr = new XMLHttpRequest();
		if (xhr.upload) {

			// file drop
			leftfiledrag.addEventListener("dragover", FileDragHover, false);
			leftfiledrag.addEventListener("dragleave", FileDragHover, false);
			leftfiledrag.addEventListener("drop", LeftHandler, false);
			leftfiledrag.style.display = "block";
			
			// file drop 2
			rightfiledrag.addEventListener("dragover", FileDragHover, false);
			rightfiledrag.addEventListener("dragleave", FileDragHover, false);
			rightfiledrag.addEventListener("drop", RightHandler, false);
			rightfiledrag.style.display = "block";

		} //endif

	} //endfunction

	// call initialization file
	if (window.File && window.FileList && window.FileReader) {
		Init();
	}


})();
