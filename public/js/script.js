    // Fonction pour mettre à jour le nombre d'articles dans le panier
    function updateNombreArticles(quantite) {
    var nombreArticlesElement = document.getElementById("nombre-articles");
    nombreArticlesElement.textContent = quantite;

    if (quantite > 0) {
    nombreArticlesElement.style.display = "inline"; // Afficher le span
} else {
    nombreArticlesElement.style.display = "none"; // Masquer le span
}

    // Stocker le nombre d'articles en session
    sessionStorage.setItem("nombreArticles", quantite);
}

    // Exemple d'utilisation de la fonction
    // Récupérer le nombre d'articles depuis la session
    var nombreArticlesSession = sessionStorage.getItem("nombreArticles");
    var quantiteDepart = nombreArticlesSession ? parseInt(nombreArticlesSession) : 0;
    updateNombreArticles(quantiteDepart);

    // Exemple d'ajout d'un article au panier
    var boutonsAjouterPanier = document.querySelectorAll("#addcart");
    boutonsAjouterPanier.forEach(function(bouton) {
    bouton.addEventListener("click", function() {
        // Ajoutez ici votre logique pour ajouter un article au panier

        // Exemple : Incrémenter le nombre d'articles dans le panier
        var quantiteActuelle = parseInt(document.getElementById("nombre-articles").textContent);
        updateNombreArticles(quantiteActuelle + 1);
    });
});
