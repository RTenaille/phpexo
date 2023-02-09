 <div class="detailsDuRecit">
    <aside class="couvertureDuRecit">
        <img src="<?=$recit->illustrationRecit?>" alt="">
        <h3><?=$recit->titreRecit?></h3>
    </aside>
    <p class="texteDuRecit"><?=$recit->texteRecit?></p>
    <p class="mentionRedacteur">Ce récit nous est proposé par <a href="index.php?page=utilisateur&id=<?=$recit->redacteur->identifiantUtilisateur?>"><?=$recit->redacteur->pseudoUtilisateur?></a></p>
 </div>
