    // Fonction pour mettre à jour le nombre d'articles dans le panier
    function updateNombreArticles(quantite) {
    var nombreArticlesElement = document.getElementById("nombre-articles");
    nombreArticlesElement.textContent = quantite;
}

    // Exemple d'utilisation de la fonction
    // Mettre à jour le nombre d'articles avec une valeur de départ
    updateNombreArticles(0);

    // Exemple d'ajout d'un article au panier
    var boutonsAjouterPanier = document.querySelectorAll("#add-panier");
    boutonsAjouterPanier.forEach(function(bouton) {
    bouton.addEventListener("click", function() {
        // Ajoutez ici votre logique pour ajouter un article au panier

        // Exemple : Incrémenter le nombre d'articles dans le panier
        var quantiteActuelle = parseInt(document.getElementById("nombre-articles").textContent);
        updateNombreArticles(quantiteActuelle + 1);
    });
});
