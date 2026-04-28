<h2>Recherche de sites</h2>

<form method="get" action="index.php">
    <input type="hidden" name="page" value="site">
    <input type="hidden" name="action" value="search">
    <input type="text" name="q" placeholder="Mot-clé" value="{$vue.q|default:''}">
    <select name="idCategorie">
        <option value="0">Toutes les catégories</option>
        {foreach $vue.categories as $cat}
            <option value="{$cat.idCategorie}" {if $vue.selectedCategory == $cat.idCategorie}selected{/if}>
                {$cat.libelle}
            </option>
        {/foreach}
    </select>
    <button type="submit">Rechercher</button>
</form>

{if $vue.results|@count > 0}
    <ul>
    {foreach $vue.results as $site}
        <li>
            <a href="{$site.url}" target="_blank">{$site.titre}</a>
            <p>{$site.descriptions}</p>
            <small>Catégorie: {$site.category}</small>
        </li>
    {/foreach}
    </ul>
{else}
    <p>Aucun résultat trouvé.</p>
{/if}