<!-- Page Index -->
<?php

include("entete.php");

if(isset($_SESSION['User']))
{
    echo 'Bienvenue ' . $_SESSION['User']. '<br/>'. '<br/>';
}
?>


    <!-- CONTENU DE MA PAGE -->
 
        <div class="row">
    
        <!-- Ecran moyen : 6 colonnes et Ecran large : 8 colonnes -->

        <section class="col-md-6 col-lg-8">
        
                    <h1>Accueil</h1>
                    <hr>
                            
        <article class="article">
                    <h4>L'entreprise</h4>
                    <p id="entreprise">Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
                    <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
                    <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.</p>
        </article>
                    
        <article class="article">
                    <h4>Qualité</h4>
                    <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.</p>
                    <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
        </article>
                    
        <article class="article">
                    <h4>Devis gratuit</h4>
                    <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d'intervention.</p>
        </article>
                    
        <hr>
                    
        </section>
        
        <!-- COLONNE DROITE -->
        
        <!-- Ecran mobile : 1 colonne et disparition de la colonne de droite Ecran moyen : 6 colonnes et Ecran large : 4 colonnes -->
        <aside id="div1" class="d-none d-sm-block col-md-6 col-lg-4 colonne">
                    <h3>[ COLONNE DROITE ]</h3> 
                    <p class="droite">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem amet accusantium repellat consequatur nostrum odit ipsam saepe iusto expedita quos, dolores laudantium, pariatur distinctio aut magni ipsa ipsum maiores officiis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem amet accusantium repellat consequatur nostrum odit ipsam saepe iusto expedita quos, dolores laudantium, pariatur distinctio aut magni ipsa ipsum maiores officiis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem amet accusantium repellat consequatur nostrum odit ipsam saepe iusto expedita quos, dolores laudantium, pariatur distinctio aut magni ipsa ipsum maiores officiis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem amet accusantium repellat consequatur nostrum odit ipsam saepe iusto expedita quos, dolores laudantium, pariatur distinctio aut magni ipsa ipsum maiores officiis!</p>
        </aside>
        
        </div>

        <!-- PIED DE PAGE -->

<?php
include("pieddepage.php");
?>
