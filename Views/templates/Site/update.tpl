<h2>Modifier un site</h2>

<form action="index.php?page=site&action=update&idSite={$vue.site.idSite}" method="post">
    <div class="form-group">
        <label for="titre">Titre du site</label>
        <input type="text" name="titre" id="titre" placeholder="Titre" value="{$vue.site.titre}" required>
    </div>

    <div class="form-group">
        <label for="url">URL</label>
        <input type="url" name="url" id="url" placeholder="http://example.com" value="{$vue.site.url}" required>
    </div>

    <div class="form-group">
        <label for="descriptions">Description</label>
        <textarea name="descriptions" id="descriptions" placeholder="Description du site" rows="4" required>{$vue.site.descriptions}</textarea>
    </div>

    <div class="form-group">
        <label for="idCategorie">Catégorie</label>
        <select name="idCategorie" id="idCategorie" required>
            <option value="">-- Sélectionnez une catégorie --</option>
            {foreach $vue.categories as $cat}
                <option value="{$cat.idCategorie}" {if $vue.site.idCategorie == $cat.idCategorie}selected{/if}>{$cat.libelle}</option>
            {/foreach}
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="index.php?page=site&action=list" class="btn btn-secondary">Annuler</a>
</form>
