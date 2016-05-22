Le gabarit a été adapté pour Pluxml mais fonctionne seulement après avoir:
- installé le plugin Vignette
- créé quelques articles comportant toujours une vignette, et destiné au moins 3 d'entre eux à la page d'accueil
- créé un répertoire nommé "cache" au niveau racine de Pluxml
- déplacé le fichier img.php du présent répertoire dans le niveau racine de Pluxml
- déplacé le fichier class.plx.show.php du présent répertoire dans le niveau core/lib/ de Pluxml pour écraser celui qui s'y trouve (si vous avez toujours l'original!).  Il est très légèrement modifié et n'affectera rien qui roule déjà, une seule fonction y a été ajoutée au tout début.


Le carrousel de la page d'accueil utilise la liste d'articles qui font partie de la catégorie "page d'accueil".

Le logo et certains autres éléments visuels du gabarit original ont été laissés en place pour garder les proportions, il devra évidemment être remplacé par une image de votre choix.

Le gabarit fait une utilisation élaborée du magnifique plugin Vignette (créé par Rockyhorror au http://thepoulpe.net/index.php?article20/plugin-vignette) mais également de l'utilitaire de rognage cImage qui est complètement encapsulé dans le fichier "img.php".  L'image de vignette obligatoire assignée à un article est alors "tranchée" dans la plus grande résolution possible mais en respectant le gabarit selon la page.  Nul besoin de créer des miniatures, vous n'en aurez jamais besoin.  Si les images n'apparaissent pas, vérifiez si vous avez bien créé un répertoire vide appelé "cache" au niveau racine de Pluxml.  Pour plus d'information sur ce puissant utilitaire, consulter le site de son créateur au http://dbwebb.se/opensource/cimage .

