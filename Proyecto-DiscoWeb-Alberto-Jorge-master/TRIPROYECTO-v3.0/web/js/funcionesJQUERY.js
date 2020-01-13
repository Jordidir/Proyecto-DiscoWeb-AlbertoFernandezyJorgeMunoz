function apagaLuces(){
	var sel;
	
	sel=$("#content");
	sel.css("background-color", "#2c2c3c");
	sel.css("border-color", "#16161f")
	
	sel=$("#darseAlta");
	sel.css("color", "white");
	
	sel=$("#registro");
	sel.css("color", "white");
	sel.css("background-color", "#2c2c3c");
	
	sel=$("#header");
	sel.css("background-color", "#16161f");
	
	sel=$("#piePagina");
	sel.css("background-color", "#16161f");
	
	sel=$("body");
	sel.css("background-color", "#16161f");

	sel=$("label");
	sel.css("color", "white");
}

var sel;
sel=$(document);
sel.ready(inicializarEventos);

function inicializarEventos(){

	/*incolors*/
	var sel;
	sel=$(".celda");
	sel.mouseover(inColor1);

	var sel;
	sel=$(".celda:first-child");
	sel.mouseover(inColor2);

	var sel;
	sel=$("#tabla-archivos .celda:nth-child(5)");
	sel.mouseover(inColor3);

	var sel;
	sel=$("#tabla-archivos .celda:nth-child(6)");
	sel.mouseover(inColor4);

	var sel;
	sel=$("#tabla-archivos .celda:nth-child(7)");
	sel.mouseover(inColor5);

	var sel;
	sel=$("#tabla-usuarios .celda:nth-child(6)");
	sel.mouseover(inColor3);

	var sel;
	sel=$("#tabla-usuarios .celda:nth-child(7)");
	sel.mouseover(inColor4);

	var sel;
	sel=$("#tabla-usuarios .celda:nth-child(8)");
	sel.mouseover(inColor5);
	/*offcolors*/
	var sel;
	sel=$(".celda");
	sel.mouseout(offColorA);

	var sel;
	sel=$("#tabla-archivos .celda:nth-child(5)");
	sel.mouseout(offColorA);

	var sel;
	sel=$("#tabla-usuarios .celda:nth-child(6)");
	sel.mouseout(offColorA);

	var sel;
	sel=$("#tabla-archivos .celda:nth-child(6)");
	sel.mouseout(offColorA);

	var sel;
	sel=$("#tabla-usuarios .celda:nth-child(7)");
	sel.mouseout(offColorA);

	var sel;
	sel=$("#tabla-archivos .celda:nth-child(7)");
	sel.mouseout(offColorA);

	var sel;
	sel=$("#tabla-usuarios .celda:nth-child(8)");
	sel.mouseout(offColorA);

	var sel;
	sel=$(".celda:first-child");
	sel.mouseout(offColorB);
}

/*incolors functions*/
function inColor1(){
	$(this).css("background-color", "rgb(255, 243, 175)");
}
function inColor2(){
	$(this).css("background-color", "rgb(255, 183, 76)");
}
function inColor3(){
	$(this).css("background-color", "rgb(249, 94, 94)");
}
function inColor4(){
	$(this).css("background-color", "rgb(162, 242, 214)");
}
function inColor5(){
	$(this).css("background-color", "rgb(203, 237, 149)");
}
/*offcolors functions*/
function offColorA(){
	$(this).css("background-color", "#BED2EB");
}
function offColorB(){
	$(this).css("background-color", "#8CAABE");
}


