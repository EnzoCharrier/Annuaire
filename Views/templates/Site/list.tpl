<nav>
        <ul>
            <li>
                <a href="http://127.0.0.1:8080/index.php?page=site&action=list"> Mes Sites </a>
           </li>
            <li>
                <a href="http://127.0.0.1:8080/index.php?page=categorie&action=list">Mes Categorie </a>
           </li>
           <li>
                <a href="http://127.0.0.1:8080/index.php?">Deconnexion </a>
           </li>
        </ul>
    </nav>

<h2>Mes sites</h2>
<p>{$vue.description|default:'Gérez vos sites web'}</p>

<a class="btn btn-primary" href="index.php?page=site&action=add">Ajouter un site</a>

{if $vue.sites|@count > 0}
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>URL</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach $vue.sites as $site}
                <tr>
                    <td>{$site.titre}</td>
                    <td><a href="{$site.url}" target="_blank">{$site.url}</a></td>
                    <td>{$site.category_libelle}</td>
                    <td>{$site.descriptions}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="index.php?page=site&action=update&idSite={$site.idSite}">Modifier</a>
                        <a class="btn btn-danger btn-sm" href="index.php?page=site&action=delete&idSite={$site.idSite}" onclick="return confirm('Voulez-vous supprimer ce site ?');">Supprimer</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/if}
