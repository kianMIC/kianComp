						//Codigo del buscador interno
//para ejecutar
$('#icon-search').click(mostrarBuscador);
$("#cover-ctn-search").click(ocultarBuscador)
//declaramos variables
var bars_search = $("#ctn-bars-search");
var cover_ctn_search = $("#cover-ctn-search");
var inputSearch = $("#inputSearch");
var box_search = $("#box-search");

//funcion para que se muestre el buscador

function mostrarBuscador(){
	bars_search.css("top", "50px");
	cover_ctn_search.css("display", "block");
	inputSearch.focus();
	box_search.css("display", "none")

}

function ocultarBuscador(){
	bars_search.css("top", "-15px");
	cover_ctn_search.css("display", "none");
	inputSearch.val("")
	box_search.css("display", "none")

}

//funcion para que funcione el buscador

$(inputSearch).keyup(buscadorInterno);

function buscadorInterno(){
	var filtro = inputSearch.val().toUpperCase();
	var li = $("#box-search li");

	// RECORRE LOS ELEMTOS QUE FILTRAMOS EN LOS li
	for (i= 0; i<li.length; i++){
		var a = li[i].getElementsByTagName("a")[0];
		textValue = a.textContent || a.innerText;
		if(textValue.toUpperCase().indexOf(filtro) > -1){

			$("#box-search").css("display",  "block")
			$(li[i]).css("display", "block");
			if(inputSearch.value === ""){
				box_search.css("display", "none");
			}

		}else{
			$(li[i]).css("display", "none")
		}

	} 
}

//para llamar a los plugins
$(window).on("load",function(){
	$('#slider').nivoSlider();
});



// para el AJAX de los Blogs
