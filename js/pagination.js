var show_per_page = 10;		/* afficher 3 images par page */
var current_page = 0;		/* indicateur de la page courante */

/* Affichage des images de la page */
function set_display(first, last) {
	$('#paginacion').children().css('display', 'none');
	$('#paginacion').children().slice(first, last).css('display', 'block');
}

/* Aller vers la page précédente */
function previous(){
	if ($('.active').prev('.page_link').length) go_to_page(current_page - 1);
}

/* Aller vers la page suivante */
function next(){
	if ($('.active').next('.page_link').length) go_to_page(current_page + 1);
}

/* Aller vers une certaine page */
function go_to_page(page_num) {
	current_page = page_num;
	start_from = current_page * show_per_page ;
	end_on = start_from + show_per_page ;
	set_display ( start_from , end_on );
	$('.active').removeClass('active');
	$('#id' + page_num).addClass('active');
}

$(document).ready(function() {
	/* Calcul du nombre de pages pour la pagination */

	/* $('#galerie') nous renvoie un objet jQuery qui contient les objets de la liste (de la galerie) c-à-d les images */
	/* $('#galerie').children() nous renvoie un tableau de ces images */
	/* $('#galerie').children().size() nous donne la taille de ce tableau c-à-d le nombre d'images */
	/* $('#galerie').children().size() / show_per_page , on divise le nombre total d'images par le nombre d'images par page */
	/* Math.ceil(...) fait l'arrondi vers le haut, par exemple si on a 7 images avec 3 images/page => 7/3=2.66 => arrondi = 3 */
	var number_of_pages = Math.ceil( $('#paginacion').children().size() / show_per_page );

	/* Construction de la barre de navigation de la pagination */
	/* on ouvre la liste qui contient la barre de navigation */
	var nav = '<ul class="pagination">';
	/* on place le premier lien qui permet de reculer dans la barre de navigation */
	/* on appelle la fonction previous() pour aller dans la page précédente */
			//nav += '<li><a href="javascript:previous();"><<</a></li>';
	nav += '<li><a href="javascript:previous();"><span class="glyphicon glyphicon-backward"></span> Précédent</a>';

	/* on affiche les numéros de toutes les pages de la pagination par une boucle */
	var i = -1;
	while(number_of_pages > ++i){
		nav += '<li class="page_link';
		if (!i) nav += ' active';	/* si on est dans la page active, on ajoute la classe "active" dans le <li> */
		nav += '" id="id' + i +'">';
		nav += '<a href="javascript:go_to_page(' + i +')">'+ (i+1) +'</a>';
		}

	/* on place le dernier lien qui permet d'avancer dans la barre de navigation */	
	/* on appelle la fonction next() pour aller dans la page suivante */
			//nav += '<li><a href="javascript:next();">>></a></li>';
	nav += '<li><a href="javascript:next();">Suivant <span class="glyphicon glyphicon-forward"></span></a></ul>';

	/* on ferme la liste qui contient la barre de navigation */
	nav += '</ul>';
	
	/* Affichage dans le div "page_navigation" de la barre de navigation */
	$('#pagination').html(nav);
	
	/* Affichage des éléments de la page */
	set_display(0, show_per_page);
});