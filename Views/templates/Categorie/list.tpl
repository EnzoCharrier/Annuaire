<nav>
        <ul>
            <li>
                <a href="index.php?page=site&action=list"> Mes Sites </a>
           </li>
            <li>
                <a href="index.php?page=categorie&action=list">Mes Categories </a>
           </li>
           <li>
                <a href="index.php?page=auth&action=logout">Deconnexion </a>
           </li>
        </ul>
    </nav>

<h2><a class="btn btn-primary" href="index.php?page=categorie&action=add">Ajouter</a></h2>
<p>{$vue.description}<p>    
<div>
    <table class="table"><thead><tr><td>Libelle</td><td>Action</td></tr></thead>
        <tbody>
{foreach $vue.categories as $cat}
    <tr><td>{$cat.libelle}<td>
        <td><a class="btn btn-primary" href="index.php?page=categorie&action=update&idCategorie={$cat.idCategorie}">modification</a>
            | <a class="btn btn-danger" href="index.php?page=categorie&action=delete&idCategorie={$cat.idCategorie}" onclick="return confirm('Voulez vous vraiment supprimer cette catégorie?');">
   Suppression
</a>
        </td>
    </tr>
{/foreach}
    </tbody>
    </table>
</div>
    <script>
        function sup(id){
            if(window.confirm("Voulez vous vraiment supprimer l'élément?")){
                window.location.replace("index.php?page=categorie&action=delete&id="+id);
            }
        };
        
    </script>
