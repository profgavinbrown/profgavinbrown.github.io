/*
filedrag.js - HTML5 File Drag & Drop demonstration
Featured on SitePoint.com
Developed by Craig Buckler (@craigbuckler) of OptimalWorks.net

Modified to calculate feature selection stability - by Gavin Brown, University of Manchester.

*/
(function() {

	var Z1, Z2;
		
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
				
					lines[0] = lines[0].replace(/\, /g,""); //strip commas, spaces, and tabs
					var featureList = lines[0].split("");   //split char by char

					M = lines.length;
					d = featureList.length;
				
					var Z = new Array(); //full binary matrix
				
					var pf = new Array(); //the mean of each column
					for (var f=0; f<d; f++) { pf[f] = 0; }
					
					var k = new Array(); //the sum of each row
	
					for (var i=0; i<lines.length; i++) {
						k[i] = 0;
						Z[i] = new Array();			
								
						lines[i] = lines[i].replace(/\, /g,""); //strip commas and spaces and tabs
						
						featureList = lines[i].split("");					
						for (var f=0; f<d; f++) {
						
							Z[i][f] = Number(featureList[f]);
							
							pf[f] = pf[f] + (Z[i][f] / M);
							
							k[i] = k[i] + Z[i][f];
						}
					}
					
					var kbar = 0, averagePFInnerProduct = 0;
					for (var f=0; f<d; f++) {
						kbar = kbar + pf[f];
						averagePFInnerProduct = averagePFInnerProduct + (1/d) * pf[f]*(1-pf[f]);
					}
					
					var numerator = (M/(M-1)) * averagePFInnerProduct;
					var denominator = (kbar/d) * (1 - (kbar/d));
	
					var stab = 1 - numerator/denominator;
					
	
					txt = "<i><b>M</i> = "+M.toString()+"</b> runs of selecting from <i><b>d</i> = "+d.toString()+"</b> features.<br><br>";
					txt = txt.concat("On average you selected <i><b>k</i> = "+kbar.toString()+"</b> features.<br><br>");
	
					txt = txt.concat("Your estimated stabilty, with a 95% confidence interval, is...<br><br>");
	
					txt = txt.concat("<b><font>Stability</b>&nbsp;&nbsp;<img width=12px src=\"./phi.png\" border=0>&nbsp;&nbsp; = "+stab.toString()+"");
					
					
					var pi1 = kbar/d;
					var pe = 1 - 2*pi1 * (1-pi1);
					var pa = 1-2*(M/(M-1))*averagePFInnerProduct;
					var stability = (pa-pe)/(1-pe);
	
					//Output("leftmessages", stability.toString()+"<br>"+stab.toString());
	
					// now we get the variance of raters
					var pai = new Array();
					var pei = new Array();
					var gammai = new Array();
					
					var gamma_av = 0;
					for (var i=0; i<M; i++) {
						sumpf = 0;
						for (var f=0; f<d; f++) {
							sumpf = sumpf + Z[i][f] * pf[f];
						}
						
						pai[i] = 1 - k[i]/d - pi1 + (2/d) * sumpf;
						
						pei[i] = (1-stability)*(pi1*(k[i]/d)+(1-pi1)*(1-(k[i]/d)));
						
						gammai[i] = ( pai[i] - pei[i] ) / (1-pe);
						gamma_av = gamma_av + ( gammai[i] / M );
					}
					
					var variance = 0;
					for (var i=0; i<M; i++) {
						variance = variance + Math.pow( gammai[i]-gamma_av, 2 );
					}
					variance = (4/M) * (1/M) * variance;			
					
					var confint = 1.959963984540054*Math.sqrt(variance);
					
					txt = txt.concat("&nbsp;&nbsp;&plusmn;&nbsp;"+confint.toString()+"</font><br>");
					// for (var f=0; f<d; f++) txt = txt.concat( "pf["+f+"] = "+pf[f].toFixed(5) + "<br>" );
	
	
					Output(channel, "<blockquote>"+txt+"</blockquote>");

					if (channel === "leftmessages") {
						Z1 = Z;
						$id("leftfiledrag").innerHTML = file.name;
					}
					else {
						Z2 = Z;
						$id("rightfiledrag").innerHTML = file.name;
					}
					
					if (Z1.length==Z2.length && Z1[0].length==Z2[0].length ) {
						var m = $id("globalmsg");
						m.style.background="lightgreen";
						m.innerHTML = "<center>As soon as I get around to implementing a hypothesis test, it will appear here.</center>";
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
